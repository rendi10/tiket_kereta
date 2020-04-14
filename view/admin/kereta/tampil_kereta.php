<?php
include '../template/header.php';
include '../template/sidebar.php';

?>
<section id="content_wrapper">
    <section id="content" class="animated fadeIn">
        <div class="col-md-8">
            <div class="panel">

                <!-- <div class="panel-heading mt10">
                <span class="panel-title">Jadwal Keberangkatan</span>
                <span class="fa fa-table"></span>
            </div> -->
                <div class="panel-body">
                    <span class="panel-title">
                        <b>Data Kereta<b>
                    </span> <span class="fa fa-table">
                    </span>
                    <table class="table table-bordered mt15">
                        <thead>
                            <tr>
                                <th>Id Kereta</th>
                                <th>Kereta</th>
                                <th>Kelas</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <?php while ($row = $this->model->fetch($data)) { ?>
                            <tr>
                                <td><?php print $row['id_kereta']; ?></td>
                                <td><?php print $row['nama_kereta']; ?></td>
                                <td><?php print $row['kelas']; ?></td>
                                <td>
                                    <div class=''>
                                        <a href='index.php?d=<?php echo $row['id_kereta']; ?>' title='Delete' style='margin-right:5px' class='btn btn-danger btn-sm'>
                                            <i class='glyphicon glyphicon-trash'></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        <?php  } ?>

                        </tbody>
                    </table>
                    <a href='index.php?t' title='Insert' style='margin-right:5px' class='btn btn-primary btn-sm mt25'>Tambah</a>
                </div>
            </div>
        </div>
        <?php
        include '../template/footer.php';
        ?>