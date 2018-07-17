<?php require_once('products.php')?>
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
        <h1>DANH SÁCH SAN PHAM</h1>
    </div>
    <a href="add.php">
        <button type="button" class="btn btn-primary">Thêm mới</button>
    </a>

    <table class="table">
        <thead>

        <tr>
            <th>maSP</th>
            <th>tenSP</th>
            <th>don gia</th>
            <th>so luong</th>
            <th>#</th>
        </tr>

        </thead>
        <tbody>
        <?php foreach ($products as $product){?>
            <tr>
                <td> <?php echo $product['masp']; ?></td>
                <td> <?php echo $product['tensp']; ?></td>
                <td> <?php echo $product['giaban']; ?></td>
                <td> <?php echo $product['soluong']; ?></td>
                <td>
                     <a href="add2cart.php?masp=<?php echo $product['masp']; ?>">
                        <button type="button" class="btn btn-success">Add To Cash</button>
                    </a>

                </td>
            </tr>
        <?php }?>

        </tbody>
    </table>


</div>
</body>
</html>