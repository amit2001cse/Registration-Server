<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location: login.php");
exit(); }
?>
<html>
<p align="center" style="font-size: 40px;"> <strong>You have successfully loged in! </strong></p>
</html>
