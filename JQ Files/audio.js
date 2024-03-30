let audio = document.querySelector('.quranplayers'),
surahsContainer = document.querySelector('.surahs'),
next = document.querySelector('.next'),
prev = document.querySelector('.prev'),
play = document.querySelector('.play');

let currentSurahId = null;
let isPlaying = false;

getSurahs();

function getSurahs() {
fetch('https://api.alquran.cloud/v1/surah')
.then(response => response.json())
.then(data => {
    let surahs = data.data;
    surahs.forEach(surah => {
        surahsContainer.innerHTML += `
            <div data-surah-id="${surah.number}">
                <p>${surah.englishName}</p>
                <p>${surah.name}</p>
            </div>`;
    });

    let allSurahs = document.querySelectorAll('.surahs div');
    allSurahs.forEach(surah => {
        surah.addEventListener('click', () => {
            let surahId = surah.getAttribute('data-surah-id');
            currentSurahId = surahId;
            fetchSurahAudio(surahId);
        });
    });
})
.catch(error => console.log(error));
}

function fetchSurahAudio(surahId) {
fetch(`https://api.alquran.cloud/v1/surah/${surahId}`)
.then(response => response.json())
.then(data => {
    let audioUrl = `https://cdn.islamic.network/quran/audio-surah/128/ar.alafasy/${surahId}.mp3`;
    playAudio(audioUrl);

    // Remove the 'selected' class from all surahs
    let allSurahs = document.querySelectorAll('.surahs div');
    allSurahs.forEach(surah => {
        surah.classList.remove('selected');
    });

    // Add the 'selected' class to the clicked surah
    let clickedSurah = document.querySelector(`[data-surah-id="${surahId}"]`);
    clickedSurah.classList.add('selected');
})
.catch(error => console.log(error));
}

function playAudio(audioUrl) {
audio.src = audioUrl;
audio.play();
play.innerHTML = '<i class="fas fa-pause"></i>'; // Change play button icon to pause when audio starts playing
isPlaying = true;
}

// Event listeners for buttons
play.addEventListener('click', () => {
if (isPlaying) {
    audio.pause();
    play.innerHTML = '<i class="fas fa-play"></i>'; 
    isPlaying = false;
} else {
    audio.play();
    play.innerHTML = '<i class="fas fa-pause"></i>'; 
    isPlaying = true;
}
});

next.addEventListener('click', () => {
if (currentSurahId) {
    let nextSurahId = parseInt(currentSurahId) + 1;
    fetchSurahAudio(nextSurahId.toString());
    currentSurahId = nextSurahId.toString();
}
});

prev.addEventListener('click', () => {
if (currentSurahId) {
    let prevSurahId = parseInt(currentSurahId) - 1;
    fetchSurahAudio(prevSurahId.toString());
    currentSurahId = prevSurahId.toString();
}
});