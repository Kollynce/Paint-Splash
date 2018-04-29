<?php

$text=$_POST["text"];
$email=$_POST["email"];
$tell=$_POST["tell"];
$textarea=$_POST["textarea"];

$to="collinsodeny@gmail.com";
$subject="New Message";

mail($to,$subject,$textarea,"from" . $text);
echo("Your message has been sent");

?>