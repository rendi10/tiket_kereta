<?php
include '../template/header.php';
include '../template/sidebar.php';

?>
<section id="content_wrapper">
    <section id="content" class="animated fadeIn">
        <div class="col-sm-3">
            <div class="panel">
                <div class="panel-body">
                    <span class="panel-title">
                        <b>Daftar Penumpang<b>
                    </span> <span class="fa fa-user">
                    </span>
                    <div class="card mt25" style="width: 18rem;">
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
            <?php
            include '../template/footer.php';
            ?>