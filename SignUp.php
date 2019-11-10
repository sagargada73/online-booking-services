<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" type="text/css" href="style2.css">
	<title>Registration forms</title>
</head>
<body>

<header>
	<ul>
			<li><a href="#Home">LOGO</a></li>
			<li><a href="Flights.html">Flights</a></li>
			<li><a href="Hotels.html">Hotels</a></li>
			<li><a href="TopDeals.html">Top Deals</a></li>
			<div class="floatRight">
			<li><a href="">Sign in</a></li>
			<li><a href="Login.html">Login</a></li></div>
	</ul>
</header>
<br><br>

<div class="split left">
<div class="centered">
	<form name="myForm" onsubmit="return validateForm()" action="<?php echo $_SERVER['PHP_SELF']?>" method="post" >	
	<fieldset>
	<legend>Register</legend>
	First Name<br>
	<input type="text" name="fname" placeholder=" Enter First Name" focus required><br>
	Last Name<br>
	<input type="text" name="lname" placeholder=" Enter Last name" required ><br>
	Birthday<br>
	<input type="date" name="dob" placeholder=" Enter Birthday" required><br>
	Mobile no<br>
	<input type="number" name="mobile_no" placeholder="+91" pattern="[0-9]{,10}" title="Wrong input" required>
	Email ID
	<input type="email" name="email" placeholder="Enter Email ID" required><br>
	Password<br>
	<input type="password" name="pass" title="Enter more than 8 characters" pattern=".{8,}" placeholder="More than	  8 characters" required><br>
	<input type="submit" class="button" name="submit" value="Register"><br><br>
	</fieldset>
	</form>
</div>
</div>
<div class="split right">
<div class="centered">
<form name="myForm" onsubmit="return validateForm()" method="post">	
	<fieldset>	
	You can also login via:<br>
	<input type="button" class="button" name="Facebook" value="Facebook">
	<input type="button" class="button" name="Google" value="Google"><br>
	Already have an account?
	<a class="form" href="Login.html">Login</a>
	</fieldset>
</form>
</div>
</div>
<?php  
$host = 'localhost:3306';  
$user = 'root';  
$pass = '';  
$db = 'obs';

$conn = mysqli_connect($host, $user, $pass,$db);  
if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
}  
 
//Inserting records in table
if(isset($_POST['fname'])){
$errors=array();

$fname=mysqli_real_escape_string($conn,$_POST['fname']);
$lname=mysqli_real_escape_string($conn,$_POST['lname']);
$dob=mysqli_real_escape_string($conn,$_POST['dob']);
$mobile_no=mysqli_real_escape_string($conn,$_POST['mobile_no']);
$email=mysqli_real_escape_string($conn,$_POST['email']);
$pass=mysqli_real_escape_string($conn,$_POST['pass']);

$user_check_query="select * from table where email='$email' LIMIT 1";
$results=mysqli_query($conn,$user_check_query);
$user=mysqli_fetch_assoc($result);
	if($user['email'] === $email){
		array_push($errors, "Email is already registered");
	}
	if(count($errors)== 0){
		$pass=md5($pass);
		$query="insert into user values('$fname','$lname','$dob','$mobile_no','$email','$pass')";
		
		mysqli_query($conn,$query);
		
		$_SESSION['fname']=$fname;

	}
}
mysqli_close($conn);  
?>
</body>
</html>