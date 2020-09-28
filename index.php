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
                <button type="button" class="button" id="goToSeatChart">Next <i class="uil uil-angle-right-b"></i></button>
            </div>
        </form>
    </div>
    <div id="seatChart">
        <h1>Pick seats between?</h1>
        <div class="inner">
            <div class="left">
                <div class="flexbox">1</div>
                <div class="flexbox">2</div>
                <div class="flexbox">3</div>
                <div class="flexbox">4</div>
                <div class="flexbox">5</div>
                <div class="flexbox">6</div>
                <div class="flexbox">7</div>
                <div class="flexbox">8</div>
                <div class="flexbox">9</div>
                <div class="flexbox">10</div>
                <div class="flexbox">11</div>
                <div class="flexbox">12</div>
                <div class="flexbox">13</div>
                <div class="flexbox">14</div>
                <div class="flexbox">15</div>
                <div class="flexbox">16</div>
                <div class="flexbox">17</div>
                <div class="flexbox">18</div>
                <div class="flexbox">19</div>
                <div class="flexbox">20</div>
                <div class="flexbox">21</div>
                <div class="flexbox">22</div>
                <div class="flexbox">23</div>
                <div class="flexbox">24</div>
                <div class="flexbox">25</div>
                <div class="flexbox">26</div>
                <div class="flexbox">27</div>
                <div class="flexbox">28</div>
                <div class="flexbox">29</div>
                <div class="flexbox">30</div>
                <div class="flexbox">31</div>
                <div class="flexbox">32</div>
                <div class="flexbox">33</div>
                <div class="flexbox">34</div>
                <div class="flexbox">35</div>
                <div class="flexbox">36</div>
                <div class="flexbox">37</div>
                <div class="flexbox">38</div>
                <div class="flexbox">39</div>
                <div class="flexbox">40</div>
                <div class="flexbox">41</div>
                <div class="flexbox">42</div>
            </div>
            <div class="right">
                <form>
                    <div class="gridBlock">
                        <label for="seatHeight">How many?</label>
                        <input id="seatHeight" placeholder="0">
                    </div>
                    <div class="gridBlock">
                        <label for="seatWidth">From</label>
                        <input id="seatWidth" placeholder="0">
                    </div>
                    <div class="gridBlock">
                        <label for="seatWidth">To</label>
                        <input id="seatWidth" placeholder="0">
                    </div>
                </form>
                <div>
                    <div id="buttonWrapper2">
                        <button class="button">Start <i class="uil uil-angle-right-b"></i></button>
                    </div>
                    <div id="buttonWrapper2">
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