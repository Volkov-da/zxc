<?php
if (isset($_POST['submit'])) {
    $email = $_POST['email'];

    $mailTo ="dmtry.volkov@yandex.ru";
    $headers = "From: ".$email;
    $txt = "New email on your website!";

    mail($mailTo, $txt, $headers);
    header("Location: index.php?mailsend");
}