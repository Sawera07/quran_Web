$(document).ready(function() {
    // API URL
    var apiUrl = "https://api.aladhan.com/v1/asmaAlHusna";

    // Fetch Names from API
    $.ajax({
        url: apiUrl,
        method: 'GET',
        success: function(data, textStatus, xhr) {
            if (xhr.status === 200) { // Checking the HTTP status code
                var Names = data.data;

                // Get the name list container
                var Namelist = $("#AllahsName");

                // Populate the name list
                Names.forEach(function(names) {
                    var listItem = $("<li></li>");
                    listItem.addClass("list-group-item");
                    listItem.attr("data-index", names.number);
                    listItem.html(`
                        <span class="name">${names.name}</span><br>
                        <span class="enname">${names.transliteration}</span>
                        (<span class="en_trans">${names.en.meaning}</span>)
                    `);
                    Namelist.append(listItem);
                });

                // Display name content when a name is clicked
                Namelist.on("click", "li", function(event) {
                    var nameNumber = $(this).data("index");
                    window.location.href = "../HTML Files/name.html?nameNumber=" + nameNumber;
                });

                // Search functionality
                $("#searchInput").on("input", function() {
                    var searchText = $(this).val().toLowerCase();
                    $("#AllahsName li").each(function() {
                        var nameName = $(this).find(".name").text().toLowerCase();
                        var nameTransliteration = $(this).find(".enname").text().toLowerCase();
                        if (nameName.includes(searchText) || nameTransliteration.includes(searchText)) {
                            $(this).show();
                        } else {
                            $(this).hide();
                        }
                    });
                });
            } else {
                console.log("Failed to fetch Names.");
            }
        },
        error: function(xhr, status, error) {
            console.error("Failed to fetch Names:", error);
        }
    });
});
