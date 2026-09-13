<?php
		 $subject = "Castle Monterssori - Newsletter Subscriber";
$to = "castlemontessorischool@gmail.com";
$username = $_POST['subscribeEmail'];
//$contactNo = $_POST['phonetxt'];
$from = $_POST['subscribeEmail'];
//$enq = $_POST['messagetxt'];
$message = "New User Subscription : $username";

$headers = "From: castlemontessorischool@gmail.com";

$mailsent = mail($to,$subject,$message,$headers);
/*echo "Mail Sent.";*/

if($mailsent){
$URL="thank_you.html";
header ("Location: $URL");
}
else {
$URL="error_message.html";
header ("Location: $URL");
}
        // Paste mail function or whatever else you want to happen here!
       // echo '<br><p>CAPTCHA was completed successfully!</p><br>';

?>
