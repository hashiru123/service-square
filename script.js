$(document).ready(function () {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 50) {
            $('#back-to-top').fadeIn();
        } else {
            $('#back-to-top').fadeOut();
        }
    });
    // scroll body to 0px on click
    $('#back-to-top').click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 400);
        return false;
    });
});


       // JavaScript function to show the clicked image in modal overlay
       function zoomImage(element) {
        var imageSrc = element.src;
        var modal = document.querySelector('.modal-overlay');
        var modalImage = modal.querySelector('img');
        modalImage.src = imageSrc;
        modal.style.display = 'block';
    }

    // JavaScript function to hide modal overlay when clicked outside the image
    function hideModal() {
        var modal = document.querySelector('.modal-overlay');
        modal.style.display = 'none';
    }