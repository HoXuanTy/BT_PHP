<!DOCTYPE html>
<?php session_start() ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bai1.css">
    <title>baitapsession</title>
</head>
<body>
    <h1>Nhập thông tin sản phẩm</h1>
    <form method="POST">
        <label>Them san pham </label>
        <input type="text" name="tensp"><br>
        <label>Them gia </label>
        <input type="text" name="giasp"><br>
        <label>Them mo ta </label>
        <input type="text" name="mota"><br>
        <label>Hinh anh </label>
        <input type="text" name="hinhanh"><br>
        <input type="submit" value="Luu" name="btn">
    </form>

    <?php
        if(isset($_POST['btn'])){
            if(isset($_POST['tensp']) && isset($_POST['giasp']) && isset($_POST['mota']) && isset($_POST['hinhanh'])){
                $mangsp = array(
                    'sanpham' => $_POST['tensp'],
                    'gia' => $_POST['giasp'],
                    'mota' => $_POST['mota'],
                    'hinhanh' => $_POST['hinhanh']
                );

                if(isset($_SESSION['mangsp'])){
                    $_SESSION['mangsp'][] = $mangsp;
                }else{
                    $_SESSION['mangsp'] = array($mangsp);
                }
            }else{
                echo 'Vui lòng nhập đầy đủ thông tin sản phẩm';
                echo '<br>tensp: ' . $_POST['tensp'];
                echo '<br>giasp: ' . $_POST['giasp'];
                echo '<br>mota: ' . $_POST['mota'];
                echo '<br>hinhanh: ' . $_POST['hinhanh'];
                exit;
            }
            header('Location: http://localhost/BT_PHP/BT2002/sesstion.php');
            exit;
        }
    
    ?>
</body>
</html>