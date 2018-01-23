<?php

$username= $_POST['username'];
$password= $_POST['password'];
$errors = array();

$connect=mysqli_connect("localhost","root","","login");

$result = mysqli_query($connect, "SELECT * FROM logintbl WHERE username = '$username' and password = '$password' ");

$row = mysqli_fetch_array($result);





 if ($row['username'] == $username && $row["password"] == $password){ //&& ("" !== $username || "" !== $password)) {
  //header('location: mainpage.php');

 if(empty($username)) {
   array_push ($errors,"Username is Required");
  }

 if(empty($password)) {
    array_push ($errors,"Password is Incorrect");
  }
else {
  header ('location:mainpage.php');
}
}


 ?>
