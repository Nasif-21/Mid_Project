<?php
session_start();
require ('../Model/UserModel.php');
if(isset($_POST['btnclick']))
{
    $username=$_POST['uname'];
    $password=$_POST['pass'];
    if($username !=null && $password !=null){
    $status=Login($username,$password);
    if($status)
    {
        header("Location:../View/Ppage.php");
    }
    else
    {
        echo "Invalid or incomplete action";
    }
}
}

?>