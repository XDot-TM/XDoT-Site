(function(global) {

    $(document).ready(function() {

        translatePage();

        $("#contact-form").submit(function() {
                var data_to_send = {
                        name: $("#contact-form-name input").val(),
                        email: $("#contact-form-email input").val(),
                        message: $("#contact-form-message textarea").val()
                };
                $.ajax({
                        url: 'php/send_contact_email.php',
                        type: 'POST',
                        data: data_to_send,
                        dataType: 'json',
                        success: function(result) {
                                if (result['status'] === 'OK') {
                                        alert('Mail successfully sent!');
                                        // clear_contact_form_data();
                                }
                                else {
                                        alert('There was a problem sending the email!');
                                }
                        },
                        error: function(result) {
                                alert('An error has occured and the email was not sent.');
                        }
                });
                return false;
        });

    });

})(this);
