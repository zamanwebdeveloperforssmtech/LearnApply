<!DOCTYPE html>
<html>
<head>
	<title>Our Website</title>
</head>
<body>
	<form action="" method="POST">
		<input type="email" placeholder="to" name="to"><br>
		<input type="text" placeholder="subject" name="subject"><br>
		<input type="email" placeholder="from" name="from"><br>
		<textarea cols="30" rows="8" name="textarea"></textarea>
		<input type="submit" value="send">
	</form>

</body>
</html>
<?php
	$to = $_POST['to'];
	$subject = $_POST['subject'];
	$message = $_POST['textarea'];
	$headers = "From: ".$_POST['from']."\r\n";
	$headers .= "Content-type: text/html;charset=UTF-8" . "\r\n";

	mail($to, $subject, $message, $headers);



?>