var fetch_arr;
$.ajax({
    url: "https://cdn.jsdelivr.net/npm/quran-json@3.1.2/dist/quran_ur.json",
    dataType: "text",
    success: function(data) {
        console.log(JSON.parse(data));
        fetch_arr = JSON.parse(data);
        quran_load_data(fetch_arr);
    }
});

var surah_list = $(".surah_list");
var ayats= $(".ayats");
var ayat = $(".ayat");

function quran_load_data(arr) {
    for (var i = 0; i < arr.length; i++) {
        var surah = $("<div></div>");
        surah.addClass("surah");
        surah.html(`(${arr[i].id}) &nbsp ${arr[i].transliteration}  (${"سورة"} ${arr[i].name})`);
        surah_list.append(surah);
    }
    $(".surah").each(function(index) {
        if (index === 1) {
            $(this).click(); // Simulate click on the second surah element
        }
    
        $(this).click(function() {
            $(".surah_list").css("display", "none");
            $(".ayats").css("display", "block");
            ayats.html(""); 
    
            var surah_name = $("<div></div>").addClass("surah_name");
            surah_name.html(`
                <span>${arr[index].id}</span>
                <span> ${"سورة"} ${" "} ${arr[index].name}</span>
                <span>${arr[index].total_verses}</span>
            `);
            //typename
            var type_name = $("<div></div>").addClass("type_name");
            type_name.html(`
                <span>${arr[index].translation}</span>
                <span>${arr[index].type}</span>
                <span>${arr[index].transliteration}</span>
            `);

            ayats.append(surah_name);
            ayats.append(type_name);

            var surah_ayats = arr[index].verses;
            for (let j = 0; j < surah_ayats.length; j++) {
                console.log(surah_ayats[j]);
                var ayat = $("<div></div>").addClass("ayat");
                var arbi = surah_ayats[j].text;
                var ur_translate = surah_ayats[j].translation;
                ayat.html(`
                    <span class='arbi'>${arbi}</span>
                    <span class='translate'>${ur_translate}</span>
                `);
                ayats.append(ayat);
            }
            
            
            
        });
    });
    
    
}
