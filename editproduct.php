<?php
include('conn.php');
session_start();


if (isset($_POST['edit'])) {
$_SESSION['edit']=$_POST['edit'];
if (!isset($_SESSION['edit'])) {
	 echo '<script>window.location.href="index.php"</script>';
} }else{
	 echo '<script>window.location.href="index.php"</script>';
}

?>


<form method="post">
<input type="hidden" name="admin">
	<button name="back" class="btn2">Home</button>
	</form>
<?php
if(isset($_POST['back'])){
unset($_SESSION['edit']);
 echo '<script>window.location.href="index.php"</script>';
}

?>


<?php



if (isset($_POST['edit'])) {
	if (!empty($_POST['num'])) {
		$id=$_POST['num'];
		$query=mysqli_query($con1,"SELECT * from item where num='$id' ");
		 $row=mysqli_fetch_assoc($query);
?>

<center>
<div class="container">
<form method="post" action="update.php">
	<label for="name">product<input id="name" class="in" value="<?php echo $row['product'] ?>" type="text" name="product"></label>
	<label for="email">quality <input id="email"  class="in" value="<?php echo $row['quality'] ?>" type="text" name="quality">
	<label for="password">price <input id="password"  class="in"type="" value="<?php echo $row['price'] ?>" type="text" name="price">
		<label for="password">description <input id="password"  class="in" value="<?php echo $row['description'] ?>" type="text" name="description">

		<input type="hidden" value="<?php echo$row['id']; ?>" name="id">
	<br><button name="update" class="btn">Update</button><br><br>
<button name="delete" class="btn">Delete</button>
</form>
</div>
</center>	


<?php
	}
	else if (!empty($_POST['product'])) {
		$product=$_POST['product'];
		 $query=mysqli_query($con1,"SELECT * from item where product like '%$product%'");
		 if ($query) {
	    $row=mysqli_fetch_assoc($query);
	    if ($query->num_rows>0) {
		?>
<center>
<div class="container">
<form method="post" action="update.php">
	<label for="name">product<input id="name" class="in" value="<?php echo $row['product'] ?>" type="text" name="product"></label>
	<label for="email">quality <input id="email"  class="in" value="<?php echo $row['quality'] ?>" type="text" name="quality">
	<label for="password">price <input id="password"  class="in"type="" value="<?php echo $row['price'] ?>" type="text" name="price">
		<label for="password">description <input id="password"  class="in" value="<?php echo $row['description'] ?>" type="text" name="description">

		<input type="hidden" value="<?php echo$row['id']; ?>" name="id">
	<br><button name="update" class="btn">Update</button><br><br>
<button name="delete" class="btn">Delete</button>
</form>

</div>
</center>
<?php
}else{
	echo "<center>Not found!</center>";
}

}

}
}

?>




<style type="text/css">
	label{
		color: white;
		position: relative;
		top: 5px;
		text-align: center;
		
	
	}
	.btn2{
		background-color: white;
		color: #FF00FF;
		border: none;
		font-size: 20px;
		transition: 0.1s;
	}
	.btn2:hover{
		transform: scale(1.1);
	}
	.btn{
		position: relative;
		transform: translate(150%,-500%);
		width: 100px;
		height: 35px;
       background-color: transparent;
       border:1px solid white;
       color: white;
       transition: 0.1s;
	}
	.btn:hover{
		background-color: white;
		color: black;
	}
	.container{
		width: 30%;
		height: 250px;
		background-color: #FF00FF;
		position: relative;
		top: 100px;
		box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;
	}
	.in{

		width: 50%;
		height: 35px;
		position: relative;
		display: block;
		left: 30px;
		border: none;
		box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px;
	}

	@media(max-width: 700px){
	.container{
		width: 500px;
		height: 200px;
		background-color: #FF00FF;
		position: relative;
		top: 100px;
	}
	@media(max-width: 600px){
	.container{
		width: 500px;
		height: 250px;
		background-color: #FF00FF;
		position: relative;
		top: 100px;
	}
	}
</style>