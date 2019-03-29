<table class="table table-inverse table-bordered">
	<thead>
		<tr>
			<th class="col-1 text-center">#</th>
			<th>Judul Buku</th>
			<th class="col-3">Penerbit</th>
			<th class="col-1 text-center">Tahun</th>
		</tr>
	</thead>
	<tbody>
	<?php
	$no = 1;
	foreach($buku as $b) : ?>
		<tr>
			<td class="text-center"><?=$no++;?></td>
			<td><?=$b['judul'];?></td>
			<td><a href="<?=base_url('filter/penerbit/'.$b['penerbit']);?>" title="Cari buku dengan penerbit yang sama"><?=$b['nama'];?></a></td>
			<td class="text-center"><a href="<?=base_url('filter/tahun/'.$b['tahun']);?>" title="Cari buku dengan tahun terbit yang sama"><?=$b['tahun'];?></a></td>
		</tr>
	<?php endforeach; ?>
	</tbody>
</table>