$(document).ready(function() {
    // API URL
    var apiUrl = "https://api.alquran.cloud/v1/quran/ar.asad";

    // Fetch Quran from API
    $.ajax({
        url: apiUrl,
        method: 'GET',
        success: function(data) {
            console.log(data);
            if (data.code === 200 && data.data && data.data.juz) {
                var juzz = data.data.juz;

                // Get the Juzz list container
                var juzzList = $("#juzz-list");

                // Populate the Juzz list
                juzz.forEach(function(juz) {
                    var listItem = $("<li></li>");
                    listItem.addClass("list-group-item");
                    listItem.attr("data-index", juz.index);
                    listItem.html(`
                        <span class="name">${"Juzz "} ${juz.index}</span><br>
                        <span class="enname">${juz.englishName}</span>
                        (<span class="en_trans">${juz.englishNameTranslation}</span>)
                    `);
                    juzzList.append(listItem);
                });

                // Display Juzz content when a Juzz is clicked
                juzzList.on("click", "li", function(event) {
                    var juzzNumber = $(this).data("index");
                    window.location.href = "../HTML Files/juzz.html?juzzNumber=" + juzzNumber;
                });

                // Search functionality
                $("#searchInput").on("input", function() {
                    var searchText = $(this).val().toLowerCase();
                    $("#juzz-list li").each(function() {
                        var juzzNumber = $(this).find(".name").text().toLowerCase();
                        var juzzEnglishName = $(this).find(".enname").text().toLowerCase();
                        if (juzzNumber.includes(searchText) || juzzEnglishName.includes(searchText)) {
                            $(this).show();
                        } else {
                            $(this).hide();
                        }
                    });
                });
            } else {
                console.error("Failed to fetch Juzz or Juzz data is empty.");
            }
        },
        error: function(xhr, status, error) {
            console.error("Failed to fetch Juzz:", error);
        }
    });
});
