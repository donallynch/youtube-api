/**
 * YoutubeApi
 * @type {{search: null, init: youtubeApi.init, registerEvents: youtubeApi.registerEvents, post: youtubeApi.post}}
 */
let youtubeApi = {
    search: null,
    token: null,
    renderer: null,
    loading: null,
    init: function () {
        youtubeApi.search = $('#search-box');
        youtubeApi.token = $('#_token');
        youtubeApi.renderer = $('#renderer');
        youtubeApi.loading = $('#loading');
        youtubeApi.registerEvents();
    },
    registerEvents: function () {
        $(document).ready(function(){
            $(document).on("click", "#get-videos", function () {
                youtubeApi.renderer.html(youtubeApi.loading.text());
                youtubeApi.post("/index", {
                    query: youtubeApi.search.val(),
                    _token: youtubeApi.token.val()
                }, function (response) {
                    youtubeApi.renderer.html(response.html);
                });
            });
        });
        $('input').keypress(function (e) {
            if (e.which == 13) {
                $(this).closest('form').find('.submit').click();
                return false;
            }
        });
    },
    post: function (url, data, func) {
        $.post(url, data)
            .done(function(response) {
                return func(response);
            });
    }
};
youtubeApi.init();