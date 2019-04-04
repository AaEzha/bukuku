<?=$this->session->flashdata('message');?>

<form method="post" action="<?=base_url('buku');?>">

  <div class="form-group row">
    <label for="password" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" name="password" class="form-control" value="<?=set_value('password');?>" id="password" placeholder="Password">
      <?=form_error('password');?>
    </div>
  </div>

  <div class="form-group row">
    <label for="judul" class="col-sm-2 col-form-label">Judul Buku</label>
    <div class="col-sm-10">
      <input type="text" name="judul" class="form-control" value="<?=set_value('judul');?>" id="judul" placeholder="Judul Buku">
      <?=form_error('judul');?>
    </div>
  </div>

  <div class="form-group row">
    <label for="topik" class="col-sm-2 col-form-label">Topik Buku</label>
    <div class="col-sm-10">
      <input type="text" name="topik" class="form-control" value="<?=set_value('topik');?>" id="topik" placeholder="Topik Buku">
      <?=form_error('topik');?>
    </div>
  </div>

  <div class="form-group row">
    <label for="penulis" class="col-sm-2 col-form-label">Penulis</label>
    <div class="col-sm-10">
      <input type="text" name="penulis" class="form-control" value="<?=set_value('penulis');?>" id="penulis" placeholder="Nama Penulis Buku">
      <?=form_error('penulis');?>
    </div>
  </div>

  <div class="form-group row">
    <label for="penerbit" class="col-sm-2 col-form-label">Penerbit</label>
    <div class="col-sm-10">
      <input type="text" name="penerbit" class="form-control" value="<?=set_value('penerbit');?>" id="penerbit" placeholder="Nama Penerbit">
      <?=form_error('penerbit');?>
    </div>
  </div>

  <div class="form-group row">
    <label for="tahun" class="col-sm-2 col-form-label">Tahun Terbit</label>
    <div class="col-sm-10">
      <input type="text" name="tahun" class="form-control" value="<?=set_value('tahun');?>" id="tahun" placeholder="Tahun Terbit">
      <?=form_error('tahun');?>
    </div>
  </div>

  <div class="form-group row">
    <label for="isbn" class="col-sm-2 col-form-label">ISBN</label>
    <div class="col-sm-10">
      <input type="text" name="isbn" class="form-control" value="<?=set_value('isbn');?>" id="isbn" placeholder="ISBN">
      <?=form_error('isbn');?>
    </div>
  </div>

  <div class="form-group row">
    <label for="submit" class="col-sm-2 col-form-label"></label>
    <div class="col-sm-4">
      <button type="submit" class="btn btn-primary btn-block">Simpan</button>
    </div>
    <div class="col-sm-1">
      <button type="reset" class="btn btn-danger btn-block">Batal</button>
    </div>
  </div>
</form>