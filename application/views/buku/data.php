<?=$this->session->flashdata('message');?>
<?=validation_errors();?>

<table class="table table-inverse table-bordered">
	<thead>
		<tr>
			<th class="col-1 text-center">#</th>
			<th>Judul Buku</th>
			<th class="col-3">Penerbit</th>
			<th class="col-1 text-center">Tahun</th>
			<th class="col-1 text-center">Aksi</th>
		</tr>
	</thead>
	<tbody>
	<?php
	$no = 1;
	foreach($buku as $b) : ?>
		<tr>
			<td class="text-center"><?=$no++;?></td>
			<td><?=$b['judul'];?></td>
			<td><?=$b['nama'];?></td>
			<td class="text-center"><?=$b['tahun'];?></td>
			<td class="text-center">
				<a href="<?=base_url('buku/edit/'.$b['id']);?>" title="Edit"><i class="fa fa-edit"></i></a> 
				|||
				<a href="#!" onclick="deleteConfirm('<?=$b['id'];?>')" title="Hapus"><i class="fa fa-trash"></i></a>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
</table>

<script>
function deleteConfirm(id){
	$('#inputId').attr('value', id);
	$('#deleteModal').modal();
}
</script>

<!-- Logout Delete Confirmation-->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <form method="post" action="<?=base_url('buku/hapus');?>">
      	<input type="hidden" name="id" id="inputId" class="form-control" value="">
	      <div class="modal-body">
	      	Data yang dihapus tidak akan bisa dikembalikan.
			<div class="form-group">
				<input type="password" name="password" id="inputPassword" class="form-control" placeholder="Masukkan password">
			</div>
	      </div>
	      <div class="modal-footer">
	        <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
	        <button type="submit" id="btn-delete" class="btn btn-danger" href="#">Hapus</button>
	      </div>
  	  </form>
    </div>
  </div>
</div>