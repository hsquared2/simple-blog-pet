<h2>New Article</h2>
<form method="POST" class="form">
  Title <br>
  <input type="text" name="title" value="<?=$fields['title']?>">
  <br><br>
  Content <br>
  <textarea name="content" cols="50" rows="10" style="resize: none;"><?=$fields['content']?></textarea>
  <br><br>
  Select Category
  <select name="cat">
    <?foreach($cats as $cat):?>
      <option value="<?=$cat['id_cat']?>"
        <?=$fields['cat'] === $cat['id_cat'] ? 'selected' : ''?>
      >
        <?=$cat['name']?>
      </option>
    <?endforeach;?>
  </select>
  <br><br>
  <?foreach($validateErrors as $err): ?>
    <p class="alert alert-danger"><?=$err?></p>
  <?endforeach;?>
  <button type="submit" class="btn btn-success">Submit</button>
</form>
