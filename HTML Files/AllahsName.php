<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AllahsName</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="../CSS Files/AllahsName.css">
    <title>Document</title>
</head>
<body>
   <nav class="navbar navbar-light  justify-content-between p-3 " style="background-color: rgb(103, 69, 27); ">
    <a class="navbar-brand text-light fw-bold mx-5" >القرآن الكريم</a>
    <form class="form-inline">
      <input class="form-control mr-sm-2 " type="search" placeholder="Search"  id="searchInput" aria-label="Search">
      <button class="btn btn-secondary my-2 my-sm-0 mr-5" type="submit">Search</button>
    </form>
  </nav>
<div class="container mt-5">
  <h1 class="text-center mb-4">{أسماء الحسنى}</h1>
  <div class="row">
    <div class="col-md-12">
      <div class="list-type">
      <ol id="AllahsName" class="list-group " ></ol></div>
    
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="../js/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- <script src="../JQ Files/AllahsName.js"></script> -->
<script>
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

</script>
</body>
</html>