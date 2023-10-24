<h2>Categories</h2>
<div class="categories">
  <?foreach($articlesPerCat as $item):?>
    <div class="cat-item">
      <a href="<?=BASE_URL?>cats/cat/<?=$item['id_cat']?>" class="cat-item-link">
        <p class="cat-item-name"><?=$item['name']?></p>
        <span><?=$item['cnt']?> articles</span>
      </a>
    </div>
  <?endforeach;?>
</div>