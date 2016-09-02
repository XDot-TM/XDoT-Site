$(document).ready(function() {

    $("#all-languages > div").click(function() {
        var selected_language = $(this).attr('value');
        select_language(selected_language);
    });

});


var select_language = function(selected_language) {
    setCookie("language", selected_language, 30);
    location.reload();
}
