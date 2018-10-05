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
<body class="bg-primary">
  <nav class="navbar navbar-toggleable-sm navbar-inverse bg-inverse p-0">
    <div class="container">
      <button class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a href="index.php" class="navbar-brand mr-3">Project Name</a>
      <div class="collapse navbar-collapse" id="navbarNav">

        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a href="account.php" data-toggle="modal" data-target="#myModal" class="nav-link">
              <i class="fa fa-sign-in"></i> Sign In
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="modal fade model-lg" id="myModal">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title title1"><span class="h3 text-primary" >Log In</span></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" action="login.php?q=index.php" method="POST">
<fieldset>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-3 control-label" for="email"></label>
  <div class="col-md-9">
  <input id="email" name="email" placeholder="E-Mail" class="form-control input-lg" type="email">

  </div>
</div>


<!-- Password input-->
<div class="form-group">
  <label class="col-md-3 control-label" for="password"></label>
  <div class="col-md-9">
    <input id="password" name="password" placeholder="Password" class="form-control input-lg" type="password">

  </div>
</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Log in</button>
		</fieldset>
</form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--sign in modal closed-->



<div class="row">
<div class="col-md-7"></div>
<div class="col-md-4 panel">
<!-- sign in form begins -->
  <form class="form-horizontal bg-inverse mb-3 mt-5 p-2" name="form" action="sign.php?q=account.php" onSubmit="return validateForm()" method="POST">
<!-- Text input-->
<div class="form-group">
  <div class="col-md-12 mt-3">
  <input id="name" name="name" placeholder="Enter your name" class="form-control p-2 input-md" type="text">

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
    <input id="email" name="email" placeholder="Enter your email" class="form-control input-md" type="email">

  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <div class="col-md-12">
    <input id="password" name="password" placeholder="Enter your password" class="form-control input-md" type="password">

  </div>
</div>

<div class="form-group">
  <div class="col-md-12">
    <input id="cpassword" name="cpassword" placeholder="Confirm Password" class="form-control input-md" type="password">

  </div>
</div>
<?php if (@$_GET['q7']) {echo '<p style="color:red;font-size:15px;">' . @$_GET['q7'];}?>
<!-- Button -->
<div class="form-group">
<div class="col-md-12 mb-3">
<button type="submit" class="btn btn-outline-primary btn-md btn-block">Sign Up</button>
</div>
</div>
</form>
</div><!--col-md-6 end-->
</div></div>
</div><!--container end-->

<!--Footer Starts-->

<footer id="main-footer" class="bg-inverse fixed-bottom">
    <div class="container text-white text-center mt-2">
    <h1 class="h3 d-inline">Project Name</h1>
   <p>Copyright &copy; 2018</p>
   <ul class="list-inline">
   <li class="list-inline-item mx-4"><a data-toggle="modal" data-target="#login" href="">Admin</a></li>
   <li class="list-inline-item mx-4"><a data-toggle="modal" data-target="#developers" href="">Developer</a></li>
 </ul>
    </div>
  </footer>

<!-- Modal For Developers-->
<div class="modal fade title1" id="developers">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      <h4 class="modal-title" style="font-family:'typo' "><span style="color:orange">Developers</span></h4>
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
    </div>

      <div class="modal-body">
        <p>
		<div class="row">
		<div class="col-md-4">
		 <img src="img/avatar.png" width=100% height=100% alt="Vinu" class="img-rounded">
		 </div>
		 <div class="col-md-5">
		<a href="https://www.facebook.com/vinodkumar.modaliyar" style="color:#202020; font-family:'typo' ; font-size:18px" title="Find on Facebook">Vinod Kumar</a>
		<h4 class=" text-primary h6">vinukumar0911@gmail.com</h4>
		<h4 class=" text-primary h6">East West Institute of Technology</h4></div></div>
		</p>
      </div>

    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!--Modal for admin login-->
	 <div class="modal fade" id="login">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      <h4 class="modal-title"><span class="h3 text-warning">Login</span></h4>
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
      </div>
      <div class="modal-body title1">
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">
<form role="form" method="post" action="admin.php?q=index.php">
<div class="form-group">
<input type="text" name="uname" maxlength="30"  placeholder="Admin ID" class="form-control"/>
</div>
<div class="form-group">
<input type="password" name="password" maxlength="15" placeholder="Password" class="form-control"/>
</div>
<div class="form-group" align="center">
<input type="submit" name="login" value="Login" class="btn btn-outline-primary" />
</div>
</form>
</div><div class="col-md-3"></div></div>
      </div>
      <!--<div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>-->
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


  <script src="js/jquery.min.js"></script>
  <script src="js/tether.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>
