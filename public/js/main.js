(function(global) {

    $(document).ready(function() {

        translatePage();

        $('body').click(function(e) {
            hideLanguagesIfClickedOutside(e);
        });

    });

})(this);


function hideLanguagesIfClickedOutside(e) {
    if ($("#language-select").has(e.target).length === 0) {
        $("#all-languages").css('display', 'none');
        $("#language-flag-gray-filter").css('display', 'none');
    }
}
