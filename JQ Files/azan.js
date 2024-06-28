$(document).ready(function() {
    var apiUrl = "https://api.aladhan.com/v1/calendar/2024/4?latitude=30.6710&longitude=73.1067&method=4";
    function displayPrayerTimes(countryCode) {
        $.ajax({
            url: apiUrl,
            method: 'GET',
            data: {
                country: countryCode,
                method: 4 
            },
            success: function(response) {
                var prayerTimes = response.data[0].timings;
                var prayerTable = $("#prayerTimesTable tbody");
                
                
                prayerTable.empty();

                
                $.each(prayerTimes, function(prayerName, time) {
                    var row = $("<tr></tr>");
                    row.append($("<td></td>").text(prayerName));
                    row.append($("<td></td>").text(time));
                    prayerTable.append(row);
                });
            },
            error: function(xhr, status, error) {
                console.error("Failed to fetch prayer times:", error);
            }
        });
    }
    displayPrayerTimes("Sahiwal","Pakistan");
   
});
