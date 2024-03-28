$(document).ready(function() {
    // API URL
    var apiUrl = "https://api.alquran.cloud/v1/quran/ar.asad";

    // Fetch Surahs from API
    $.ajax({
        url: apiUrl,
        method: 'GET',
        success: function(data) {
            if (data.code === 200) {
                var surahs = data.data.surahs;

                // Get the Surah list container
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
                    window.location.href = "../HTML Files/surah.html?surahNumber=" + surahNumber;
                });

                // Search functionality
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
