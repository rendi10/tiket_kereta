<?php
include '../template/header.php';

include '../template/sidebar.php';


?>

           <?php
            include '../../../controller/jadwalControl.php';
            $main = new jadwalControl();
            if (isset($_GET['t'])) {
                $main->viewInsertAdmin();
                // if (isset($_POST['submit'])) {
                //     $main->insertJadwal();
                //     echo '<script language="javascript">
                //         alert ("Berhasil");
                //         window.location="index.php";
                //         </script>';
                // }
                // } else if (isset($_GET['u'])) {
                //     $kode_barang = $_GET['u'];
                //     $main->viewUpdate($kode_barang);
                // } else if (isset($_GET['d'])) {
                //     $kode_barang = $_GET['d'];
                //     $main->hapus($kode_barang);
            } else {
                $main->indexAdmin();
            }


            ?>
           
     
<?php
include '../template/footer.php';
?>