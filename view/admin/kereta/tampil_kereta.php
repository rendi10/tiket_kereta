<?php
include '../template/header.php';
include '../template/sidebar.php';

?>
<div class="bs-component">
    <div class="panel-heading">
        <h3 class="panel-title">Kereta</h3>
    </div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Id Kereta</th>
                <th>Nama Kereta</th>
                <th>Kelas</th>
            </tr>
        </thead>
        <?php
        
        while ($row = $this->model->fetch($data)) {
            echo "

                                                                                                <tr>
                                                                                                        <td>$row[0]</td>
                                                                                                        <td>$row[1]</td>
                                                                                                        <td>$row[2]</td>
                                                                                                        <td>$row[3]</td>
                                                                                                        <td>$row[4]</td>
                                                                                                        <td>$row[5]</td>
                                                                                                        <td>$row[6]</td>
                                                                                                        <td>
                                                                                                                <div class=''>
                                                                                                                        <a href='index.php?u=$row[0]' data-toggle='tooltip' data-placement='top' title='Update' style='margin-right:5px' class='btn btn-success btn-sm open_modal'>
                                                                                                                                <i class='glyphicon glyphicon-edit'></i>
                                                                                                                        </a>
                                                                                                                        <a href='index.php?d=$row[0]' onClick=\"return confirm('Apakah Anda Yakin Menghapus Data Ini?')\" data-toggle='tooltip' data-placement='top' title='Delete' style='margin-right:5px' class='btn btn-danger btn-sm'>
                                                                                                                                <i class='glyphicon glyphicon-trash'></i>
                                                                                                                        </a>
                                                                                                                </div>
                                                                                                        </td>
                                                                                                </tr>

                                                                                         ";
        }

        ?>
    </table>
</div>
<?php
include '../template/footer.php';
?>