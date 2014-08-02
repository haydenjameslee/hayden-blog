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

    // Load more post on blog index
    $('body.blog .more-posts').on('click', loadMorePosts);

    // Load more projects on project index
    $('body.projects .more-projects').on('click', loadMoreProjects);
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

var loadMoreProjects = function () {

    var moreButton = $(this);
    var currentProjects = parseInt(moreButton.attr('data-project-count')); // Current number of posts displayed

    var getData = {
        lowLimit  : currentProjects
    };

    $.get('/projects/range', getData, function (data) {

        var projects = data;
        var projectsCont = $('.projects-container');

        for (var i = 0; i < projects.length; i++) {
            projectsCont.append(projectTemplate(projects[i]));
        }

        if (projects.length == 0) {
            moreButton.removeClass('more-projects');
            moreButton.text('No more projects');
            moreButton.attr('disabled', 'disabled');
        }

        moreButton.attr('data-project-count', getData.lowLimit + projects.length);
    });
};

var postTemplate = function (post) {
    return $('<div>').addClass('post').append(
        $('<h3>').append($('<a>').attr('href', '/'+post.slug).text(post.title)),
        $('<p>').addClass('date').text(jQuery.timeago(post.created_at)),
        $('<hr>')
    );
};

var projectTemplate = function (project) {
    return $('<div>').addClass('project').append(
        $('<h3>').append($('<a>').attr('href', '/'+project.slug).text(project.title)),
        $('<p>').addClass('date').text(jQuery.timeago(project.created_at)),
        $('<hr>')
    );
};