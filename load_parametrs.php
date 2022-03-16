<?php

if(isset($_GET['from_mail']) and isset($_GET['to_mail']) and isset($_GET['subject']) and isset($_GET['body']) and isset($_GET['from_password']) and isset($_GET['from_username']) and isset($_GET['to_username'])){
    $from_email = $_GET['from_mail'];
    $from_password = $_GET['from_password'];
    $to_email = $_GET['to_mail'];
    $subject = $_GET['subject'];
    $body = $_GET['body'];
    $from_user=$_GET['from_username'];
    $to_user=$_GET['to_username']; 
    $to_rollno=$_GET['to_no']; 
    $to_certificate=$_GET['to_certificate']; 


}
?>