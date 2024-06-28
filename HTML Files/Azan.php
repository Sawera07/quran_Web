<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prayer Times</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../CSS Files/Azan.css">
</head>
<body>
    <nav class="navbar navbar-light  justify-content-between p-3 " style="background-color: rgb(103, 69, 27); ">
        <a class="navbar-brand text-light fw-bold mx-5" >القرآن الكريم</a>
        <form class="form-inline">
          <input class="form-control mr-sm-2 " type="search" placeholder="Search"  id="searchInput" aria-label="Search">
          <button class="btn btn-secondary my-2 my-sm-0 mr-5" type="submit">Search</button>
        </form>
      </nav>
    <h1>Prayer Times in Sahiwal</h1>
    <table id="prayerTimesTable">
        <thead>
            <tr>
                <th>Azan Name</th>
                <th>Azan Time</th>
            </tr>
        </thead>
        <tbody>
            <!-- Prayer times will be dynamically added here -->
        </tbody>
    </table>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../JQ Files/azan.js"></script>
</body>
</html>
