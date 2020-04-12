<?php
include '../controller/control.php';
include 'regis.php';
if(isset($_POST['submit'])){
    $main = new controller();
    $main->insertUser();
    $main->insertPenumpang();

    //header("location: ../../index.php");


    
}


?>