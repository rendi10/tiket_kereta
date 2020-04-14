<?php
include '../template/header.php';
include '../template/sidebar.php';

?>
<section id="content_wrapper">
    <section id="content" class="animated fadeIn">
        <div class="panel">

            <!-- <div class="panel-heading mt10">
                <span class="panel-title">Jadwal Keberangkatan</span>
                <span class="fa fa-table"></span>
            </div> -->
            <div class="panel-body">
                <span class="panel-title">
                    <b>Jadwal Keberangkatan<b>
                </span> <span class="fa fa-table">
                </span>
                <table class="table table-bordered mt15">
                    <thead>
                        <tr>
                            <th>ID Penumpang</th>
                            <th>Nama</th>
                        </tr>
                    </thead>
                    <?php while ($row = $this->model->fetch($data)) { ?>
                        <tr>
                            <td><?php print $row['id_penumpang']; ?></td>
                            <td><?php print $row['nama_penumpang']; ?></td>
                            <td>
                                <div class=''>
                                    <a href='index.php?u=<?php echo $row['id_jadwal']; ?>' title='Update' style='margin-right:5px' class='btn btn-success btn-sm'>
                                        <i class='glyphicon glyphicon-edit'></i>
                                    </a>
                                    <a href='index.php?d=<?php echo $row['id_jadwal']; ?>' title='Delete' style='margin-right:5px' class='btn btn-danger btn-sm'>
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
        <?php
        include '../template/footer.php';
        ?>