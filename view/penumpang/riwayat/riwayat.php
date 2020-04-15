<section id="content_wrapper">
	<section id="content" class="animated fadeIn">
		<div class="panel" id="spy2">
			<div class="panel-heading">
				<span class="panel-title">
					<span class="glyphicon glyphicon-hourglass"></span>Riwayat</span>
			</div>
			<div class="panel-body">

				<table class="table table-striped table-hover">
					<thead>
						<tr>

							<th>Tanggal Berangkat</th>
							<th>Kereta</th>
							<th>Kelas</th>
							<th>Jam Berangkat</th>
							<th>Jam Tiba</th>
							<th>Harga</th>
							<th>Dari</th>
							<th>Tujuan</th>
						</tr>
					</thead>

					<?php foreach ($data as $row) : ?>


						<tr>
							<td><?php print $row['tanggal_berangkat']; ?></td>
							<td><?php print $row['nama_kereta']; ?></td>
							<td><?php print $row['kelas']; ?></td>
							<td><?php print $row['jam_berangkat']; ?></td>
							<td><?php print $row['jam_tiba']; ?></td>
							<td><?php print $row['harga']; ?></td>
							<td><?php print $row['dari']; ?></td>
							<td><?php print $row['tujuan']; ?></td>

						</tr>


					<?php endforeach; ?>



				</table>
			</div>
		</div>