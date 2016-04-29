<?php

// this line loads the library 
require('twilio-php/Services/Twilio.php'); 
require('keys.php');

session_start();

?>

<?
$client = new Services_Twilio($_SESSION["account_sid"], $_SESSION["auth_token"]); 
 
$client->account->messages->create(array( 
    'To' => "+1YOUR-OWN-NUMBER", 
    'From' => "+1YOUR-TWILIO-NUMBER", 
    'Body' => "Hey Sam! Good luck on your Chinese exam!", 
));

?>