
<?php  
$user_name ='name';
$user_email ='email';
$user_phone = 'phone';
$user_subject = 'subject';
$user_message = 'message';

$subject = "Alifur Resume Message";
$to ="shakilcoding@gmail.com";

$massege = "My subject is ".$user_subject."\r\n";
$massege .= "My Phone is ".$user_phone."\r\n";
$massege .= "My name is: ".$user_name." & My Email is: ".$user_email."\r\n"; 
$massege .= " & My messsage is :".$user_message."\r\n"; 

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From: contact@2pservices.io"."\r\n" ;

$mail = mail($to,$subject,$massege,$headers);
if($mail == true){
  echo "success";
}
else{
  echo "error";
} 


