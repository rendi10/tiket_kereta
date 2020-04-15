<?php
include '../template/header.php';
include '../template/sidebar.php';
$no = 1;
?>
<section id="content_wrapper">
    <section id="content" class="animated fadeIn">
        <div class="col-sm-3">
            <div class="panel" id="spy2">
                <div class="panel-heading">
                    <span class="panel-title">
                        <span class="glyphicon glyphicon-user"></span>Penumpang</span>
                </div>
                <div class="panel-body">
                    <ul class="list-group mt10">
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