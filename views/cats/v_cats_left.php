<h2>All Categories</h2>
<ul class="list-group">
  <?foreach($cats as $cat):?>
    <li class="list-group-item"><a href="<?=BASE_URL?>cats/cat/<?=$cat['id_cat']?>"><?=$cat['name']?></a></li>
  <?endforeach;?>
</ul>