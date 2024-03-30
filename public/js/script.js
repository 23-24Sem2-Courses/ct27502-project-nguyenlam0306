//cai dat carousel tự chuyển
function activateCarousel() {
    $('.carousel').carousel({
        interval: 2500 // Thời gian chuyển đổi tự động (2,5 giây)
    });
}

$(document).ready(function() {
    activateCarousel();
});