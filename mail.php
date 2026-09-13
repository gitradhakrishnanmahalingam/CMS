<?php
    function post_captcha($user_response) {
        $fields_string = '';
        $fields = array(
            'secret' => '6LcAzFAUAAAAAPYDPIG3cbwoje-cQuUXwzqYBgeE',
            'response' => $user_response
        );
        foreach($fields as $key=>$value)
        $fields_string .= $key . '=' . $value . '&';
        $fields_string = rtrim($fields_string, '&');

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify');
        curl_setopt($ch, CURLOPT_POST, count($fields));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, True);

        $result = curl_exec($ch);
        curl_close($ch);

        return json_decode($result, true);
    }

    // Call the function post_captcha
    $res = post_captcha($_POST['g-recaptcha-response']);

    if (!$res['success']) {
        // What happens when the CAPTCHA wasn't checked
        //echo '<p>Please go back and make sure you check the security CAPTCHA box.</p><br>';
		$URL="error_message.html";
		header ("Location: $URL");
    } else {
        // If CAPTCHA is successfully completed...
		
		 $subject = "Castle Monterssori - ENQ Mail";
$to = "castlemontessorischool@gmail.com";
$username = $_POST['nametxt'];
$contactNo = $_POST['phonetxt'];
$from = $_POST['emailtxt'];
$enq = $_POST['messagetxt'];
$message = "Name :\t\t$username\nMail ID :\t$from\nContact Number :\t$contactNo\n\nEnquriy : \n$enq";

$headers = "From: $from";

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
    }
?>


