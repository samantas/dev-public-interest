<?php
 
    // make an associative array of senders we know, indexed by phone number
    // THIS HAS TO BE A VERIFIED NUMBER IN YOUR TWILIO ACCOUNT I.E. YOUR OWN NUMBER
    $people = array(
        "+11234567890"=>"Name",
    );
 
    // if the sender is known, then greet them by name
    // otherwise, consider them just another monkey
    if(!$name = $people[$_REQUEST['From']]) {
        $name = "Monkey";
    }
 
    // now greet the sender
    header("content-type: text/xml");
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>
<Response>
    <Message><?php echo $name ?>, thanks for the message!</Message>
</Response>