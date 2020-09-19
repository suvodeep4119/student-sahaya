<?php 

include("db.php"); 

$nam=$_POST['nam'];
$mob=$_POST['mob'];
$email=$_POST['email'];
$msg=$_POST['msg'];

$sql="INSERT INTO feedback (name, mob_num, e_mail,message)
VALUES
('$nam','$mob','$email','$msg')";
 mysql_query($sql);
$s= "Your message has been received";
 header( 'Location: feedback.php' ) ;
?>