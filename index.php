<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.0/css/line.css">
</head>
<body>
<main>
    <div id="propChooser">
        <h1>How will your layout be?</h1>
        <form>
            <div class="gridBlock">
                <label for="seatHeight">Height:</label>
                <input id="seatHeight">
            </div>
            <div class="gridBlock">
                <!-- Empty For Now -->
            </div>
            <div class="gridBlock">
                <label for="seatWidth">Width:</label>
                <input id="seatWidth">
            </div>
            <div id="buttonWrapper">
                <button>Next <i class="uil uil-angle-right-b"></i></button>
            </div>
        </form>
    </div>
    <div id="seatChart"></div>
</main>
</body>
<script src="script.js"></script>
</html>