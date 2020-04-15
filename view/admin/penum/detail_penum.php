<?php
include '../template/header.php';
include '../template/sidebar.php';

?>
<section id="content_wrapper">
    <section id="content" class="animated fadeIn">
        <div class="col-sm-3">
            <div class="panel" id="spy2">
                <div class="panel-heading">
                    <span class="panel-title">
                        <span class="glyphicon glyphicon-pencil"></span>Detail Penumpang</span>
                </div>
                <div class="panel-body">
                    <div class="card mt10" style="width: 30rem;">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><?= $row['nama_penumpang']; ?></li>
                            <li class="list-group-item"><?= $row['jk']; ?></li>
                            <li class="list-group-item"><?= $row['ttl']; ?></li>
                            <li class="list-group-item"><?= $row['no_hp']; ?></li>
                            <li class="list-group-item"><?= $row['alamat']; ?></li>
                        </ul>
                        <a href="index.php" class="btn btn-primary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
        <?php
        include '../template/footer.php';
        ?>