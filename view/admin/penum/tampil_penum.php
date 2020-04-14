<?php
include '../template/header.php';
include '../template/sidebar.php';
$no = 1;
?>
<section id="content_wrapper">
    <section id="content" class="animated fadeIn">
        <div class="col-sm-3">
            <div class="panel">

                <!-- <div class="panel-heading mt10">
                <span class="panel-title">Jadwal Keberangkatan</span>
                <span class="fa fa-table"></span>
            </div> -->
                <div class="panel-body">
                    <span class="panel-title">
                        <b>Daftar Penumpang<b>
                    </span> <span class="fa fa-user">
                    </span>
                    <ul class="list-group mt25">
                        <?php foreach ($data as $penum) : ?>

                            <li class="list-group-item">
                                <?= $no++ ?> . <?= $penum['nama_penumpang']; ?>
                                <a href='index.php?det=<?php echo $penum['id_penumpang']; ?>' class="badge badge-success">detail</a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
        <?php
        include '../template/footer.php';
        ?>