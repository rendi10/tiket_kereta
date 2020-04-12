<?php

include 'regis.php';
include '../../controller/regisControl.php';
if(isset($_POST['submit'])){
    $main = new regisControl();
    $main->insertUser();
    $main->insertPenumpang();

    header("location: ../../../index.php");


    
}


?>