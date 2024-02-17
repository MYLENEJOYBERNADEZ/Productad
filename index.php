<?php
include('conn.php');
session_start();

if (!isset($_SESSION['login'])) {
	 echo '<script>window.location.href="login.php"</script>';
}

$id= $_SESSION['ID'];
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
if (isset($_POST['logout'])) {
	session_destroy();
echo'<script>window.location="login.php";</script>';
}

?>

<nav class="nav">
	<a class="a1" href=""><p>Home</p></a>
	
	<a class="a1" href="#div1"><p>About us</p></a>

	
	<form method="post" action="editadmin.php">
	<input type="hidden" value="<?php echo $id ?>"  name="id">

	<a class="a1" href="editadmin.php?id=$id"><p><button class="btn2" name="admin" style="background-color: transparent;color: white;border:none">Edit Profile</button></p></a>
	</form>
    <form method="post">
		<button name="logout" class="a2">Logout</button>
	</form>
</nav>

<div class="background">
	<center>
	<h1 class="h1">Product Management</h1><br><br><br>
	<a class="a1" href="" style="text-indent: 30px; background-color: transparent;color: white; width: 100px;position: relative;top: 0px"><center><p><?php 
$query=mysqli_query($con1,"SELECT user from auth where id='$id'");
if ($query) {
	$row=mysqli_fetch_assoc($query);
?>
 <?php echo "Admin ".$row['user']; ?>
<?php
}
	?></center></p></a>
	</center>

	<form method="post" action="editproduct.php">
		<input type="hidden" name="edit">
	<input class="in3" type="text" placeholder="product" name="product">
	<button name="edit" class="btn3">Search</button>
    </form><br>


	<div class="div1">

		<center>
			<h2 class="h2">Insert Product</h2>
			
			<form method="post" action="editprofile.php">
				<input class="in1" type="text" placeholder="Product" name="product" required="required">
				<input class="in1" type="text" placeholder="Quality" name="quality" required="required">
				<input class="in1"type="number" placeholder="Price" name="price" required="required">
				<input class="in1" type="text" placeholder="Product Description" name="description"  required="required"><br><br><br>
				<input type="hidden" value="<?php echo $id; ?>" name="num">
				<button name="insert" class="btn1">Insert</button>
			</form>
		</center>
	</div>
</div>

<div class="display"><br>
	<h2 style="color: blueviolet;text-indent: 30px;">Product List</h2>
	<br>
	<center>
		<table >
		<tr>	
<th>Product</th>
<th>Quality</th>
<th>Price</th>
<th>Description</th>
</tr>
<?php
$query=mysqli_query($con1,"SELECT * FROM item where num='$id'");
if ($query) {
	while ($row=mysqli_fetch_assoc($query)) {
		
?>

<form method="post" action="editproduct.php">
<tr>
<td><?php echo $row['product']; ?>
<td><?php echo $row['quality']; ?>
<td><?php echo $row['price']; ?>
<td><?php echo $row['description']; ?>
<input type="hidden" value="<?php echo$row['num'] ?>" name="num">
<td><button class="edit" name="edit">Edit</button>
	
</tr>
</form>
		<?php
	}
}

?>

		</table>
	</center>
</div>


<div class="about" id="div1">

	<br><center>
		<h2 style="color: blueviolet;text-indent: 30px;">About us and objectives</h2><br><br>
	</center>
	
<div class="img"></div>
<div class="div2">
	<center><h2>Hello I'm Mylene</h2></center><br>
	<p style="width: 60%;position: relative;left: 20px">I am the author of this website, this website is built for managing any product item information and by the help of different functions we can able to delete or update the specific or target product information, managing information is important because it makes organizing the flow of process.</p>
	
</div>
</div><br><br><br><br><br><br>

<script type="text/javascript">
document.addEventListener('DOMContentLoaded', function() {
  var scrollLinks = document.querySelectorAll('[href^="#"]');
  
  scrollLinks.forEach(function(link) {
    link.addEventListener('click', function(e) {
      e.preventDefault();
      
      var targetId = this.getAttribute('href');
      var targetElement = document.querySelector(targetId);
      
      if (targetElement) {
        targetElement.scrollIntoView({
          behavior: 'smooth'
        });
      }
    });
  });
});
</script>
</body>
</html>

<style type="text/css">
	.div2{
		width: 30%;
		height: 400px;
				   box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px;
				   position: relative;
	top: 70px;
	}
.img{
	background-image: url('mylin.jpg');
	background-size: cover;
	background-repeat: no-repeat;
	width: 30%;
	height: 400px;
	position: relative;
	top: 70px;
	box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;
}
	.about{
		box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;
		height: 500px;
		width: 90%;
		position: relative;
		top: 100px;
		display: flex;
		flex-wrap: wrap;
	}
	.in3{
		height: 30px;
		position: relative;
		top: 100px;
		left: 40px;
	}
	.btn3{
		background-color:dodgerblue;
		width: 90px;
		border: solid white 1px;
		color: white;
		height: 35px;
		transition: 0.1s;
		position: relative;
		top: 100px;
		left: 40px;
	}
	.btn3:hover{
		transform: scale(1.1);
	}
	.edit{
		width: 100px;
		height: 30px;
		background-color: blueviolet;
		color: white;
		transition: 0.1s;
	}
	.edit:hover{
		transform: scale(1.1);
	}
	table{
		height: 100px;
	}
	td{
		text-align: center;
		   box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px;
	}
	th{

width: 150px;
	}
	.display{
		position: relative;
		top: 40px;
		width: 90%;
		height: 400px;
	box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;
  }
	}
	.btn2{
		transition: 0.1s;
	height: 30px;
	position: relative;
	top: -7px;
	}
	.btn2:hover{
		transform: scale(1.1);

	}
	.btn1:hover{
		transform: scale(1.1);
	}
	.btn1{
		width: 100px;
		height: 35px;
		background-color: white;
		border:1px solid;
  transition: 0.1s ease;
	}
	.in1{
		width: 80%;
		height: 35px;
        border:none;
        box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px;
	}
	.h2{
		font-family: "Microsoft Himalaya", Times, serif;
		letter-spacing: 2px;
		font-size: 30px;
	}
	.h1{
		position: absolute;
		text-indent: 40px;
		color: white;
	}
.div1{
	width: 40%;
	height: 400px;
	background-color: white;
	right: -30%;
	position: relative;
	top: 40px;
	border-radius: 10px;
	box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;
}
	.background{
		display: flex;
		flex-wrap: wrap;
		background-image: url("product.jpeg");
		background-size: cover;
		background-repeat: no-repeat;
		width: 100%;
		height: 500px;
	}
	.nav{
display: flex;
		position: relative;
		top: -5px;
		height: 40px;
		background-color:#FF00FF;

	}
	.a2{
		top: 5px;
height: 40px;
		position: relative;
border: 1px solid white;
left: 980px;
height: 30px;
background-color: transparent;
text-decoration: none;
color:white;
margin-right: 10px;
transition: 0.1s ease;

	}
.a2:hover{
	transform: scale(1.1);

	}
	.a1{

position: relative;
top: -3px;
left: 10px;
text-decoration: none;
color: white;
margin-right: 10px;
transition: 0.1s ease;

	}
	.a1:hover{
transform: scale(1.1);
	}

	@media(max-width: 600px){
		.div2{
			width: 505px;
		}
		.img{
			width: 505px;
			height: 600px;
		}
		.about{
			width: 510px;
			position: relative;
			top: 300px;
		}
.nav{
	text-align: center;
	justify-content: center;
	align-items: center;
	}
	.a2{
		top: -2px;
height: 30px;
		position: relative;
border: 1px solid white;
left: 70px;
background-color: transparent;
text-decoration: none;
color:white;
margin-right: 10px;
transition: 0.1s ease;

	}

	.div1{
		width: 500px;
		position: relative;
		left: 10px;
		top: 300px;
	}
	.btn2{
		transition: 0.1s;
	height: 30px;
	position: relative;
	top: 11px;
	}
	.display{
		position: relative;
		top: 40px;
		width: 510px;
		height: 400px;
		top: 300px;
	box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;
  }
}
</style>


