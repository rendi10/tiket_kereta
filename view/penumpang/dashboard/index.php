<?php
include '../template/header.php';

include '../template/sidebar.php';


?>

           <?php
           include '../../../controller/transaksiControl.php';
           $main = new transaksiControl();
           $main->cek();
           
           
              if(isset($_GET['prib'])){
                  include 'transaksi.php';
                      
                    if(isset($_POST['kirim'])){
                        $main->insert();
                        echo '<script language="javascript">
                        alert ("Berhasil");
                        window.location="index.php";
                        </script>';


                    }else {

                    }

                  
             
                
                }else{
                        $main->viewSelect();
                        
                        echo '<section id="content" class="animated fadeIn">
                            <table cellspacing="0" cellpadding="0" width="600" class="w320" >
                            
                            <tr>
                                <td class="button">
                                <div><a  href="index.php?prib" class="button btn-primary">Pesan Tiket untuk pribadi</a>
                                </div>
                                </td>
                            </tr>
                            <tr>
                            <td class="button">
                            <div><a  href="index.php?o"  class="button btn-primary">Pesan Tiket untuk orang lain</a>
                            </div>
                            </td>
                        </tr>
                            </table>
                        </section>';
                }
           
           
           ?>
         
           
     
<?php
include '../template/footer.php';
?>