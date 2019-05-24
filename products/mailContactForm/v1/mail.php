<?php
if($_POST){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // $headers  = "Content-type: text/html; charset=utf-8 \r\n"; 
    // $headers .= "From: Site <info@mail.com>\r\n";
//send email
    mail("karthikpadav@gmail.com","My Subject:",$message);
}
?>