<?php
include '../template/header.php';

include '../template/sidebar.php';


?>

           <?php
           include '../../../controller/jadwalControl.php';
           $main = new jadwalControl();
           if(isset($_GET['p'])){
            //$main->viewInsert();
            
            }else{
                    $main->viewSelect();
            }
           
           
           ?>
           
     
<?php
include '../template/footer.php';
?>