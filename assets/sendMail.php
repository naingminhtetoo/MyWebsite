<?php
$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];


$to = "nmhoo714@gmail.com";
$subject = "From My Website";

$header = "From:".$email." \r\n";

$retval = mail ($to,$subject,$message,$header);

if( $retval == true ) {
   echo "1";
}else {
   echo "0";
}
?>
