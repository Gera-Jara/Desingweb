

<!--sssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss-->

<?php 

include("class.phpmailer.php"); //you have to upload class files "class.phpmailer.php" and "class.smtp.php"
 
$mail = new PHPMailer();
 
$mail->IsSMTP();
$mail->SMTPAuth = true;

$mail->Host = $_POST["smtp.gmail.com"];

$mail->Username = $_POST["proyect.webdesigner@gmail.com"]; //"proyect.webdesigner@gmail.com" //gera.110013001500
$mail->Password = $_POST["gera.110013001500"]; 

$mail->From = $_POST["proyect.webdesigner@gmail.com"];
$mail->FromName = "proyect web";

$mail->AddAddress($_POST["to"],"proyect.webdesigner@gmail.com");
$mail->Subject = "This is the subject";
$mail->Body = "This is a sample message using SMTP authentication";
$mail->WordWrap = 50;
$mail->IsHTML(true);
$str1= "gmail.com";
$str2=strtolower($_POST["uname"]);
If(strstr($str2,$str1))
{
$mail->SMTPSecure = 'SSL';
$mail->Port = 465; //465
if(!$mail->Send()) {
echo "Mailer Error: " . $mail->ErrorInfo;
echo "<br><br> * Please double check the user name and password to confirm that both of them are correct. <br><br>";
echo "* If you are the first time to use gmail smtp to send email, please refer to this link :http://www.smarterasp.net/support/kb/a1546/send-email-from-gmail-with-smtp-authentication-but-got-5_5_1-authentication-required-error.aspx?KBSearchID=137388";
} 
else {
echo "Message has been sent";
}
}
else{
	$mail->Port = 25;
	if(!$mail->Send()) {
echo "Mailer Error: " . $mail->ErrorInfo;
echo "<br><BR>* Please double check the user name and password to confirm that both of them are correct. <br>";
} 
else {
echo "Message has been sent";
}
}  
?>
