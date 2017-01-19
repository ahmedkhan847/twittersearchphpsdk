$(document).ready(function() {
    init();
});

function init() {
    $.ajax({
        // Post select to url.
        type: 'get',
        datatype: "json",
        url: 'http://phpstack-13267-59727-161633.cloudwaysapps.com/twitter/twittersearchphpsdk/index2.php', // expected returned data format.
        statusCode: {
                200: function (response) {
                    $("#twitter-profiles").html(response);
                },
                422: function (response) {
                   alert('Error Getting Data');
                },
                400: function (response) {
                    alert('URL Not Found', 4000);
                }
            }
    });

}