<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 7/15/2018
 * Time: 6:21 PM
 */
session_start();
//session_destroy();

//session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <div class="row text-center">
        <h1>GIO HANG</h1>
    </div>
    <a href="index.php">
        <button type="button" class="btn btn-primary">Thêm mới</button>
    </a>

    <table class="table">
        <thead>

        <tr>
            <th>maSP</th>
            <th>tenSP</th>
            <th>don gia</th>
            <th>so luong</th>
            <th>thanh tien</th>
            <th>#</th>
        </tr>

        </thead>
        <tbody>

        <?php
        $tong_tien=0;
        foreach ($_SESSION['cash'] as $product){
            $tong_tien=$product['soluong']*$product['giaban'];
            ?>
            <tr>

                <td> <?php echo $product['masp']; ?></td>
                <td> <?php echo $product['tensp']; ?></td>
                <td> <?php echo number_format($product['giaban']); ?></td>
                <td> <?php echo $product['soluong']; ?></td>
                <td> <?php echo number_format($product['soluong']*$product['giaban']); ?></td>
                <td>
                </td>
            </tr>
        <?php }?>

        </tbody>
    </table>


</div>
</body>
</html>
