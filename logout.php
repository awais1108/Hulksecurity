<?php
session_start();
include("include/conn.php");
date_default_timezone_set('Asia/Karachi');
$ldate=date( 'd-m-Y h:i:s A', time () );
$query=mysqli_query($db,"UPDATE userlog  SET logout = '$ldate' WHERE userEmail = '".$_SESSION['login']."' ORDER BY id DESC LIMIT 1");
if($query){
//$_SESSION['login']="";
session_unset();
session_destroy();
header("location:index.php");
}
?>
