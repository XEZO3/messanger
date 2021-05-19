<?php
session_start();
if(isset($_POST['submit'])){
    $_SESSION['name']=$_POST['name'];
    header("location: index.php");
}
?>
<html>
<body>
<form method="POST">
<input type="text" name="name" >
<input type="submit" name="submit">
</form>
</body>
</html>