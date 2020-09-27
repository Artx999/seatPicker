$("#seatChart").toggle()

let goToSeatChart = $("#goToSeatChart")

goToSeatChart.click(function () {
    let height = $("#seatHeight").val()
    let width = $("#seatWidth").val()
    if (height && width) {
        $("#propChooser").toggle(1000)
        $("#seatChart").toggle(1000)
    }
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