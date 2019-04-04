<?php foreach ($tahun as $t) : ?>
<h4><a href="<?=base_url('filter/tahun/'.$t['tahun']);?>" class="badge badge-primary"><?=$t['tahun'];?></a></h4>
<?php endforeach; ?>