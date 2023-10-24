<a href="<?=BASE_URL?>?view=table">List view</a>
<br><br>
<div class="articles">
  <?foreach($articles as $article):?>
    <div class="article">
      <strong class="article_title"><?=$article['title']?></strong>
      <em class="article_date"><?=$article['dt_add']?></em>
      <a href="<?=BASE_URL?>cats/cat/<?=$article['id_cat']?>"><?=$article['category']?></a>
      <p class="article_content"><?=articleBodyPreview($article['content'])?></p>
      <a href="<?=BASE_URL?>articles/article/<?=$article['id_article']?>">Read More...</a>
    </div>
  <?endforeach;?>
</div>