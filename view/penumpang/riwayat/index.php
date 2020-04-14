<?php
include '../template/header.php';

include '../template/sidebar.php';

// mengaktifkan session php
session_start();
if(!isset($_SESSION['username'])) {
   header('location: ../../index.php'); 
} else { 
   $username = $_SESSION['username']; 
   

}

?>
<?php

include '../../../controller/transaksiControl.php';
$main = new transaksiControl();

    $main->riwayat();


?>


<?php
include '../template/footer.php';
?>