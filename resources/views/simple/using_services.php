<?php
//get data from form  

$fio = $_POST['fio'];
$phone= $_POST['phone'];
$to = "nazirovrafiqjon98@gmail.com";
$subject = "Mail From website";
$txt ="Fio = ". $fio . "\r\n  Phone = " . $phone;
$headers = "From: noreply@tsul.uz";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:tsul.uz");
?>