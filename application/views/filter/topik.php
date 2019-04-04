<?php foreach ($topik as $t) : ?>
<h4><a href="<?=base_url('filter/topik/'.$t['id']);?>" class="badge badge-primary"><?=$t['nama'];?></a></h4>
<?php endforeach; ?>