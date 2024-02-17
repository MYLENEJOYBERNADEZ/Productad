
<?php
session_start();
?>



<?php
include('conn.php');

if(isset($_POST['insert'])) {
	
$user=$_POST['user'];
$email=$_POST['email'];
$password=$_POST['password'];

$query=mysqli_query($con1,"INSERT into auth (user,email,password) VALUES ('$user','$email','$password')");
if($query){
echo "success";
}else{
	echo"something went wrong!";
}# code...
}



?>
<?php 
$server="localhost";
$user="root";
$pass="";
$database="product";
$conn=mysqli_connect($server,$user,$pass,$database);
?>
<?php
if (isset($_POST['login'])) {
	# code...
}
try {
    $host = "localhost";
    
    $user = "root";
    $password = "";
 $dbname = "product";
    $con = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // if($conn){
    //     echo 'Connected to DB';
    // }
} catch (PDOException $err) {
    echo $err->getMessage();
}

if (isset($_POST['login'])) {
	# code...
$username = $_POST['email'];
$password = $_POST['password'];
$_SESSION['_email']=$_POST['email'];
$stmt = $con->prepare("SELECT * FROM auth WHERE email = ?");
$stmt->execute([$_POST['email']]);
$user = $stmt->fetch();

if ($user && $password== $user['password'])
{
$username =$_POST['email'];
 
$sql = "SELECT id FROM auth WHERE email = ? ";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();
 
// Step 3: Process the result
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $id = $row["id"];
 
    // Step 4: Display the ID

$_SESSION['ID']=$id;
$_SESSION['login']=true;
   echo '<script>window.location.href="index.php"</script>';
   
}
 
} else {
  echo '<script>window.location.href="login.php";alert("Invalid")</script>';
}
}


?>