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
            <p>Best Seller Top 5</p>
        </div>
        <div class="product2">
            <?php for ($x = 1; $x <= 5; $x++) {
            ?>
                <div class="productBox">
                    <img class="productImg" src="img/Product/S01.jpg">
                    <div class=" productTxt">
                        <h3>The Best : #<?php echo $x; ?></h3>
                        <p><b>Name : </b>ชื่อสินค้าขายดี #<?php echo $x; ?></p>
                        <button>รายละเอียด</button>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="product3">
            <img src="img/Product/S01.jpg">
            <div class="detailTxt">
                <table>
                    <tr>
                        <td>
                            <h3>Best #5</h3>
                        </td>
                        <td>
                            <h3>id : รหัสสินค้าที่ถูกเลือก</h3>
                        </td>
                    </tr>
                    <tr>
                        <td><b>Product name : </b></td>
                        <td>ชื่อสินค้าขายดีที่ถูกเลือก</td>
                    </tr>
                    <tr>
                        <td><b>Product Type : </b></td>
                        <td>ประเภทสินค้า</td>
                    </tr>
                    <tr>
                        <td><b>Price : </b></td>
                        <td>0.00</td>
                    </tr>
                    <tr>
                        <td><b>Quantity : </b></td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td width=20%><b>Description : </b></td>
                        <td>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus rem iusto expedita explicabo amet repudiandae necessitatibus. Incidunt, sed dolore? Error, reprehenderit iste! Ipsa distinctio, possimus non obcaecati, alias, neque eum id magni ratione reiciendis architecto expedita! Pariatur ratione recusandae magnam aut sunt molestias quod voluptate facere laborum voluptas in, optio voluptatibus iure quam ipsam. Suscipit ducimus illum laborum aliquid quo, eligendi aut totam facere vel provident quia voluptate, dolorum reiciendis.</p>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>