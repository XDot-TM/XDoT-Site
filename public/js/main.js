(function(global) {

    $(document).ready(function() {

        enableNavMenu();

        loadPage("landing-page");

    });


    var enableNavMenu = function() {
        $('#home-button').click(function() {
            loadPage("landing-page");
        });
        $('#about-button').click(function() {
            loadPage("about-page");
        });
        $('#contact-button').click(function() {
            loadPage("contact-page");
        });
    }

})(this);
