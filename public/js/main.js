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

    bindEvents();
});


var bindEvents = function () {

    // Load more posts on blog list
    $('body.blog .more-posts').on('click', loadMorePosts);
};

var insertEmail = function () {
    var email = 'haydenjameslee@gmail.com';

    $('.insert-email')
        .attr('href', 'mailto:' + email)
        .text(email);
};

var loadMorePosts = function () {

    var moreButton = $(this);
    var currentPosts = parseInt(moreButton.attr('data-post-count')); // Current number of posts displayed

    var getData = {
        lowLimit  : currentPosts
    };

    $.get('/blog/posts', getData, function (data) {

        var posts = data;
        var postsCont = $('.posts-container');

        for (var i = 0; i < posts.length; i++) {
            postsCont.append(postTemplate(posts[i]));
        }

        if (posts.length == 0) {
            moreButton.removeClass('more-posts');
            moreButton.text('No more posts');
            moreButton.attr('disabled', 'disabled');
        }

        moreButton.attr('data-post-count', getData.lowLimit + posts.length);
    });
};

var postTemplate = function (post) {
    return $('<div>').addClass('post').append(
        $('<h3>').append($('<a>').attr('href', '/blog/'+post.slug).text(post.title)),
        $('<p>').addClass('date').text(jQuery.timeago(post.created_at)),
        $('<p>').text(post.body),
        $('<a>').attr('href','http://twitter.com/home?status=http://hayden.io/blog/'+post.slug+' @haydenjameslee').text('Leave a comment'),
        ' // ',
        $('<a>').attr('href', 'http://twitter.com/search?q=hayden.io/'+post.slug).text('View comments'),
        $('<hr>')
    );
};