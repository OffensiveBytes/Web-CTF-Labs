<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Akbar TravelEasy Agency</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <header class="my-4">
            <h1>Welcome to Akbar TravelEasy Agency</h1>
            <p>Your one-stop solution for booking flights, hotels, and tours.</p>
        </header>

        <nav>
            <ul class="nav nav-pills">
                <li class="nav-item">
                    <a class="nav-link active" href="index.php?page=home.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=flights.php">Book Flights</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=hotels.php">Find Hotels</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=tours.php">Explore Tours</a>
                </li>
            </ul>
        </nav>

        <hr>

        <div class="content mt-4">
            <?php
            // Vulnerable include logic
            if (isset($_GET['page'])) {
                $page = $_GET['page'];
                include($page); // Vulnerability: RFI via `page` parameter
            } else {
                echo "<p class='lead'>Welcome to TravelEasy! Please select an option from the menu.</p>";
            }
            ?>
        </div>
    </div>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
