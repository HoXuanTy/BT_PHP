<!DOCTYPE html>

<?php session_start()?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sesstion</title>
</head>
<body>
    <form action="" method="POST">
        <input type="submit" name="btn" value="Hello Bà già!">
    </form>
    <?php
    if(isset($_POST['btn'])){
        header('Location: http://localhost/BT_PHP/BT1702/bai1.php');
    }
    ?>

</body>
</html>