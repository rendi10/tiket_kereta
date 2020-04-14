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

        include '../../../controller/profilControl.php';
        $main = new profilControl();
        if (isset($_GET['edit'])) {
            $main->viewEdit();
            
           
        } else {
            
            $main->profil();
        }

?>


<?php
include '../template/footer.php';
?>