<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5672301 Data Centric programming</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/myStyle.css">
</head>

<body>

    <?php include('Main_menu.php'); ?>

    <div class="main">
        <div class="banner2">
            <p>All Product</p>
        </div>
        <div class="product">
            <?php for ($x = 1; $x <= 20; $x++) {
            ?>
                <div class="productBox">
                    <img class="productImg" src="img/Product/S01.jpg">
                    <div class=" productTxt">
                        <h3><b>รหัสสินค้า</b></h3>
                        <p><b>Type : </b>ประเภทสินค้า</p>
                        <p><b>Name : </b>ชื่อสินค้า</p>
                        <p><b>Price : </b>ราคาสินค้า</p>
                        <p><b>Quantity : </b>จำนวนคงเหลือ</p>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <footer class="footer">
        Copyright@20xx : Student Group xx1226601, Software Engineering, LPRU
    </footer>
</body>

</html>