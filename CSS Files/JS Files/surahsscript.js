$(document).ready(function() {
    // Function to get query parameters from URL
    function getQueryParam(param) {
        const queryString = window.location.search;
        const urlParams = new URLSearchParams(queryString);
        return urlParams.get(param);
    }

    // Get Surah number from query parameter
    var surahNumber = getQueryParam("surahNumber");

    // API URL for fetching Surah content
    var apiUrl = "https://api.alquran.cloud/v1/surah/" + surahNumber + "/ar.asad";

    // Fetch Surah content from API
    $.ajax({
        url: apiUrl,
        method: 'GET',
        success: function(data) {
            if (data.code === 200) {
                var surah = data.data;

                // Display Surah content
                $("#surah-content").html(`
                <div class="surah_name">
                   <span class="no" >${surah.number}</span>
                   <span class="sname">${surah.name}</span>
                  <span class="aya"> ${surah.ayahs.length}</span></div>
                  
                  <div class="surat">  ${surah.ayahs.map(ayah => `<span class="ayattext">${ayah.text}${" "}</span><span class="ayatno">(${ayah.numberInSurah})${" "}</span>`).join('')} </div>
                `);
            } else {
                console.log("Failed to fetch Surah content.");
            }
        },
        error: function(xhr, status, error) {
            console.error("Failed to fetch Surah content:", error);
        }
    });
});
