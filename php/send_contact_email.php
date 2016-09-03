<?php

    include('../config.php');
    include(PATH_CLASSES.'class_mail_sender.php');


    $name = (isset($_POST['name']) ? $_POST['name'] : null);
    $email = (isset($_POST['email']) ? $_POST['email'] : null);
    $message = (isset($_POST['message']) ? $_POST['message'] : null);

    $name = ucwords(strtolower($name));
    $email = strtolower($email);

    $email_from = array('name' => $name, 'address' => $email);
    $email_to = array(
            array('name' => EMAIL_XDOT_NAME, 'address' => EMAIL_XDOT_ADDRESS)
    );
    $email_cc = array();
    $email_bcc = array();

    $email_subject = '[XDOT] Client Contact Message';
    $template_filename = 'contact_email.html';
    $template_parameters = array(
            '__NAME__' => $name,
            '__MESSAGE__' => $message
    );

    $mailer = new MailSender($email_from, $email_to, $email_cc, $email_bcc);
    $email_message = $mailer->message_from_template($template_filename, $template_parameters);
    $mailer->send_email($email_subject, $email_message);

 ?>
