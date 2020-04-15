<?php
include '../template/header.php';

include '../template/sidebar.php';


?>
<section id="content_wrapper">
	<section id="content" class="animated fadeIn">
		<div class="panel" id="spy2">
			<div class="panel-heading">
				<span class="panel-title">
					<span class="glyphicon glyphicon-time"></span>Jadwal Keberangkatan</span>
			</div>
			<div class="panel-body">
				<table class="table table-striped table-hover">
					<thead>
						<tr>
							<th>ID Jadwal</th>
							<th>Kereta</th>
							<th>Kelas</th>
							<th>Jam Berangkat</th>
							<th>Jam Tiba</th>
							<th>Harga</th>
							<th>Dari</th>
							<th>Tujuan</th>

						</tr>
					</thead>

					<?php

					while ($row = $this->model->fetch($data)) { ?>


						<tr>
							<td><?php print $row['id_jadwal']; ?></td>
							<td><?php print $row['nama_kereta']; ?></td>
							<td><?php print $row['kelas']; ?></td>
							<td><?php print $row['jam_berangkat']; ?></td>
							<td><?php print $row['jam_tiba']; ?></td>
							<td><?php print $row['harga']; ?></td>
							<td><?php print $row['dari']; ?></td>
							<td><?php print $row['tujuan']; ?></td>

						</tr>


					<?php  } ?>
				</table>
				<a href="index.php?prib" style="margin-right:5px" class="btn btn-primary btn-sm mt10">Pesan Tiket</a>
			</div>
		</div>

		<?php
		include '../template/footer.php';
		?>