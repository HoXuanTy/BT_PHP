<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bai1.css">
    <title>Document</title>
</head>

<body>

<form method="POST" action="">
  <label for="username">Tên đăng nhập:</label>
  <input type="text" id="username" name="username">
  <br>
  <label for="password">Mật khẩu:</label>
  <input type="password" id="password" name="password">
  <br>
  <input type="submit" value="Đăng nhập">
</form>

<?php
$users = array(
    array("username" => "thaihoang", "password" => "123"),
    array("username" => "xuanty", "password" => "123"),
    array("username" => "lexuan", "password" => "123")
);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $found = false;

    foreach ($users as $user) {
        if ($user['username'] == $username && $user['password'] == $password) {
            $found = true;
            break;
        }
    }

    if ($found) {
        echo "Đăng nhập thành công!";
        // thực hiện các thao tác cần thiết khi đăng nhập thành công
    } else {
        echo "Tên đăng nhập hoặc mật khẩu không đúng.";
        // hiển thị thông báo lỗi và yêu cầu người dùng nhập lại thông tin đăng nhập
    }
}
?>

</body>

</html>