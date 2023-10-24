<h2>Edit Category</h2><br>
<form method="POST" class="form">
  <div class="cat-form-inner">
    <input type="text" name="name" value="<?=$name?>">
    <button type="submit" class="btn btn-success cat-form-btn">Submit</button>
  </div>
  <br><br>
  <?if($error):?>
    <p class="alert alert-danger"><?=$error?></p>
  <?endif;?>
</form>