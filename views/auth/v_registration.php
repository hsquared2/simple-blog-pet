<h2 class="section-title">Registration</h2>
<form method="POST" class="col-md-4">
  <div class="form-item">
    <label for="name">Full Name</label>
    <input type="text" class="form-control" id="name" name="name" value="<?=$fields['name']?>" required>
  </div>
  <div class="form-item">
    <label for="username">Username</label>
    <input type="text" class="form-control" id="username" name="username" value="<?=$fields['username']?>" required>
  </div>
  <div class="form-item">
    <label for="email">Email</label>
    <input type="text" class="form-control" id="email" name="email" value="<?=$fields['email']?>" required>
  </div>
  <div class="form-item">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" name="password" required>
  </div>
  <div class="form-item">
    <label for="password_rpt">Repeat Password</label>
    <input type="password" class="form-control" id="password_rpt" name="password_rpt" required>
  </div>
  <?foreach($errors as $err):?>
    <p class="alert alert-danger"><?=$err?></p>
  <?endforeach;?>
  <?foreach($userOccupied as $uo):?>
    <p class="alert alert-warning"><?=$uo?></p>
  <?endforeach;?>
  <button type="submit" class="btn btn-success" style="margin-top:15px;">Submit</button>
</form>