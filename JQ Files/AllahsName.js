$(document).ready(function() {
    // API URL
    var apiUrl = "https://api.aladhan.com/v1/asmaAlHusna";
    $.ajax({
        url: apiUrl,
        method: 'GET',
        success: function(data, textStatus, xhr) {
            if (xhr.status === 200) { 
                var Names = data.data;


                var Namelist = $("#AllahsName");

              
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
