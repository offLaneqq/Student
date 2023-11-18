<?php

define('TITLE', 'Contact | Dmytro Coorp.');
include('./includes/header.php');

?>

<div id="contact">

    <hr />
    <h1>Feedback Form</h1>

    <?php

    function header_injection($str)
    {
        return preg_match("/[\r\n]/", $str);
    };

    if (isset($_POST['contact_submit'])) {
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $msg = $_POST['message'];

        if (header_injection($name) || header_injection($email)) {
            die();
        }

        if (!$name || !$email || !$msg) {
            echo ("<h4 class='error'>All fields required.</h4><a href='contact.php' class='button block'>Go back and try again.</a>");
            exit;
        }

        $to = 'srk90512@gmail.com';
        $subject  = "$name sent you a message via contact form";
        $message  = "Name: $name\r\n";
        $message .= "Email: $email\r\n";
        $message .= "Message:\r\n$msg";

        if (isset($_POST['subscribe']) && $_POST['subscribe'] == 'Subscribe') {
            $message .= "\r\n\r\nPlease add $email to the mailing list\r\n";
        }

        $message = wordwrap($message, 72);

        $headers  = "MIME-Version: 1.0]\r\n";
        $headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
        $headers .= "From: $name <$email>\r\n";
        $headers .= "X-Priority: 1\r\n";
        $headers .= "X-MSMail-Priority: High\r\n\r\n";

        #send main
        mail($to, $subject, $message, $headers);

    ?>
        <h5>Thanks for contacting Dmytro Coorp.</h5>
        <p>Please allow 48 hours to response</p>
        <p><a href="./index.php" class="button block">&laquo;Go to Home Page.</p>
    <?php } else { ?>

        <form method="post" action="" id="contact-form">

            <label for="name">Your Name: </label>
            <input type="text" id="name" name="name">

            <label for="email">Your Email: </label>
            <input type="text" id="email" name="email">

            <label for="message">Your Message: </label>
            <textarea id="message" name="message"></textarea>

            <input type="checkbox" id="subscribe" name="subscribe" value="Subscribe">
            <label for="subscribe">Subscribe to newslatter</label>

            <input type="submit" class="button next" name="contact_submit" value="Send Message">

        </form>
    <?php } ?>
</div>

<hr />

<?php

include('./includes/footer.php');

?>