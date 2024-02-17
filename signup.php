<!DOCTYPE html>
<html>
<head>
	<title></title>

</head>

<body >

<div class="signup">
	<form action="login.php">
		<button class="btn1">
			Sign-in
		</button >
	</form>
	<center>
		<div class="div1"><br>
			<h2>Sing-up</h2><br>
			<form method="post" action="login2.php">
				<input class="n1" type="text" placeholder="username"  name="user" required="required">
					<input class="n1" type="email" placeholder="email"  name="email" required="required">
						<input class="n1"type="password" placeholder="password"  name="password" required="required">
						<button name="insert" class="btn2">Sign-up now!</button>
			</form>
		</div>
	</center>
</div>
</body>
</html>

<style type="">
.btn2{
	width: 100px;
	height: 35px;
	border:: 1px solid;
	background-color: white;
	border-radius: 20px;
	transition: 0.1s;

}
.btn2:hover{
	transform: scale(1.1);
}
	.n1{
		width: 80%;
		height: 30px;
		margin-bottom: 20px;
		border:none;
		box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px;
		border-radius: 10px;
	}
	.btn1{
		width: 100px;
		height: 30px;
		background-color: transparent;
		color: white;
		border:white solid 1px;
	}
	.btn1:hover{
		transform: scale(1.1);
		background-color: white;
		color: black;
	}
.signup{
	box-shadow: rgba(17, 12, 46, 0.15) 0px 48px 100px 0px;
border-radius: 20px;
	top: 0px;
	width: 40%;
	height: 500px;
	transform: translate(70%,20%);
	 background:linear-gradient(to right,#FF00FF,#EE82EE);
}
.div1{
	width: 70%;
	height: 400px;
	position: relative;top: 10px;
	background-color: white;
	border-radius: 100%;
}
@media(max-width: 600px){
.signup{
	box-shadow: rgba(17, 12, 46, 0.15) 0px 48px 100px 0px;
border-radius: 20px;
	top: 0px;
	width: 540px;
	height: 500px;
	transform: translate(0%,20%);
	 background:linear-gradient(to right,#FF00FF,#EE82EE);
}	
}
</style>