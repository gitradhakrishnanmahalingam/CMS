<?php
    
    
        // If CAPTCHA is successfully completed...
		
		 $subject = "Castle Monterssori - ENQ Mail";
$to = "pandiyan5in@gmail.com";
//$username = $_POST['nametxt'];
//$contactNo = $_POST['phonetxt'];
$from = $_POST['email'];
//$enq = $_POST['messagetxt'];
$message = "Mail ID :\t$from\n";

$headers = "From: $from";

$mailsent = mail($to,$subject,$message,$headers);
//echo "Mail Sent.";

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


