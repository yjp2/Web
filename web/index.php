<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $human = $_POST['human'];
    $from = 'From: PersonalWebsite';
    $to = 'yjpark409@icloud.com';
    $subject = 'Inquiry';
    $body = "From: $name\n Email: $email\n Message: $message";

    if ($_POST['submit']) {
        if ($name != '' && $email != '') {
            if ($human == '5') {				 
                if (mail ($to, $subject, $body, $from)) { 
                echo '<p>Your message has been sent!</p>';
            } else { 
                echo '<p>Something went wrong, go back and try again!</p>'; 
            } 
        } else if ($_POST['submit'] && $human != '5') {
            echo '<p>You answered the anti-spam question incorrectly</p>';
        }
        } else {
            echo '<p>Please fill in all required fields!</p>';
        }
    }
?>
