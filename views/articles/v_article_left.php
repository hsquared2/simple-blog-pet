<ul class="list-group">
  <? if($userId == $article['id_user']): ?>
    <li class="list-group-item"><a href="<?=BASE_URL?>articles/edit/<?=$article['id_article']?>">Edit</a></li>
  <? endif; ?>
  <li class="list-group-item"><a href="<?=BASE_URL?>articles/delete/<?=$article['id_article']?>">Delete</a></li>
</ul>