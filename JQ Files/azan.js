$(document).ready(function() {
    // API URL for getting prayer times
    var apiUrl = "https://api.aladhan.com/v1/calendar/2024/4?latitude=30.6710&longitude=73.1067&method=2";

    // Function to fetch and display prayer times
    function displayPrayerTimes(countryCode) {
        $.ajax({
            url: apiUrl,
            method: 'GET',
            data: {
                country: countryCode,
                method: 2 // Adjust prayer calculation method as needed
            },
            success: function(response) {
                var prayerTimes = response.data[0].timings;
                var prayerTable = $("#prayerTimesTable tbody");
                
                // Empty the table body
                prayerTable.empty();

                // Populate the table with prayer times
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

    // Example: Display prayer times for Sahiwal, Pakistan
    displayPrayerTimes("Sahiwal","Pakistan");
   
});
