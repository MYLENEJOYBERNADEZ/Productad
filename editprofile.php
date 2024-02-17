<?php
include('conn.php');
?>

<?php


if (isset($_POST['update'])) {
	$user=$_POST['user'];
	$email=$_POST['email'];
	$password=$_POST['password'];
$id=$_POST['id'];
	$query=mysqli_query($con1,"Update auth set user='$user',email='$email',password='$password' where id ='$id'");
	if ($query) {
		 echo '<script>window.location.href="index.php";alert("Data updated successfully");</script>';
	}
}else if (isset($_POST['insert'])) {
		$product=$_POST['product'];
			$quality=$_POST['quality'];
				$price=$_POST['price'];
				$num=$_POST['num'];
					$description=$_POST['description'];
		$query=mysqli_query($con1,"Insert into item (product,quality,price,description,num) VALUES ('$product','$quality','$price','$description','$num')");
		if ($query==true) {
			echo '<script>window.location.href="index.php";alert("New product has been inserte successfully");</script>';
		}
}


?>