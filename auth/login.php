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
<body class="d-flex justify-content-center align-items-center mt-3 mb-3 ">
        <!-- Heading -->
        <div class="card rounded" style="width: 25%;">
            <div class="card-head bd-indigo-400  rounded-top p-3">
                <h1 class="text-center text-light">เข้าสู่ระบบ</h1>
            </div>
            <!-- Body -->
            <div class="class-body">
                <div class="">
                    <img src="../IMG/Picture1.png " style="width: 70%" class="rounded mx-auto d-block mt-3" alt="">
                </div>
                <!-- Form -->
                <form action="checklogin.php" class="mb-3" method="POST">
                    <?php
                    error_reporting(E_ALL ^ E_WARNING); 
                        if($_GET['msg']){
                            echo '<h6 class="my-3 text-danger">ชื่อ หรือ Password ไม่ถูกต้อง ใส่ใหม่ซะ!!!</h6>';
                        };
                    ?>
                    <div class="form-group m-2">
                        <label for="name">ชื่อ</label>
                        <input type="text" name="firstname" id="firstname" class="form-control" placeholder="ใส่ชื่อ" required>
                    </div>
                    <div class="form-group m-2">
                        <label for="name">รหัสผ่าน</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="ใส่รหัสผ่าน" required>
                    </div>
                    <div class="m-3 d-grid mt-3">
                        <button type="submit" class="btn bd-indigo-400 text-white d-grid rounded-pill">Login</button>
                    </div>
                </form>
                    <div class=" text-center">
                        <a href="register.php">หากยังไม่ได้ลงทะเบียน</a>
                    </div>
                    <hr>
                
                <form action="search.php" class="p-3">
                    <div class="m-1">
                        <label">ค้นหาตารางเรียน : <input type="text" class="form-control" placeholder="กลุ่มผู้เรียน" name="" id=""></label><br>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn bd-indigo-400 rounded-pill ">ค้นหา</button>
                    </div>
                </form>
            </div>
            
        </div>
</body>
</html>