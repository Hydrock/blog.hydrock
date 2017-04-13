<?php 

	$message = '';
	
	if (isset($_POST["message"])) {
    	$message =  $_POST["message"];
    } else {
    	$message = "nothing";
    }

    $from = "smitevils@yandex.ru";

    $to = "smitevils@mail.ru";

    $subject = "Test";

    $headers = "From:" . $from;


    mail($to,$subject,$message, $headers);

    echo "Test email sent " . $message;

?>
