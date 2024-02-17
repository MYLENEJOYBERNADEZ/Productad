<?php
include('conn.php');
session_start();


if (isset($_POST['admin'])) {
$_SESSION['admin']=$_POST['admin'];
if (!isset($_SESSION['admin'])) {
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
unset($_SESSION['admin']);
 echo '<script>window.location.href="index.php"</script>';
}

?>


<?php



if (isset($_POST['admin'])) {
	$id=$_POST['id'];
	$query=mysqli_query($con1,"SELECT * from auth where id='$id'");


if ($query) {
	
	$row=mysqli_fetch_assoc($query);
		?>
<center>
<div class="container">
<form method="post" action="editprofile.php">
	<label for="name">Username <input id="name" class="in" type="" value="<?php echo $row['user'] ?>" type="text" name="user"></label>
	<label for="email">Email user <input id="email"  class="in"type="" value="<?php echo $row['email'] ?>" type="email" name="email">
	<label for="password">Password <input id="password"  class="in"type="" value="<?php echo $row['password'] ?>" type="text" name="password">
		<input type="hidden" value="<?php echo$row['id']; ?>" name="id">
	<br><button name="update" class="btn">Update</button>

</form>

	

</div>
</center>		<?php
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
	}
	.container{
		width: 30%;
		height: 200px;
		background-color: #FF00FF;
		position: relative;
		top: 100px;
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
		height: 200px;
		background-color: #FF00FF;
		position: relative;
		top: 100px;
	}
	}
</style>