<?php foreach ($penulis as $t) : ?>
<h4><a href="<?=base_url('filter/penulis/'.$t['id']);?>" class="badge badge-primary"><?=$t['nama'];?></a></h4>
<?php endforeach; ?>