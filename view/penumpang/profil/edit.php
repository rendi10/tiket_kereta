
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
                            <label>ID</label>
                            <input type="text" value="<?= $row['id_penumpang']; ?>" class="form-control" name="id_penumpang" autocomplete="off" readonly required />
                        </div>

                        <div class="form-group">
                            <label>Nama Lengkap</label>
                            <input type="text" value="<?= $row['nama_penumpang']; ?>" class="form-control" name="nama_penumpang" autocomplete="off" required />
                        </div>

                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <input type="text" value="<?= $row['jk']; ?>" class="form-control" name="jk" autocomplete="off" readonly required />
                        </div>

                        <div class="form-group">
                            <label>Tanggal Lahir</label>
                            <input type="date" value="<?= $row['ttl']; ?>" class="form-control" name="ttl" autocomplete="off" required />
                        </div>
                        <div class="form-group">
                            <label>Ponsel</label>
                            <input type="text" value="<?= $row['no_hp']; ?>" class="form-control" name="no_hp" autocomplete="off" required />
                        </div>

                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" value="<?= $row['alamat']; ?>" class="form-control" name="alamat" autocomplete="off" required />
                        </div>

                        <button href="" type="submit" class="btn btn-success btn-submit" name="update" value="update">Update</button>
                        </form>
                </div>
            </div>
        </div>
        <?php
        
        $main = new profilControl();
        if (isset($_POST['update'])) {
           
            $main->updateProfils();

            echo '<script language="javascript">
                        alert ("Berhasil");
                        window.location="index.php";
                        </script>';
        }
        
        ?>