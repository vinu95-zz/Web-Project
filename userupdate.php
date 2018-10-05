<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <title>Blogen Admin Area</title>

  <?php if (@$_GET['w']) {echo '<script>alert("' . @$_GET['w'] . '");</script>';}
?>
<script>
function validateForm() {var y = document.forms["form"]["name"].value;	var letters = /^[A-Za-z]+$/;if (y == null || y == "") {alert("Name must be filled out.");return false;}var z =document.forms["form"]["college"].value;if (z == null || z == "") {alert("college must be filled out.");return false;}var x = document.forms["form"]["email"].value;var atpos = x.indexOf("@");
var dotpos = x.lastIndexOf(".");if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {alert("Not a valid e-mail address.");return false;}var a = document.forms["form"]["password"].value;if(a == null || a == ""){alert("Password must be filled out");return false;}if(a.length<5 || a.length>25){alert("Passwords must be 5 to 25 characters long.");return false;}
var b = document.forms["form"]["cpassword"].value;if (a!=b){alert("Passwords must match.");return false;}}

</script>

</head>
<body class="bg-success">
<nav class="navbar navbar-toggleable-sm navbar-inverse bg-inverse p-0">
<div class="container">
  <button class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#navbarNav">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a href="" class="navbar-brand mr-3">Project Name</a>
  <div class="collapse navbar-collapse" id="navbarNav">
<?php
include_once 'dbConnection.php';
session_start();
if (empty($_SESSION['email'])) {
    echo "<div class=\"alert alert-danger align-right my-2 mx-5 p-2\">You Should Login To Your Account";
    header("location:index.php");
    exit;
} else {
    $name = $_SESSION['name'];
    $email = $_SESSION['email'];

    include_once 'dbConnection.php';
    echo '<ul class="navbar-nav ml-auto">';
    echo '<li class="nav-item">';
    echo '<a class= "text-white h5 " style="text-decoration:none" href="account.php?q=1">';
    echo '<span class="h6">Hello, </span> <a href="success.php?q=1">' . $name . '</a></a></li>';

}?>
</div>
</div>
</nav>

<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4 panel">
<!-- sign in form begins -->
  <form class="form-horizontal bg-inverse mb-3 mt-5 p-2" name="form" action="update.php?update=<?php echo $email ?>
" onSubmit="return validateForm();" method="POST">
<!-- Text input-->
<div class="form-group">
  <div class="col-md-12 mt-3">
  <input id="name" name="name" placeholder="Enter your name" value="<?php echo htmlspecialchars($name); ?>" class="form-control p-2 input-md" type="text">

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <div class="col-md-12">
    <select id="gender" name="gender" placeholder="Enter your gender" class="form-control input-md" >
   <option value="Male">Select Gender</option>
  <option value="M">Male</option>
  <option value="F">Female</option> </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <div class="col-md-12">
    <input id="email" name="email" placeholder="Enter your email" value="<?php echo htmlspecialchars($email); ?>" class="form-control input-md" type="email">

  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <div class="col-md-12">
    <input id="password" name="password" placeholder="Enter your password"  class="form-control input-md" type="password" required>

  </div>
</div>

<div class="form-group">
  <div class="col-md-12">
    <input id="cpassword" name="cpassword" placeholder="Confirm Password" class="form-control input-md" type="password" required>

  </div>
</div>
<?php if (@$_GET['q7']) {echo '<p style="color:red;font-size:15px;">' . @$_GET['q7'];}?>
<!-- Button -->
<div class="form-group">
<div class="col-md-12 mb-3">
<button type="submit" class="btn btn-outline-primary btn-md btn-block" >Update</button>
</div>
</div>
</form>
</div><!--col-md-6 end-->
</div></div>


<!--Footer Starts-->

<footer id="main-footer" class="bg-inverse fixed-bottom">
    <div class="container text-white text-center mt-2">
    <h1 class="h3 d-inline">Project Name</h1>
   <p>Copyright &copy; 2018</p>
    </div>
  </footer>