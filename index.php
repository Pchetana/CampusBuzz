<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Basic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Fira+Sans">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Gothic+A1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/line-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/Article-Clean.css">
    <link rel="stylesheet" href="assets/css/Features-Boxed.css">
    <link rel="stylesheet" href="assets/css/Highlight-Phone.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Testimonials.css">
</head>

<?php
include("select.php");

session_start();
extract($_POST);

if(isset($_POST['username']) && isset($_POST['password']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];

	$rs=mysqli_query($conn,"select * from user_tbl where email='$username' and password='$password'");
	if(mysqli_num_rows($rs)<1)
	{
        // User not found
        echo "<script>alert('Invalid Email/Password!')</script>";
	}
	else
	{
		$_SESSION["uid"]=$username;
	}
}
if (isset($_SESSION["uid"]))
{
    $uid = $_SESSION["uid"];
    echo '<div class="d-block mx-auto alert alert-success">';
    echo "<h1 align=center>You are already logged in as $uid</h1></div>";
    echo '<a href="Home.php"><button type="button" class="d-block mx-auto btn btn-info">Go to Homepage</button></a>';
    exit;
}
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Basic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Fira+Sans">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Gothic+A1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/line-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/Article-Clean.css">
    <link rel="stylesheet" href="assets/css/Features-Boxed.css">
    <link rel="stylesheet" href="assets/css/Highlight-Phone.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Testimonials.css">
</head>

<body>
    <div class="login-clean" style="background-image: url(&quot;assets/img/baaa.jpg&quot;);background-repeat: no-repeat;background-size: cover;">
        <form name ="form1" method="post" style="background-image: url(&quot;assets/img/blaa.jpg&quot;);">
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"></div>
            <div class="form-group"><input class="form-control" type="email" name="username" placeholder="Email"></div>
			<div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password"></div>
			 <div class="form-group"><button class="btn btn-primary btn-block" type="submit" style="background-color: rgb(222,31,71)" id="submit" value="Login";>Log In</button></div><strong style="color: rgb(252,253,254);">Don't have an Account?&nbsp;</strong><a href="signUp.php">Sign Up</a></form>
   
		<?php
		  if(isset($found))
		  {
		  	echo '<p class="w3-center w3-text-red">Invalid user id or password<br><a href="logg.php">Please try again</p>';
		  }
		  ?>
	 </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>