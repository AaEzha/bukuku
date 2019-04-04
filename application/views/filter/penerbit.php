<?php foreach ($penerbit as $t) : ?>
<h4><a href="<?=base_url('filter/penerbit/'.$t['id']);?>" class="badge badge-primary"><?=$t['nama'];?></a></h4>
<?php endforeach; ?>