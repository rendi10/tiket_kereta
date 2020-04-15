<?php
include '../template/header.php';

include '../template/sidebar.php';

// mengaktifkan session php
session_start();
if (!isset($_SESSION['username'])) {
    header('location: ../../index.php');
} else {
    $username = $_SESSION['username'];
}


?>

           <?php
            include '../../../controller/transaksiControl.php';
            $main = new transaksiControl();

            if (isset($_GET['prib'])) {
                $id_jadwal = $_GET['prib'];
                $main->viewPribadi($id_jadwal);

                if (isset($_POST['kirim'])) {
                    $main->insert();
                    echo '<script language="javascript">
                        alert ("Berhasil");
                        window.location="index.php";
                        </script>';
                }
                // }else if(isset($_GET['other'])){
                //     include 'pesanLagi.php';


            } else {
                $main->viewSelect();
            }


            ?>
         
           
     
<?php
include '../template/footer.php';
?>