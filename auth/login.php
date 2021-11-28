<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="../css/colors_bt5.css" rel="stylesheet">
    <!-- <script src="../js/bootstrap.min.js"></script> -->
</head>
<body class="d-flex justify-content-center align-items-center mt-3 mb-3 ">
        <!-- Heading -->
        <div class="card rounded" style="width: 25%;">
            <div class="card-head bd-indigo-400  rounded-top p-3">
                <h1 class="text-center text-light">เข้าสู่ระบบ</h1>
            </div>
            <!-- Body -->
            <div class="card-body">
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
            
                <div class="d-grid m-3">
                    <button  class="btn btn-secondary rounded-pill " data-bs-target="#showtalang" data-bs-toggle="modal">ค้นหาตารางเรียน</button>
                </div>

            </div>
            
        </div>

        <!-- Modal ตารางเรียน -->
        <div class="modal" id="showtalang" >
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <!-- Head modal -->
                    <div class="modal-header bg-light">
                        <h5 class="modal-title">ค้นหาตารางเรียน</h5>
                    </div>
                    <div class="modal-body">
                        <form action="">
                            <label for="">ค้นหาตารางเรียน :<input type="text" class="form-control" name="" placeholder="กลุ่มผู้เรียน" id="" method="POST"></label>
                            <button type="submit" class="btn btn-success">ค้นหา</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>