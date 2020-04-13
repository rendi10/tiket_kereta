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
            <form class="form-horizontal">
                <div class="form-group">
                    <label>Pilih Kereta</label>
                    <select class="form-control">
                        <option>
                            <?php while ($row = $this->model->fetch($data)) { ?>
                        <option value="<?php print $row['nama_kereta']; ?>"> <?php print $row['nama_kereta']; ?> </option>
                    <?php } ?>
                    </select>
                </div>

                <div class="form-group">
                    <label>Kelas</label>
                    <input type="text" class="form-control" name="nama_barang" autocomplete="off" required />
                </div>

                <div class="form-group">
                    <label>Jam Berangkat</label>
                    <input type="text" class="form-control" name="harga_jual" autocomplete="off" required />
                </div>

                <div class="form-group">
                    <label>Jam Tiba</label>
                    <input type="text" class="form-control" name="harga_beli" autocomplete="off" required />
                </div>

                <div class="form-group">
                    <label>Harga</label>
                    <input type="text" class="form-control" name="stok" autocomplete="off" required />
                </div>

                <div class="form-group">
                    <label>Dari</label>
                    <input type="text" class="form-control" name="stok" autocomplete="off" required />
                </div>

                <div class="form-group">
                    <label>Tujuan</label>
                    <input type="text" class="form-control" name="stok" autocomplete="off" required />
                </div>

                <input type="submit" class="btn btn-success btn-submit" name="simpan" value="Simpan">
        </div>
    </div>
</div>
<?php
include '../template/footer.php';
?>