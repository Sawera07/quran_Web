<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Surah Content</title>
  <link rel="stylesheet" href="../CSS Files/suratstyle.css">
  <style>
    body{
    background-image:   url("https://themazine.com/html/alquran/assets/images/icons/featured.png");
}
  </style>
</head>
<body>
  <div class="container">
    <div id="surah-content">
      <div id="audio">
      
   </div>
    </div>
 
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <!-- <script src="../JQ Files/surahsscript.js"></script> -->
  <script>
    $(document).ready(function() {
    // Function to get query parameters from URL
    function getQueryParam(param) {
        const queryString = window.location.search;
        const urlParams = new URLSearchParams(queryString);
        return urlParams.get(param);
    }

    var surahNumber = getQueryParam("surahNumber");

    var apiUrl = "https://api.alquran.cloud/v1/surah/" + surahNumber + "/ar.asad";

    // Fetch Surah content from API
    $.ajax({
        url: apiUrl,
        method: 'GET',
        success: function(data) {
            if (data.code === 200) {
                var surah = data.data;

            
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

  </script>
</body>
</html>
