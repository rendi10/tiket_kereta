<section id="content_wrapper">
    <section id="content" class="animated fadeIn">
        <div class="col-sm-3">
            <div class="panel">
                <div class="panel-body">
                    <span class="panel-title">
                        <b>Profil<b>
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
                        <a href="index.php?edit" class="btn btn-primary">Edit</a>
                    </div>
                </div>
            </div>