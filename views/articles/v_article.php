<div>
  <h2><?=$article['title']?></h2>
  <a href="<?=BASE_URL?>cats/cat/<?=$article['id_cat']?>" class="article_one-link"><?=$catName?></a>
  <span class="article_one-date"><?=$article['dt_add']?></span>
  <p class="article_one-content"><?=$article['content']?></p>
</div>

