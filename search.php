<?php 
include('include/conn.php');
include('include/function.php');
if(isset($_POST['searchbtn']))
{

	$search = mysqli_real_escape_string($db,$_POST['search']);
    searchresults($search);
    
}else
{
    header("location:index.php");
}
?>