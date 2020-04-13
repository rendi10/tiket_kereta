<?php
include '../template/header.php';
include '../template/sidebar.php';

?>
<div class="panel">
    <div class="col-sm-6">
        <div class="panel-heading">
            <span class="panel-title">Tambah Jadwal Keberangkatan</span>
            <span class="fa fa-table"></span>
        </div>
        <div class="panel-body">
            <form class="form-horizontal" method="post">

                <div class="form-group">
                    <label>ID Kereta</label>
                    <input type="text" class="form-control" name="id_kereta" autocomplete="off" required />
                </div>


                <div class="form-group">
                    <label>Jam Berangkat</label>
                    <input type="text" class="form-control" name="jam_berangkat" autocomplete="off" required />
                </div>

                <div class="form-group">
                    <label>Jam Tiba</label>
                    <input type="text" class="form-control" name="jam_tiba" autocomplete="off" required />
                </div>

                <div class="form-group">
                    <label>Harga</label>
                    <input type="text" class="form-control" name="harga" autocomplete="off" required />
                </div>

                <div class="form-group">
                    <label>Dari</label>
                    <input type="text" class="form-control" name="dari" autocomplete="off" required />
                </div>

                <div class="form-group">
                    <label>Tujuan</label>
                    <input type="text" class="form-control" name="tujuan" autocomplete="off" required />
                </div>

                <button href="" type="submit" class="btn btn-success btn-submit" name="submit" value="Simpan">Tambah</button>
        </div>
    </div>
</div>
<?php
if (isset($_POST['submit'])) {
    $main = new jadwalControl();
    $main->insertJadwal();
    echo '<script language="javascript">
                        alert ("Berhasil");
                        window.location="index.php";
                        </script>';
}
include '../template/footer.php';
?>