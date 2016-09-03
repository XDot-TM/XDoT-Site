(function(global) {

    $(document).ready(function() {

        translatePage();

        $("#contact-form").submit(function() {
                console.log('sending the email...');

                var data_to_send = {
                        name: $("#contact-form-name input").val(),
                        email: $("#contact-form-email input").val(),
                        message: $("#contact-form-message textarea").val()
                };
                console.log(data_to_send);

                $.ajax({
                        url: 'php/send_contact_email.php',
                        type: 'POST',
                        data: data_to_send,
                        success: function(result) {
                                alert('success!');
                                // clear_contact_form_data();
                        },
                        error: function(result) {
                                alert('error!');
                        }
                });
                return false;
        });


    });

})(this);
