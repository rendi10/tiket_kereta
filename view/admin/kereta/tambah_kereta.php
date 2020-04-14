<?php
include '../template/header.php';
include '../template/sidebar.php';

?>

<section id="content_wrapper">
    <section id="content" class="animated fadeIn">
        <div class="panel">
            <div class="col-sm-8">
                <div class="panel-heading">
                    <span class="panel-title">Tambah Kereta</span>
                    <span class="fa fa-table"></span>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" method="post">


                        <div class="form-group">
                            <label>ID Kereta</label>
                            <input type="text" class="form-control" name="id_kereta" autocomplete="off" required />
                        </div>

                        <div class="form-group">
                            <label>Pilih Kelas</label>
                            <select class="form-control" name="kelas">
                                <option value="ekonomi">Ekonomi</option>
                                <option value="bisnis">Bisnis</option>
                                <option value="eksekutif">Eksekutif</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Nama Kereta</label>
                            <input type="text" class="form-control" name="nama_kereta" autocomplete="off" required />
                        </div>


                        <button href="" type="submit" class="btn btn-success btn-submit" name="submit" value="Simpan">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
        <?php
        if (isset($_POST['submit'])) {
            $main = new keretaControl();
            $main->insertKereta();
            echo '<script language="javascript">
                        alert ("Berhasil");
                        window.location="index.php";
                        </script>';
        }
        include '../template/footer.php';
        ?>