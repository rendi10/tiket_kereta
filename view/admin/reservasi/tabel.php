<?php
include '../template/header.php';
include '../template/sidebar.php';

?>
<section id="content_wrapper">
    <section id="content" class="animated fadeIn">
        <div class="panel">

           
            <div class="panel-body">
                <span class="panel-title">
                    <b>Data Transaksi<b>
                </span> <span class="fa fa-table">
                </span>
                <table class="table table-bordered mt15">
                    <thead>
                        <tr>
                            <th>Id Reservasi</th>
                            <th>Id Jadwal</th>
                            <th>Tanggal Berangkat</th>
                            <th>Nama Penumpang</th>
                            <th>Jenis Kelamin</th>
                            <th>Tanggal Lahir</th>
                        </tr>
                    </thead>
                    <?php while ($row = $this->model->fetch($data)) { ?>
                        <tr>
                            <td><?php print $row['id_reservasi']; ?></td>
                            <td><?php print $row['id_jadwal']; ?></td>
                            <td><?php print $row['tanggal_berangkat']; ?></td>
                            <td><?php print $row['nama_penumpang']; ?></td>
                            <td><?php print $row['jk']; ?></td>
                            <td><?php print $row['ttl']; ?></td>
                            
                        </tr>
                    <?php  } ?>

                    </tbody>
                </table>
                
            </div>
        </div>
        <?php
        include '../template/footer.php';
        ?>