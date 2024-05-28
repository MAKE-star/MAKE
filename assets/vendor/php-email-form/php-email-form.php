<?php
class PHP_Email_Form {
    public $to;
    public $from_name;
    public $from_email;
    public $subject;
    public $message;

    public function add_message($content, $label, $length = 0) {
        // You can implement this method to add content to the email message.
        // You may want to format the content as needed.
        $this->message .= "$label: $content\n";
    }

    public function send() {
        // Implement this method to send the email using the configured parameters.
        // You can use the PHP mail() function or a library like PHPMailer to send the email.
        // Return 'OK' on successful email sending.
        // Return an error message on failure.
        $headers = "From: {$this->from_name} <{$this->from_email}>\r\n";
        if (mail($this->to, $this->subject, $this->message, $headers)) {
            return 'OK';
        } else {
            return 'Error: Email sending failed.';
        }
    }
}
?>
