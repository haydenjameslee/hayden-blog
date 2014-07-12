// jQuery for page scrolling feature - requires jQuery Easing plugin
// $(function() {
//     $('.page-scroll a').bind('click', function(event) {
//         var $anchor = $(this);
//         $('html, body').stop().animate({
//             scrollTop: $($anchor.attr('href')).offset().top
//         }, 1000, 'easeInOutExpo');
//         event.preventDefault();
//     });
// });

$(document).ready(function () {
    insertEmail();
});





var insertEmail = function () {
    var email = 'haydenjameslee@gmail.com';

    $('.insert-email')
        .attr('href', 'mailto:' + email)
        .text(email);
};