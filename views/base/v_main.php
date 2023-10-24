<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?=$title?></title>
  <link rel="canonical" href="<?=$canonical?>">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  <link rel="stylesheet" href="<?=BASE_URL?>assets/style.css">
</head>
<body>
  <header class="header">
    <div class="header_upper">
      <div class="container header_upper-content">
        <h1 class='logo'>FakeBlogNetwork</h1>
        <div class="header_user">
          <?if($user):?>
              <p class="text text-primary">Hello, <?=$user['name']?></p>
              <a href="<?=BASE_URL?>account/profile" class="btn btn-outline-primary">Account</a>
              <a href="<?=BASE_URL?>auth/logout" class="btn btn-outline-danger">Sign out</a>
            <?else:?>
              <a href="<?=BASE_URL?>auth/login" class="btn btn-primary">Sign In</a>
              <a href="<?=BASE_URL?>auth/signup" class="btn btn-dark">Sign Up</a>
          <?endif;?>
        </div>
      </div>
    </div>
    <div class="header_menu" id="nav">
      <nav class="header_menu-content container">
        <ul class="header_menu-list">
          <a href="<?=BASE_URL?>">Home</a>
          <?foreach($cats as $cat):?>
            <li class="header_menu-item">
              <a href="<?=BASE_URL?>cats/cat/<?=$cat['id_cat']?>" class="header_menu-link"><?=$cat['name']?></a>
            </li>
          <?endforeach;?>
          <a href="<?=BASE_URL?>cats/all">All Categories..</a>
        </ul>
        <?if($user):?>
          <div class="header_menu-actions">
            <a href="<?=BASE_URL?>articles/add" class="btn btn-outline-success">Add Article</a>
            <? if($user['privilege'] == 1): ?>
            <a href="<?=BASE_URL?>cats/add" class="btn btn-outline-primary">Add Category</a>
            <? endif; ?>
          </div>
        <?endif;?>
      </nav>
    </div>
  </header>
  <div class="content container"">
    <?=$content?>
  </div>
  <footer class="footer">
    <div class="container">
      <p>&#169; Huseyn Studios. All rights reserved</p>
    </div>
  </footer>
  <script>
    
  </script>
</body>
</html>