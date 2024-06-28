<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quran Surahs</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="../CSS FILES/surahliststyle.css">
</head>
<body>
  <nav class="navbar navbar-light  justify-content-between p-3 " style="background-color: rgb(103, 69, 27);">
    <a class="navbar-brand text-light fw-bold mx-5" >القرآن الكريم</a>
    <form class="form-inline">
      <input class="form-control mr-sm-2 " type="search" placeholder="Search"  id="searchInput" aria-label="Search">
      <button class="btn btn-secondary my-2 my-sm-0 mr-5" type="submit">Search</button>
    </form>
  </nav>
<div class="container mt-5">
  <h1 class="text-center mb-4">{القرآن الكريم}</h1>
  <div class="row">
    <div class="col-md-12">
   
      <div class="list-type">
      <ol id="surah-list" class="list-group " ></ol></div>
    
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
  $(document).ready(function() {
    // API URL
    var apiUrl = "https://api.alquran.cloud/v1/quran/ar.asad";


    $.ajax({
        url: apiUrl,
        method: 'GET',
        success: function(data) {
            if (data.code === 200) {
                var surahs = data.data.surahs;
                
                var surahList = $("#surah-list");

                // Populate the Surah list
                surahs.forEach(function(surah) {
                    var listItem = $("<li></li>");
                    listItem.addClass("list-group-item");
                    listItem.attr("data-index", surah.number);
                    listItem.html(`
                        <span class="name">${surah.name}</span><br>
                        <span class="enname">${"Surah "}${surah.englishName}</span>
                        (<span class="en_trans">${surah.englishNameTranslation}</span>)
                    `);
                    surahList.append(listItem);
                });

                // Display Surah content when a Surah is clicked
                surahList.on("click", "li", function(event) {
                    var surahNumber = $(this).data("index");
                    
                    window.location.href = "../HTML Files/surah.php?surahNumber=" + surahNumber;
                });

                $("#searchInput").on("input", function() {
                    var searchText = $(this).val().toLowerCase();
                    $("#surah-list li").each(function() {
                        var surahName = $(this).find(".name").text().toLowerCase();
                        var surahEnglishName = $(this).find(".enname").text().toLowerCase();
                        if (surahName.includes(searchText) || surahEnglishName.includes(searchText)) {
                            $(this).show();
                        } else {
                            $(this).hide();
                        }
                    });
                });
            } else {
                console.log("Failed to fetch Surahs.");
            }
        },
        error: function(xhr, status, error) {
            console.error("Failed to fetch Surahs:", error);
        }
    });
});

</script>
</body>
</html>
