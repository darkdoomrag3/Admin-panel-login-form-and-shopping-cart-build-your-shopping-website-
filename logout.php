<?php
session_start();
include_once("config.php");
include_once("header.php");
include_once("User-class.php");
$username = "";
$password="";

$session=new Session($username , $password);

 $session->logout();



    header('location:index.php');





?>

<div class="container">
    <div class="row">
        <div class="col">

            <div class="well well-sm">MF Bitch</div>



        </div>
    </div>
</div>


<?php include_once("footer.php"); ?>