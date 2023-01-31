<!DOCTYPE html>

<html lang="en">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Member Management</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/myStyle.css">
    <link rel="stylesheet" href="css/adminStyle.css">
</head>

<body class="body">
    <div class="adminHeader">
        <div class="main">
            <div class="title">
                Admin Zone
            </div>
            <p>Hi, ชื่อผู้เข้าระบบ</p>
            <ul class="menubar">
                <li><b><a href="employee.php">Employee</a></b></li>
                <li><b><a href="member.php">Member</a></b></li>
                <li><b><a href="index.php">Logout</a></b></li>
            </ul>
        </div>
    </div>
    <div class="main">
        <div class="adminZone">
            <div class="headTopic">
                Member Management
            </div>
            <div class="col zoneLeft">
                <label>Display All Data </label>
                <button class="button1"> New Data </button>
                <table class="memberTable">
                    <tr>
                        <th>Member id</th>
                        <th>Member name</th>
                        <th>Work</th>
                    </tr>
                    <tr>
                        <td>รหัสสมาชิก #1</td>
                        <td>นาย ชื่อ #1 นามสกุล #1</td>
                        <td><button class="button2 bg-warning">View</button>
                            <button class="button2 bg-danger">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>รหัสสมาชิก #2</td>
                        <td>นาง ชื่อ #2 นามสกุล #2</td>
                        <td><button class="button2 bg-warning">View</button>
                            <button class="button2 bg-danger">Delete</button>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="col zoneRight">
                <label> Member id : C0001</label>
                <div class="detail">
                    <div class="row mb-2">
                        <div class="col-4 p-0">User Name :</div>
                        <div class="col-4">
                            <input type="text" class="form-control p-0 pl-2" value="ตัวแปร UN">
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-4 p-0">Password :</div>
                        <div class="col-4">
                            <input type="text" class="form-control p-0 pl-2" value="ตัวแปร PW">
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-4 p-0"> Prename :</div>
                        <div class="col">
                            <input type="text" class="form-control p-0 pl-2" value="ตัวแปร prename">
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-4 p-0">Member Name :</div>
                        <div class="col-4 pr-0"><input type="text" class="form-control p-0 pl-2" value="ตัวแปร name"></div>
                        <div class="col-4 pl-0"><input type="text" class="form-control p-0 pl-2" value="ตัวแปร Lastname"></div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-4 p-0">Member Level :</div>
                        <div class="col"><input type="text" class="form-control p-0 pl-2" value="ตัวแปร Member Level"></div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-4 p-0">Birthday :</div>
                        <div class="col"><input type="text" class="form-control p-0 pl-2" value="ตัวแปร Birthday"></div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-4 p-0">Address :</div>
                        <div class="col"><textarea class="form-control p-0 pl-2" rows=3>ตัวแปร Address</textarea></div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-4 p-0">Telephone :</div>
                        <div class="col"><input type="text" class="form-control p-0 pl-2" value="ตัวแปร Telephone"></div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-5">
                            <img src="img/Member/C0001.jpg">
                            <p class="pl-4">รูปสมาชิก</p>

                        </div>
                        <div class="col-5 "><button>Insert / Update Data</button></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
        Copyright@20xx : Student Group xx1226601, Software Engineering, LPRU
    </footer>
</body>

</html>