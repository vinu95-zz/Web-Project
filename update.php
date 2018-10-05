<?php
include_once 'dbConnection.php';
session_start();
$email = $_SESSION['email'];

//delete user
if (isset($_SESSION['key'])) {
    if (@$_GET['demail'] && $_SESSION['key'] == 'vinu') {
        $demail = @$_GET['demail'];
        $result = mysqli_query($con, "DELETE FROM user WHERE email='$demail' ") or die('Error');
        header("location:success.php?q=1");
    }
}

$name = $_POST['name'];
$name = ucwords(strtolower($name));
$gender = $_POST['gender'];
$email = $_POST['email'];
$password = $_POST['password'];
$name = stripslashes($name);
$name = addslashes($name);
$name = ucwords(strtolower($name));
$gender = stripslashes($gender);
$gender = addslashes($gender);
$email = stripslashes($email);
$email = addslashes($email);

$password = stripslashes($password);
$password = addslashes($password);
$password = md5($password);

//Update user
if (@$_GET['update']) {
    $update = @$_GET['update'];
    $result = mysqli_query($con, "UPDATE user SET email='$email' ,name='$name', gender='$gender', password='$password'  WHERE email='$update' ") or die('Error');
    header("location:account.php?q=1");
}
