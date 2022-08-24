<?php
include "nav.php";
?>


<?php
include "database.php";
?>
<?php

if(isset($_POST['signin'])){
  if ($_SERVER['REQUEST_METHOD'] == "POST"){
    $user= $_POST['username'];
    $pass=$_POST['password'];
    $qury = "SELECT * FROM `register` WHERE `name` = '$user'";
    $data = mysqli_query($con, $qury);
        if(mysqli_num_rows($data) >= 1 ){
          $row = mysqli_fetch_array($data);
          $oldpass= $row['password'];
          if($oldpass == $pass){
            header('location: index.php');
          }
         
  }
}
}
?>
<!doctype html>
<html lang="en">

<head>
  <title>Login</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
  <div style="margin-top:10% ;" class="modal-body col-4 offset-4">
    <h3>Sign in to educenter</h3>
    <form action="#" method="post" class="row">
      <div class="col-10">
        <label for="">Enter your username</label>
        <input type="text"  value =''  class="form-control mb-3" id="loginName" name="username" placeholder="Name">
      </div>
      <div class="col-10">
        <label for="">Enter your password</label>
        <input type="password" class="form-control mb-3" id="password" name="password" placeholder="Password">
      </div>
      <div class="col-10">
        <input type="submit" name="signin" value="Sign in" class="btn btn-primary btn-block js-sign-in-button"
          data-disable-with="Signing in…" data-signin-label="Sign in"
          data-sso-label="Sign in with your identity provider" development="false">
      </div>
    </form>
    <div style="margin-top:20px ;">
      <p>if you are new here:    <a href="register.php">Register your's self</a></p>
    </div>
  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
</body>

</html>