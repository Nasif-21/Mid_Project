<?php
session_start();
"../Model/Com.json";
echo "Welcome to complain","<br>";

?>
<form action="../Controller/CplVal.php" method="post">
Write down your problem:
<textarea id="cpl" rows="4" col="50"></textarea><br><br>
<button type="Submit" name="btnclick2">Click</button>
<br>
<br>
<?php 
    if (isset($_GET['errorMsg'])) {
        if (!empty($_GET['errorMsg'])) {
            echo $_GET['errorMsg'];
        }
    }
?>
</form>
