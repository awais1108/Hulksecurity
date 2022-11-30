<?php
// COde for Wishlist
if(isset($_GET['id']) && $_GET['action']=="wishlist" ){
	if(strlen($_SESSION['login'])==0)
    {   
header('location:login.php');
}
else
{
    $id=$_GET['id'];
    // This will search for the word start at the beginning of the string and remove it
    $id=ltrim($id, 'PPK');  
    // This will search for the word end at the end of the string and remove it
    $id=rtrim($id, 'MrrTT');
mysqli_query($db,"insert into wishlist(userId,productId) values('".$_SESSION['id']."','".$id."')");
$msg="Product is Added into Wish List";
$query=mysqli_query($db,"select count(*) as total from wishlist where userId='".$_SESSION['id']."'");
$rtv=mysqli_fetch_assoc($query);
$_SESSION['wishlist']=$rtv['total'];
header('location:index.php');

}
}
?>