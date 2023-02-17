<!doctype html>
<html lang="en">

<head>
  <title>Title</title>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="style.css">
</head>

<body>
<div class="wrapper fadeInDown">
  <div id="formContent">

    <!-- Login Form -->
    <form>
      <input type="text" id="login" class="fadeIn second" name="login" placeholder="login">
      <input type="text" id="password" class="fadeIn third" name="password" placeholder="password">
      <input type="submit" name="btn" class="fadeIn fourth" value="Log In">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div>
  <?php
   if (isset($_POST['btn'])) {
    $UserName = $_POST['login'];
    $Password = $_POST['password'];
    if ($UserName == 'hoxuanty' && $Password == 'ty12345') {
        echo "Đăng nhập thành công";
    } else {
        echo "Đăng nhập thất bại !";
    }
}
  
?>

  </div>
</div>

</body>

</html>