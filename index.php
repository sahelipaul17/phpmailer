//using smtp: simple mail transfer protocal
//in simple, sending mail to people

<?php 

$to_email = "paulshikha.1@gmail.com";
$subject = "test via php";
$body="HI, this is test email send by php script go throw it";
$headers = "From:paulsaheli.17@gmail.com";


if(mail($to_email,$subject,$body,$headers)) {
    echo "Email successfully to $to_email";

}else{
    echo "Email sending failed!";
}

?>