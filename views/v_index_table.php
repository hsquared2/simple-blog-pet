<a href="<?=BASE_URL?>">Grid View</a>
<br><br>
<ul class="articles_list">
  <?foreach($articles as $article):?>
    <div class="articles_list-item">
      <li>
        <a href="<?=BASE_URL?>articles/article/<?=$article['id_article']?>" class="articles_list-link">
          <?=$article['title']?>
        </a>
      </li>
      <a href="<?=BASE_URL?>cats/cat/<?=$article['id_cat']?>"><?=$article['category']?></a>
    </div>
  <?endforeach;?>
</ul>