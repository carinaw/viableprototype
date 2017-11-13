<?php
if($_POST["message"]) {
    mail("carina.wetzlhuetter@gmail.com", "Form to email message", $_POST["message"], "From: contact-request@viable.at");
	}
?>