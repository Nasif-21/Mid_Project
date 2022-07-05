<?php
include "../Controller/Logincheck.php";
$username=$password="";
$nameErr=$passwordErr="";
if (isset($_POST["btnclick"])) {
    $error = false;
    if (empty($_POST['uname'])) {
      $nameErr = "username is required";
      $error = true;
    }
if(empty($_POST['pass']))
{
 $passwordErr = "password is required";
 $error = true;
}
}

?>

<form action="" method="post">

<div style="background-image: url('Home.jpg'); background repeat:no-repeat; height: 800px;">
    <center> <h1 style="color:rgb(40,29,14);">Welcome Dear Passenger</center>
   <center><p style="color:rgb(78,53,20)"><b>Lets begin a wonderful journy with our company</b></center>
   <center><h2 style="color:rgb(78,53,20)"><b>Log in </b></center>

   <br>

<center>Username :

<input type="text" id="uname" name="uname" style="height: 30px; width: 300px;"></center><br><br>
<center><span style="color:red;"><?php echo $nameErr; ?></span></center>


    <br>

    <center>Pasword :
    <input type="password" id="pass" name="pass"style="height: 30px; width: 300px;"></center><br>
    <center><span style="color:red;"><?php echo $passwordErr; ?></center><br><br>


<br>
<br>
<center><button type="submit"  name="btnclick" style="background-image:url('lin.jpg'); height: 75px; width: 150px;"></button></center><br>

<center><button type="submit"  name="btnclick2" style="background-image:url('Hp.jpg'); height: 88px; width: 100px;"></button></center><br><br><br><br>
<center><p style= "font-size:20px; color:white;"><b>No account?   </b><a href="SignIn.php">Sign in </a> to get touch with us</p></center>



</div>
</form>
