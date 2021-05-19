<?php
include("dinclude/header.php");
$message = $_POST['message'];
if(isset($_POST['message'])){
message::$touser = $_POST['touser'];
message::sendmessage($con,$message);
echo "done";
}
?>