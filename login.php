<?php
require ('db.php');
if (isset($_POST['submit'])){
$username=mysqli_real_escape_string($conn,$_POST['uname']);
$password=mysqli_real_escape_string($conn,$_POST['pass']);

if (!$_POST['uname'] | !$_POST['pass'])
{
echo ("<SCRIPT LANGUAGE='JavaScript'>
 window.alert('You did not complete all of the required fields')
 window.location.href='Login_Page.php'
 </SCRIPT>");
exit();
 }
$sql= mysqli_query($conn,"SELECT 'id' FROM `login_admin` WHERE `username` = '$username' AND `password` = '$password'");
if(mysqli_num_rows($sql) > 0)
{
session_start();
$_SESSION['name'] = $username;
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Login Succesfully!.')
    window.location.href='adminmain.php'
    </SCRIPT>");
   exit();
}else{
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Wrong username password combination.Please re-enter.')
    window.location.href='Login_Page.php'
    </SCRIPT>");
exit();
}
}

?>