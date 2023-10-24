<?if($user && $user['privilege'] == 1):?>
<div class="cat-actions">
  <a href="<?=BASE_URL?>cats/edit/<?=$id?>" class="link-info">Edit Category</a>
  <a href="<?=BASE_URL?>cats/delete/<?=$id?>" class="link-danger">Delete Category</a>
</div>
<?endif;?>
<h2 class="cat-title"><?=$name?></h2>
<div class="articles">
  <?foreach($articles as $article):?>
    <div class="article">
      <strong class="article_title"><?=$article['title']?></strong>
      <em class="article_date"><?=$article['dt_add']?></em>
      <p class="article_content"><?=articleBodyPreview($article['content'])?></p>
      <a href="<?=BASE_URL?>articles/article/<?=$article['id_article']?>">Read More...</a>
    </div>
  <?endforeach;?>
</div>
