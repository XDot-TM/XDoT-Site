<?php

include('config.php');
include(PATH_PHP.'helper_functions.php');


class MailSender {
        private $email_from = null;
        private $email_to = null;
        private $email_cc = null;
        private $email_bcc = null;


        public function __construct($from, $to, $cc, $bcc) {
                $this->email_from = $from;
                $this->email_to = $to;
                $this->email_cc = $cc;
                $this->email_bcc = $bcc;
        }


        public function send_email($subject, $message) {
                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                $headers .= "From: " . $this->email_from['name'] . "<" . $this->email_from['address'] . "> " . "\r\n";
                if(!empty($bcc)){
                        $headers .= $this->generate_extra_emails_text($bcc, 'Bcc');
                }
                if(!empty($cc)){
                        $headers .= $this->generate_extra_emails_text($cc, 'Cc');
                }
                $headers .= 'X-Mailer: PHP/' . phpversion();

                foreach ($this->email_to as $to) {
                        try{
                                $send_status = mail($to['address'], $subject, $message, $headers);
                                if(!$send_status) {
                                        $response = 'There seems to  be a problem and the mail was not delivered!';
                                        echo generate_response('ERROR', $response);
                                }
                                else {
                                        $response = 'Mail successfully delivered!';
                                        echo generate_response('OK', $response);
                                }
                        }
                        catch(Exception $ex) {
                                $response = 'There was a problem sending the mail! Error: ' . $ex;
                                die(generate_response('ERROR', $response));
                        }
                }
        }


        public function message_from_template($template_filename, $template_parameters) {
                $path = PATH_EMAIL_TEMPLATES . $template_filename;
                $message = '';
                try {
                        if (file_exists($path)) {
                                $message = file_get_contents($path);
                                $message = strtr($message, $template_parameters);
                        }
                        else {
                                die('The template file <b>' . $path . '</b> was not found!');
                        }
                }
                catch (Exception $ex) {
                        die('The template file <b>' . $path . '</b> was not found.');
                }
                return $message;
        }


        public function generate_extra_emails_text($extra_emails, $type) {
                $text = $type . ': ';
                foreach($extra_emails as $to){
                        $text .= $to['address'] . ',';
                }
                $text = rtrim($text, ',');
                return $text . "\r\n";
        }
        
}

?>
