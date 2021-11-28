<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="../css/colors_bt5.css" rel="stylesheet">
</head>
<body class="vh-100 d-flex justify-content-center align-items-center">
    <div class="card">
        <div class="card-header bd-blue-200 text-white">
            <h4>เข้าสู่ระบบ</h4>
        </div>
        <div class="card-body">
            <form action="checklogin.php" class="mb-3" method="POST">
                <?php
                error_reporting(E_ALL ^ E_WARNING); 
                    if($_GET['msg']){
                        echo '<h6 class="my-3 text-danger">ชื่อ หรือ Password ไม่ถูกต้อง ใส่ใหม่ซะ!!!</h6>';
                    };
                ?>
                <div class="form-group">
                    <label for="name">ชื่อ</label>
                    <input type="text" name="firstname" id="firstname" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="name">รหัสผ่าน</label>
                    <input type="password" name="password" id="password" class="form-control" required>
                </div><br>
                <button type="submit" class="btn bd-blue-200 text-white">Login</button>
            </form>
            <a href="register.php">ยังไม่มีบัญชีเหรอ?</a>
        </div>
        <div class="card-footer">
            <form action="search.php" class="form-inline mt-1 mb-1" method="GET">
                <div class="input-group- mr-2">
                    <label>ค้นหาตารางสอน</label>
                    <input type="text" class="form-control" name="search" id="search" value="<?php echo $_REQUEST['search']; ?>" placeholder="พิมพ์กลุ่มผู้เรียนของคุณ">
                </div><br>
                <button type="submit" class="btn bd-blue-300 text-white">ค้นหา</button>
                <button type="reset" class="btn bd-red-300 text-white">ล้าง</button>
            </form>
        </div>
    </div>
</body>
</html>