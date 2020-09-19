<?php
session_start();
//connect to database
$db=mysqli_connect("localhost","root","","authentication");
if(isset($_POST['login_btn']))
{
$username=mysql_real_escape_string($_POST['username']);
$password=mysql_real_escape_string($_POST['password']);
$password=md5($password); //Remember we hashed password before storing last time
$sql="SELECT * FROM users WHERE username='$username' AND password='$password'";
$result=mysqli_query($db,$sql);
if(mysqli_num_rows($result)==1)
{
$_SESSION['message']="You are now Loggged In";
$_SESSION['username']=$username;
header("location:home.php");
}
else
{
$_SESSION['message']="Username and Password combiation incorrect";
}
}
?>
<!DOCTYPE html>
<html>
  <title>Student Sahāya</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
</head>
<body>
 
  <div class="container">
   <div class="header">
    <h1>Login or <a href="register.php">Register</a></h1>
  </div>
  <?php
  if(isset($_SESSION['message']))
  {
  echo "<div id='error_msg'>".$_SESSION['message']."</div>";
  unset($_SESSION['message']);
  }
  ?>
    <form method="post" action="login.php">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="text" class="form-control" id="" placeholder="Enter username" name="username">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="" placeholder="Enter password" name="password">
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div>
    <button type="submit" name="login_btn" class="btn btn-default">Submit</button>
  </form>
</div>
</div>
</div>
</div>




</body>
</html>
<!--
In 2 minutes 8 second you don a mistake then last time only you found
In 2 minutes 49 second you done a mistake then last time only you found
Please Change this Your Video Length is Decrease
Your Suscribers will increase
I Like and Thanks for  Who are all Helping to Create this Video
About Me: www.visualcv.com/karthickraja
-->