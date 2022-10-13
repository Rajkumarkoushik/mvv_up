<?php
if(isset($_POST['submit'])){
    $to = "sreekanya143@gmail.com";



    $name = $_POST['name'];
    $email= $_POST['email'];
    $phone= $_POST['phone'];
    $message= $_POST['message'];
    
    $headers = 'From: '.$email. "\r\n";


    $body = "name : ".$name. "\r\n" .
    		"Phone : ".$phone. "\r\n" .
    		"Message : " . $message;
    if(mail($to, $body , $headers)){
        echo "Mail Sent!";
    }else{
         echo "Failed To Send Mail";
    }
}

?>