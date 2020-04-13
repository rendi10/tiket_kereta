<?php
include '../template/header.php';

include '../template/sidebar.php';


?>

           <?php
            include '../../../controller/transaksiControl.php';
            $main = new transaksiControl();

            if (isset($_GET['prib'])) {
                include 'transaksi.php';

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

                echo '<section id="content_wrapper">
                <section id="content" class="animated fadeIn">
                            <table cellspacing="0" cellpadding="0" width="600" class="w320" >
                            
                            <tr>
                                <td class="button">
                                <div><a  href="index.php?prib" style="margin-right:5px" class="btn btn-primary btn-sm">Pesan Tiket untuk pribadi</a>
                                </div>
                                </td>
                            </tr>
                            <tr>
                            <td class="button">
                            <br>
                            <div><a  href="pesanLagi.php"  style="margin-right:5px" class="btn btn-primary btn-sm">Pesan Tiket untuk orang lain</a>
                            </div>
                            </td>
                        </tr>
                            </table>
                        </section>
                    </section>';
            }


            ?>
         
           
     
<?php
include '../template/footer.php';
?>