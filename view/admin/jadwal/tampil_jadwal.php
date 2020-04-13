<?php
include '../template/header.php';
include '../template/sidebar.php';

?>
<div class="panel">
    <a href='' title='Insert' style='margin-right:5px' class='btn btn-primary btn-sm'>Tambah</a>
    <div class="panel-heading mt10">
        <span class="panel-title">Jadwal Keberangkatan</span>
        <span class="fa fa-table"></span>
    </div>
    <div class="panel-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID Jadwal</th>
                    <th>Kereta</th>
                    <th>Kelas</th>
                    <th>Jam Berangkat</th>
                    <th>Jam Tiba</th>
                    <th>Harga</th>
                    <th>Dari</th>
                    <th>Tujuan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <?php while ($row = $this->model->fetch($data)) { ?>
                <tr>
                    <td><?php print $row['id_jadwal']; ?></td>
                    <td><?php print $row['nama_kereta']; ?></td>
                    <td><?php print $row['kelas']; ?></td>
                    <td><?php print $row['jam_berangkat']; ?></td>
                    <td><?php print $row['jam_tiba']; ?></td>
                    <td><?php print $row['harga']; ?></td>
                    <td><?php print $row['dari']; ?></td>
                    <td><?php print $row['tujuan']; ?></td>
                    <td>
                        <div class=''>
                            <a href='index.php?u=$row[0]' title='Update' style='margin-right:5px' class='btn btn-success btn-sm'>
                                <i class='glyphicon glyphicon-edit'></i>
                            </a>
                            <a href='index.php?d=$row[0]' title='Delete' style='margin-right:5px' class='btn btn-danger btn-sm'>
                                <i class='glyphicon glyphicon-trash'></i>
                            </a>
                        </div>
                    </td>
                </tr>
            <?php  } ?>

            </tbody>
        </table>
    </div>
</div>
</div>
<?php
include '../template/footer.php';
?>