<?php 
error_reporting(E_ALL ^ E_WARNING); 
require $_SERVER['DOCUMENT_ROOT']."../project-ajc/vendor/autoload.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="../css/colors_bt5.css" rel="stylesheet">
    <script src="../js/jquery-3.6.0.min.js"></script>
</head>
<body class="d-flex justify-content-center align-items-center mt-5 mb-3 bd-purple-100">
        <!-- Heading -->
        <div class="card rounded btn-bd-light" style="width: 25%;">
            <div class="card-head bd-indigo-400  rounded-top p-3">
                <h3 class="text-center text-light">เข้าสู่ระบบ</h3>
                <h1 class="text-center text-light">Boonraksa System</h1>
            </div>
            <!-- Body -->
            <div class="card-body">
                <div class="">
                    <img src="../IMG/Picture1.png " style="width: 70%" class="rounded mx-auto d-block mt-3" alt="">
                </div>
                <!-- Form -->
                <form action="checklogin.php" class="mb-3" method="POST" id="login">
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
        <div class="modal fade" id="showtalang" >
            <div class="modal-dialog modal-xl">
                <div class="modal-content btn-bd-light ">
                    <!-- Head modal -->
                    <div class="modal-header bd-indigo-300 text-white">
                        <h5 class="modal-title">ค้นหาตารางเรียน</h5>
                    </div>
                    <div class="modal-body text-black">
                        <form method="GET">
                            <label for="table">ค้นหาตารางเรียน <input type="text" class="form-control" name="table" id="table" placeholder="กลุ่มผู้เรียน" required></label>
                            <button type="submit" class="btn btn-success" onclick="alert('ค้นหาสำเร็จ')">ค้นหา</button>
                        </form>

                        <table class='table'>
                            <thead>
                                <tr>
                                    <th>วัน</th>
                                    <th>เวลาเริ่มเรียน</th>
                                    <th>รหัสวิชา</th>
                                    <th>ชื่อวิชา</th>
                                    <th>ชื่อผู้สอน</th>
                                </tr>

                            </thead>
                            <tbody>
                                <?php
                                    $table=$_REQUEST['table'];
                                    use App\Model\Talanglearn;
                                     use App\Model\Talanglearn2;
                                     
                                    if($table){
                                            if ($table=='ED2ED67'){
                                                $talanglearnObj = new Talanglearn();
                                                $talanglearn  = $talanglearnObj->getAllTalanglearn();
                                                foreach($talanglearn as $Talang){
                                                    echo"
                                                        <tr>
                                                            <td>{$Talang['days']}</td>
                                                            <td>{$Talang['learn_time']}</td>
                                                            <td>{$Talang['subject_id']}</td>
                                                            <td>{$Talang['subject_name']}</td>
                                                            <td>{$Talang['teacher_name']}</td>
                                                        </tr> 
                                                    ";                                 
                                                }
                                            }elseif ($table=='ED1ED67'){
                                                $talanglearn2Obj = new Talanglearn2();
                                                $talanglearn2  = $talanglearn2Obj->getAllTalanglearn2();
                                                foreach($talanglearn2 as $Talang2){
                                                    echo"
                                                        <tr>
                                                            <td>{$Talang2['days']}</td>
                                                            <td>{$Talang2['learn_time']}</td>
                                                            <td>{$Talang2['subject_id']}</td>
                                                            <td>{$Talang2['subject_name']}</td>
                                                            <td>{$Talang2['teacher_name']}</td>
                                                        </tr>
                                                    ";                                  
                                                }
                                            }
                                    }
                                ?>
                            </tbody>
                            <tfoot >
                                <tr class=''>
                                    <td><button class='btn btn-danger' data-bs-target='#showtalang' data-bs-toggle='modal'>ปิด</button></td> 
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>