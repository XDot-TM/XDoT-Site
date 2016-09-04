
function setCookie(cookie_name, cookie_value, expiration_days) {
        var d = new Date();
        d.setTime(d.getTime() + (expiration_days*24*60*60*1000));
        var expires = "expires="+ d.toUTCString();
        document.cookie = cookie_name + "=" + cookie_value + "; " + expires;
}



function getCookie(cookie_name) {
        var name = cookie_name + "=";
        var ca = document.cookie.split(';');
        for(var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == ' ') {
                        c = c.substring(1);
                }
                if (c.indexOf(name) == 0) {
                        return c.substring(name.length, c.length);
                }
        }
        return "";
}



function deleteCookie(cookie_name) {
        document.cookie = cookie_name + "=; expires=Thu, 01 Jan 1970 00:00:00 UTC";
}



function translatePage() {
        var language = getCookie("language");
        if (language == "") {
                language = "english";
                setCookie("language", language, 30);
        }

        if (language !== "english") {
                // load translation json file
                var translation_file = "public/translate/" + language + ".json";
                $.getJSON(translation_file, function(json) {
                        // apply translation on every element
                        $("#home-button").text(sanitize_data(json['header']['Home']));
                        $("#about-button").text(sanitize_data(json['header']['About Us']));
                        $("#portofolio-button").text(sanitize_data(json['header']['Portofolio']));
                        $("#contact-button").text(sanitize_data(json['header']['Contact']));

                        $("#service-branding > .service-title").html(sanitize_data(json['middle']['services']['Branding']['title']));
                        $("#service-branding > .service-text").html(sanitize_data(json['middle']['services']['Branding']['text'].join(" ")));
                        $("#service-webdesign > .service-title").html(sanitize_data(json['middle']['services']['Webdesign']['title']));
                        $("#service-webdesign > .service-text").html(sanitize_data(json['middle']['services']['Webdesign']['text'].join(" ")));
                        $("#service-marketing > .service-title").html(sanitize_data(json['middle']['services']['Marketing']['title']));
                        $("#service-marketing > .service-text").html(sanitize_data(json['middle']['services']['Marketing']['text'].join(" ")));

                        $("#team-title").text(sanitize_data(json['middle']['team']['title']));

                        $("#contact-info-title").html(sanitize_data(json['footer']['contact-info']['title'].join(" ")));
                        $("#contact-info-text").html(sanitize_data(json['footer']['contact-info']['text'].join(" ")));

                        $("#contact-form-name > input").attr("placeholder", sanitize_data(json['footer']['contact-form']['placeholder-name']));
                        $("#contact-form-email > input").attr("placeholder", sanitize_data(json['footer']['contact-form']['placeholder-email']));
                        $("#contact-form-message > textarea").attr("placeholder", sanitize_data(json['footer']['contact-form']['placeholder-message']));
                        $("#contact-form-btn-submit").attr("value", sanitize_data(json['footer']['contact-form']['btn-submit']));
                });

                // set the corresponding icon
                $("#language-flag").css('background-image', 'url("public/images/language_' + language + '_flag.png")');
        }
}



// Allow only <br> tag, other tags should be escaped
function sanitize_data(data) {
        var special_chars = {
                "<": "&lt;",
                ">": "&gt;",
                "&": "&amp;",
                "/": '&#x2F;',
                '"': '&quot;',
                "'": '&#39;'
        };
        var breaks_replaced = data.replace(/<\/br>/g, "$BREAK#");
        breaks_replaced = data.replace(/<br\/>/g, "$BREAK#");
        var sanitized_data = String(breaks_replaced).replace(/[<>&"'\/]/g, function (s) {
                                        return special_chars[s];
                            });
        return sanitized_data.replace(/\$BREAK#/g, "<br/>");
}



function clear_contact_form_data() {
        $("#contact-form-name input").val('');
        $("#contact-form-email input").val('');
        $("#contact-form-message textarea").val('');
}



function startCarouselAutoplay() {
        var currentItem = 0;
        var items = $('.carousel-open');

        var t = setInterval(function() {
                currentItem++;
                items.prop('checked', false);
                $("#carousel-" + currentItem).prop('checked', true);
                $("#carousel-" + currentItem).attr('checked', 'checked');

                if (currentItem === items.length) {
                        currentItem = 0;
                }
        }, 5000);
}



function scrollToID(id){
        $('html,body').animate({
                scrollTop: $("#" + id).offset().top
        },'slow');
}
