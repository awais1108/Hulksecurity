<?php
if(isset($_GET['action']) && $_GET['action']=="add"){
	$id=$_GET['id'];
    // This will search for the word start at the beginning of the string and remove it
    $id=ltrim($id, 'PPK');  
    // This will search for the word end at the end of the string and remove it
    $id=rtrim($id, 'MrrTT');
    //echo $id;die();
	if(isset($_SESSION['cart'][$id])){
		$_SESSION['qnty']=$_SESSION['cart'][$id]['quantity']++;
	}else{
		$sql_p="SELECT * FROM products WHERE id={$id}";
		$query_p=mysqli_query($db,$sql_p);
        $totalqunty=$_SESSION['qnty'];
		if(mysqli_num_rows($query_p)!=0){
			$row_p=mysqli_fetch_array($query_p);
			$_SESSION['cart'][$row_p['id']]=array("quantity" => 1, "price" => $row_p['productPrice']);
            $quantity=$_SESSION['cart'][$row_p['id']]['quantity'];
            $_SESSION['qnty']=$_SESSION['qnty']+$quantity;
			header('location:index.php');
           //var_dump($_SESSION['cart'][$row_p['id']]);
		}else{
			$message="Product ID is invalid";
		}
	}
}
?>