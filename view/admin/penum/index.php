           <?php
            include '../../../controller/penumControl.php';
            $main = new penumControl();
            if (isset($_GET['det'])) {
                $id_penumpang = $_GET['det'];
                $main->detailPenum($id_penumpang);
                //     // if (isset($_POST['submit'])) {
                //     //     $main->insertJadwal();
                //     //     echo '<script language="javascript">
                //     //         alert ("Berhasil");
                //     //         window.location="index.php";
                //     //         </script>';
                //     // }
                // } else if (isset($_GET['u'])) {
                //     $id_jadwal = $_GET['u'];
                //     $main->viewEditJadwal($id_jadwal);
                // } else if (isset($_GET['d'])) {
                //     $id_jadwal = $_GET['d'];
                //     $main->hapusJadwalControl($id_jadwal);
            } else {
                $main->indexPenum();
            }
            ?>