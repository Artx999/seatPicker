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
                <input type="number" class="number" id="seatHeight" onkeydown="return event.keyCode !== 69">
            </div>
            <div class="gridBlock">
                <!-- Empty For Now -->
            </div>
            <div class="gridBlock">
                <label for="seatWidth">Width:</label>
                <input type="number" class="number" id="seatWidth">
            </div>
            <div id="buttonWrapper">
                <button class="button" type="button" id="goToSeatChart">Next <i class="uil uil-angle-right-b"></i></button>
            </div>
        </form>
    </div>
    <div id="seatChart">
        <h1>Pick seats between?</h1>
        <div class="inner">
            <div class="left">
                
            </div>
            <div class="right">
                <form>
                    <div class="gridBlock">
                        <label for="seatHeight">How many?</label>
                        <input id="seatHeight" placeholder="0">
                    </div>
                    <div class="gridBlock2">
                        <button id="black" class="button" type="button">Blacklist</button>
                    </div>
                </form>
                <div>
                    <div class="buttonWrapper2">
                        <button class="button">Start <i class="uil uil-angle-right-b"></i></button>
                    </div>
                    <div class="buttonWrapper2">
                        <button id="gray" class="button">Exit <i class="uil uil-times"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
</body>
<script src="script.js"></script>
</html>