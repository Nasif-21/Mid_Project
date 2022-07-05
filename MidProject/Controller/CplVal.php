<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === "POST") {
  
    $comp = $_POST['cpl'];

    if (empty($comp)) {
        // $_SESSION['errorMsg'] = "Please fill up the form properly";
        header("Location: ../View/complain.php?errorMsg='Please fill up the form properly'");
        
    }
    else
    {
        $_SESSION['cpl']=$comp;
        class Cpm{
            public $comp;
        
            
            function assign($comp)
            {
                $this->comp=$comp;
            }
           
          }
          $obj=new Cpm();
          $myfile=fopen("\Model\Com.json") or die("Cannot find the file");
          $obj->assign("Problem",$comp);
          $jsondata=json_encode($obj);
          fwrite($myfile,$jsondata);
         // echo $jsondata;
          header("Location: ../View/complain.php?errorMsg='Data stored successfully'");

    }
}

?>