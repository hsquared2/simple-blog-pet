<h2>Edit Article</h2>
<form method="POST">
  Title <br>
  <input type="text" name="title" value="<?=$fields['title']?>">
  <br><br>
  Content <br>
  <textarea name="content" cols="50" rows="10"><?=$fields['content']?></textarea>
  <br>
  <br>
  Select Category 
  <select name="cat">
    <?foreach($cats as $cat):?>
      <option value="<?=$cat['id_cat']?>" <?= $catId === $cat['id_cat'] ?  'selected' : ''?> ><?=$cat['name']?></option>
    <?endforeach;?>
  </select>
  <br><br>
  <?foreach($validateErrors as $error):?>
    <p class="alert alert-danger"><?=$error?></p>
  <?endforeach;?>
  <button type="submit" class="btn btn-success">Submit</button>
</form>