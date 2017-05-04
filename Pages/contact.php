<?php
if($_POST["message"]) {
    mail("pennfe@vcu.edu", "Form to email message", $_POST["message"], "From: paislylondon@gmail.com");
}
?>
