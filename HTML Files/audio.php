<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../CSS Files/audio.css">
    <script src="../js/jquery-3.7.1.min.js"></script>
  
</head>
<body>
    <div class="container">
        <div class="player">
            <div class="ayah">Quran Recitation</div>
            <audio src="" class="quranplayers" controls></audio>
            <div class="buttons">
                <button class="next"><i class="fas fas fa-forward"></i></button>
<button class="play"><i class="fas fas fas fa-play"></i></button>
<button class="prev"><i class="fas fas fas fa-backward"></i></button>


            </div>
        </div>
       <div class="surahs"></div>
    </div>
   <script>
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


    let clickedSurah = document.querySelector(`[data-surah-id="${surahId}"]`);
    clickedSurah.classList.add('selected');
})
.catch(error => console.log(error));
}

function playAudio(audioUrl) {
audio.src = audioUrl;
audio.play();
play.innerHTML = '<i class="fas fa-pause"></i>';
isPlaying = true;
}
//butttonss
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
   </script>
</body>
</html>