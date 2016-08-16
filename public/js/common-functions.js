
var loadPage = function(page_name) {

    var page_html_path = "public/pages/" + page_name + ".html";
    var page_js_path = "public/js/page-specific/" + page_name + ".js";

    /* jQuerry 'load' function DOESN'T work in Chrome on localhost (only works on web server) */
    $("#content").load(page_html_path);

    $.ajax({
        url: page_js_path,
        dataType: "script",
        success: function(data) {

        }
    });

}
