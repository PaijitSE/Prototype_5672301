<!DOCTYPE html>

<html lang="en">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sign In</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/myStyle.css">
</head>

<body class="body">
    <?php include('Main_menu.php'); ?>
    <div class="main">
        <div class="banner2">
            <p>Login</p>
        </div>

        <form action="" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-7 cardLeft">
                    <h5>Welcome to SE-Store Sytem : Login </h5>
                    <p> User Name
                        <input type="text" class="form-control" name="Uname" value="E0001">
                    </p>
                    <p>Password
                        <input type="password" class="form-control" name="Passwd" value="qwerty">
                    </p>
                    <button type="submit" class="btn btn-danger">Login</button>
                </div>

                <div class="col-4 cardRight">
                    <img class="img1" src="img/myPicture.png">
                    <p class="text-center">
                        <a href="https://www.facebook.com/softengthai"><img src="img/FB.png"></a>
                        <a href="http://www.softengthai.com/"><img src="img/Web.png"></a>
                        <a href="https://www.youtube.com/channel/UCGobB11SOmjWIuNMmDYixUQ"><img src="img/Youtube.png"></a>
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="card SE">
                    <h5>Software Engineering, LPRU</h5>
                    <p>โดยผลิตบัณฑิตที่มีความรู้และทักษะการพัฒนาซอฟต์แวร์อย่างเป็นระบบ มีความเป็นมืออาชีพในการพัฒนาซอฟต์แวร์เป็นทีม มีความสามารถประยุกต์ใช้ศาสตร์และเทคโนโลยีคอมพิวเตอร์อย่างมีประสิทธิภาพ เห็นคุณค่าของทรัพย์สินทางปัญญา และมีคุณธรรมจริยธรรมในวิชาชีพ</p>
                </div>
            </div>
        </form>
    </div>
    <footer class="footer">
        Copyright@20xx : Student Group xx1226601, Software Engineering, LPRU
    </footer>

</body>

</html>