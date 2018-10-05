<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <title>Project Name</title>

  <?php if (@$_GET['w']) {echo '<script>alert("' . @$_GET['w'] . '");</script>';}
?>
</head>
<?php
include_once 'dbConnection.php';
?>
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
    echo '<span class="h6">Hello</span> ' . $name . '</a></li>';
    echo '<li class="nav-item">';
    echo ' <a class="ml-5 text-white " style="text-decoration:none" href="logout.php?q=index.php">';
    echo '<i class="fa fa-sign-in"></i> Sign Out</a></li></ul>';

}?>
</div>
</div>
</nav>

<!--navigation menu-->
<nav class="navbar navbar-inverse bg-primary navbar-toggleable-md">
      <div class="container">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleContainer" aria-controls="navbarsExampleContainer" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand mr-5" href="#"></a>

        <div class="collapse navbar-collapse mx-5" id="navbarsExampleContainer">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active mx-5" <?php if (@$_GET['q'] == 1) {
    echo 'class="active"';
}
?>>
            <a class="nav-link lead" href="account.php?q=1"><span class="fa fa-home"></span> Account Details <span class="sr-only">(current)</span></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

<!--users start-->
<?php if (@$_GET['q'] == 1) {

    $result = mysqli_query($con, "SELECT * FROM user WHERE email='$email' ") or die('Error');
    echo '<div class="panel"><table class="table table-striped title1">
<tr><td><b>S.N.</b></td><td><b>Name</b></td><td><b>Gender</b></td><td><b>Email</b></td><td></td></tr>';
    $c = 1;
    while ($row = mysqli_fetch_array($result)) {
        $name = $row['name'];
        $gender = $row['gender'];
        $email = $row['email'];

        echo '<tr><td>' . $c++ . '</td><td>' . $name . '</td><td>' . $gender . '</td><td>' . $email . '</td>
	<td><a title="Update User" href="userupdate.php?email=' . $email . '" style="
    text-decoration: none;"><span class="h6"> Update </span><b><span class="fa fa-times lead" aria-hidden="true" style="
    color: red;"></span></b></a></td></tr>';

    }
    $c = 0;
    echo '</table></div>';

}?>
<!--user end-->

<!--Footer Starts-->

<footer id="main-footer" class="bg-inverse fixed-bottom">
<div class="container text-white text-center mt-2">
<h1 class="h3 d-inline">Project Name</h1>
<p>Copyright &copy; 2018</p>
</div>
</footer>



<script src="js/jquery.min.js"></script>
  <script src="js/tether.min.js"></script>
  <script src="js/bootstrap.min.js"></script>


</body>
</html>
