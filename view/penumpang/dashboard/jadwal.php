<?php
include '../template/header.php';

include '../template/sidebar.php';


?>
            <section id="content" class="animated fadeIn">
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
                                                                                <th>Aksi</th>
																		</tr>
																</thead>

																<?php

																		while($row = $this->model->fetch($data)){?>
																				

																								<tr>
                                                                                                <td><?php print $row['id_jadwal'];?></td>
                                                                                                <td><?php print $row['nama_kereta'];?></td>
                                                                                                <td><?php print $row['kelas'];?></td>
                                                                                                <td><?php print $row['jam_berangkat'];?></td>
                                                                                                <td><?php print $row['jam_tiba'];?></td>
                                                                                                <td><?php print $row['harga'];?></td>
                                                                                                <td><?php print $row['dari'];?></td>
                                                                                                <td><?php print $row['tujuan'];?></td>
																										<td>
																												<div class=''>
																														<a href='index.php?p=<?php $row[0] ?>' data-toggle='tooltip' data-placement='top' title='pesan' style='margin-right:5px' class='btn btn-success btn-sm open_modal'>
																																<i class='glyphicon glyphicon-edit'></i>
																														</a>
																												</div>
																										</td>
																								</tr>

																						 
                                                                                                <?php  } ?>

																

														</table>
          
<?php
include '../template/footer.php';
?>