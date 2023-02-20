<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <label for="">Từ cần tra: </label>
        <input type="text" name="tunhap"><br>
        <input type="submit" name="btn" value="Tra Từ"><br>
        <p>kết quả:
            <?php
            if (isset($_POST['btn']) || isset($_POST['tunhap'])) {
                $tu = $_POST['tunhap'];
                $animal = ["dog" => "Chó", "duck" => "vịt", "cat" => "mèo"];
                foreach ($animal as $key => $gtri) {
                    if ($tu == $key) {
                        echo $gtri;
                    }
                }
            }
            ?>
        </p>

    </form>









</body>

</html>