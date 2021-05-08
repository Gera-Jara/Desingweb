
<?php

include("class.phpmailer.php"); //you have to upload class files "class.phpmailer.php" and "class.smtp.php"
 
$mail = new PHPMailer();
 
$mail->IsSMTP();
$mail->SMTPAuth = true;

$mail->Host ="smtp.gmail.com"; //Servidor SMTP de gmail

$mail->Username = "phoenixsoftware.q@gmail.com";
$mail->Password = "quiz12345"; 
 
$mail->From = "phoenixsoftware.q@gmail.com";
$mail->FromName = "Gera";
 
$mail->AddAddress("phoenixsoftware.q@gmail.com","test");
$mail->Subject = "Consulta";
$email = $_POST['email'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$mail->Body = "Haz recibido un nuevo mensaje. \n Correo: $email \n Nombre: $name \n Telefono: $phone  \n Mensaje: \n $message";


$mail->WordWrap = 50;
$mail->IsHTML(true);
// $str1= "gmail.com";
// $str2=strtolower($_POST["uname"]);
// If(strstr($str2,$str1))
// {
$mail->SMTPSecure = 'tls'; 


$mail->Port = 587; //Puerto de google
if(!$mail->Send()) {
echo "Mailer Error: " . $mail->ErrorInfo;
echo "<br><br> * Please double check the user name and password to confirm that both of them are correct. <br><br>";
echo "* If you are the first time to use gmail smtp to send email, please refer to this link :http://www.smarterasp.net/support/kb/a1546/send-email-from-gmail-with-smtp-authentication-but-got-5_5_1-authentication-required-error.aspx?KBSearchID=137388";
} 
else {
echo "Message has been sent";
}
// }
// else{
// 	$mail->Port = 25;
// 	if(!$mail->Send()) {
// echo "Mailer Error: " . $mail->ErrorInfo;
// echo "<br><BR>* Please double check the user name and password to confirm that both of them are correct. <br>";
// } 
// else {
// echo "Message has been sent";
// }
  

?>



