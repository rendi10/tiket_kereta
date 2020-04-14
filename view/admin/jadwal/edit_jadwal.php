<?php
include '../template/header.php';
include '../template/sidebar.php';

?>

<section id="content_wrapper">
    <section id="content" class="animated fadeIn">
        <div class="panel">
            <div class="col-sm-8">
                <div class="panel-heading">
                    <span class="panel-title">Edit Jadwal Keberangkatan</span>
                    <span class="fa fa-table"></span>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" method="post">


                        <div class="form-group">
                            <label>ID Jadwal</label>
                            <input type="text" value="<?php echo $row['id_jadwal']; ?>" class="form-control" name="id_jadwal" autocomplete="off" readonly required />
                        </div>
                        <div class="form-group">
                            <label>ID Kereta</label>
                            <input type="text" value="<?php echo $row['id_kereta']; ?>" class="form-control" name="id_kereta" autocomplete="off" required />
                        </div>


                        <div class="form-group">
                            <label>Jam Berangkat</label>
                            <input type="text" value="<?= $row['jam_berangkat']; ?>" class="form-control" name="jam_berangkat" autocomplete="off" required />
                        </div>

                        <div class="form-group">
                            <label>Jam Tiba</label>
                            <input type="text" value="<?= $row['jam_tiba']; ?>" class="form-control" name="jam_tiba" autocomplete="off" required />
                        </div>

                        <div class="form-group">
                            <label>Harga</label>
                            <input type="text" value="<?= $row['harga']; ?>" class="form-control" name="harga" autocomplete="off" required />
                        </div>

                        <div class="form-group">
                            <label>Dari</label>
                            <input type="text" value="<?= $row['dari']; ?>" class="form-control" name="dari" autocomplete="off" required />
                        </div>

                        <div class="form-group">
                            <label>Tujuan</label>
                            <input type="text" value="<?= $row['tujuan']; ?>" class="form-control" name="tujuan" autocomplete="off" required />
                        </div>

                        <button href="" type="submit" class="btn btn-success btn-submit" name="update" value="update">Update</button>
                        </form>
                </div>
            </div>
        </div>
        <?php
        if (isset($_POST['update'])) {
            $main = new jadwalControl();
            $main->updateJadwalControl();

            echo '<script language="javascript">
                        alert ("Berhasil");
                        window.location="index.php";
                        </script>';
        }
        include '../template/footer.php';
        ?>