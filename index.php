<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,900&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
</head>
<body>
<main>
    <div id="propChooser">
        <h1>How will your layout be?</h1>
        <form>
            <label for="seatHeight">Height:</label>
            <label for="seatWidth">Width:</label>
            <input type="number" id="seatHeight">
            <input type="number" id="seatWidth">
        </form>
    </div>
    <div id="seatChart"></div>
</main>
</body>
<script src="script.js"></script>
</html>