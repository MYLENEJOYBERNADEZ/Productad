<?php
include('conn.php');

if (isset($_POST['update'])) {
$product=$_POST['product'];
$quality=$_POST['quality'];
$price=$_POST['price'];
$description=$_POST['description'];
$id=$_POST['id'];
$query=mysqli_query($con1,"Update item set product='$product',quality='$quality',price='$price',description='$description' where id='$id'");
if ($query==true) {
	echo '<script>window.location.href="index.php";alert("Item updated successfully!");</script>';
		
}}elseif (isset($_POST['delete'])) {
	
	$id=$_POST['id'];
	$query=mysqli_query($con1,"DELETE from item where id='$id'");
	if ($query==true) {
		echo '<script>window.location.href="index.php";alert("Item Deleted successfully!");</script>';
	}
}else{
	echo"Something went wrong!";
} 
?>