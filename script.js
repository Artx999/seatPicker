let $blackListBtn = $("#blacklistBtn");
// Colors
let $seatChart = $("#seatChart");

$blackListBtn.on('click', '#white', function () {
    // Colors
    $("#white").attr("id", "black").text('Whitelist');
    // Page
});

$blackListBtn.on('click', '#black', function () {
    // Colors
    $("#black").attr("id", "white").text('Blacklist');
    // Page
});
/*
$blackListBtn.click(function(event) {

    event.stopPropagation();

    if ($blackListBtn.hasClass('active')) {
        // Toggle
        $blackListBtn.toggleClass('active');
        // Colors
        $white.attr("id", "black");
        $whiteSec.attr("id", "blackSec");
        $white.text('Blacklist');
        // Page
        $seatChart.css("background-color", "var(--bcBlack)");
    } else if (!$blackListBtn.hasClass('active')) {
        // Toggle
        $blackListBtn.toggleClass('active');
        // Colors
        $black.attr("id", "white");
        $blackSec.attr("id", "whiteSec");
        $black.text('Whitelist');
        // Page
        $seatChart.css("background-color", "var(--white)");
    }
});
*/


$("#seatChart").toggle()

let goToSeatChart = $("#goToSeatChart")

goToSeatChart.click(function () {
    let height = $("#seatHeight").val()
    let width = $("#seatWidth").val()
    if (height && width) {
        $("#propChooser").toggle(0)
        $("#seatChart").toggle(0)
        let seat = $("#seatChart .inner .left")
        seat.css("grid-template-columns", "repeat(" + width +", 1fr)")
        let amount = height * width
        for (let i = 1; i < amount + 1; i++) {
            seat.append("<div class='flexbox'>" + i +"</div>")
        }
    }
})
$(".number").on("keyup", function () {
    if ($(".number").val() > 16) $(".number").val(16)
})
$(document).ready(function() {
    $(".number").inputFilter(function(value) {
        if (event.keyCode !== 69) {
            return /^\d*$/.test(value);    // Allow digits only, using a RegExp
        }
    });
});
(function($) {
    $.fn.inputFilter = function(inputFilter) {
        return this.on("input keydown keyup mousedown mouseup select contextmenu drop", function() {
            if (inputFilter(this.value)) {
                this.oldValue = this.value;
                this.oldSelectionStart = this.selectionStart;
                this.oldSelectionEnd = this.selectionEnd;
            } else if (this.hasOwnProperty("oldValue")) {
                this.value = this.oldValue;
                this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
            } else {
                this.value = "";
            }
        });
    };
}(jQuery));