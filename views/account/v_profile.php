<h2>Posts</h2>
<hr>
<ul class="articles_list">
  <?foreach($articles as $article):?>
    <li class="profile_articles-item">
      <a class="profile_articles-link" href="<?=BASE_URL?>articles/article/<?=$article['id_article']?>"><?=$article['title']?></a>
      <p class="profile_articles-subtitle"><?=$article['dt_add']?></p>
    </li>
  <?endforeach;?>
</ul>