<h2>Log In</h2>
<form method="POST" class="login_form">
  Username <br>
  <input type="text" name="username" value="" class="login_input">
  <br><br>
  Password <br>
  <input type="password" name="password" class="login_input">
  <hr>
  <div class="login_remember">
    Remember Me
    <input type="checkbox" name="remember">
  </div>
  <br>
  <?foreach($errors as $err):?>
    <p class="alert alert-danger"><?=$err?></p>
  <?endforeach;?>
  <br>
  <button type="submit" class="btn btn-success">Log In</button>
</form>