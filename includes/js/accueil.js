$(document).ready(function () {
    $('.slider').slider({
        indicators: false
    });

    $(document).ready(function () {
        $('.carousel').carousel({
            shift: 100,
            padding: 50,
            duration: 100,
            indicators: true,
            numVisible: 7
        });
    });
});