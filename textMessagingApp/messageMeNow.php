<?php

// this line loads the library 
require('twilio-php/Services/Twilio.php'); 
require('keys.php');
 
$client = new Services_Twilio($_SESSION["account_sid"], $_SESSION["auth_token"]);

$people = array(
        "+17863281019" => "Sam",
    );

foreach ($people as $number => $name) {
 
	$sms = $client->account->messages->sendMessage("954-998-0841", $number, "Hey $name, reply with '1' to sign up.");
    }
 

if(!$name = $people[$_REQUEST['From']]) {
	$name = "Unknown";
    }

$body = $_REQUEST['Body'];

if ($body == "1") {
	$response = "To proceed with sign up, ...";
} else {
	$response = "Did not understand your command";
}

header("content-type: text/xml");
echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";

?>

<Response>
  <Message><?php echo $name, $response; ?></Message>
</Response>