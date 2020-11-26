<?php
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    mail($mailTo, 'Subject', 'kek');
}
?>