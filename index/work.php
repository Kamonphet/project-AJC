<!-- โหลด class ต่าง ๆ ที่อยู่ในไฟล์ autoload -->
<?php 
error_reporting(E_ALL ^ E_WARNING); 
require $_SERVER['DOCUMENT_ROOT']."../project-ajc/vendor/autoload.php";
require $_SERVER['DOCUMENT_ROOT']."../project-ajc/auth/auth.php";

use App\model\Homework;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>งานทั้งหมด</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="../css/colors_bt5.css" rel="stylesheet">
</head>
<body>
    <?php require $_SERVER['DOCUMENT_ROOT']."/project-ajc/index/navbar.php";?>
    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <div class="card mb-3">
                    <div class="card-header bd-blue-200 text-white d-flex justify-content-between">
                        <h4>งานทั้งหมด</h4>
                        <a href="mainpage.php" class="btn btn-light">ย้อนกลับ</a>
                    </div>
                    <div class="card-body">
                        <div style="text-align: center;">
                            <h3><?php echo "{$_SESSION['firstname']} ({$_SESSION['major']}) กลุ่มผู้เรียน {$_SESSION['grouplearn']}";?></h3>
                        </div>
                        <table class="table" style="text-align: center;"">
                            <thead>
                                <tr>
                                    <th>งานที่</th>
                                    <th>รหัสวิชา</th>
                                    <th>ชื่อวิชา</th>
                                    <th>รายละเอียดงาน</th>
                                    <th>วันที่ต้องส่ง</th>
                                    <th>จัดการ</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $workObj = new Homework();
                                    if ($_SESSION['grouplearn']=='ED2ED67'){
                                        $works = $workObj->getAllHomework();
                                    }elseif($_SESSION['grouplearn']=='ED1ED67'){
                                        $works = $workObj->getAllHomework2();
                                    }
                                    $n=0;
                                    foreach($works as $work){
                                        $n++;
                                        echo "
                                            <tr>
                                                <td>{$n}</td>
                                                <td>{$work['work_subject_id']}</td>
                                                <td>{$work['work_subject_name']}</td>
                                                <td>{$work['info']}</td>
                                                <td>{$work['dates']}</td>
                                                <td><a href='creatework.php?id={$work['id']}&action=edit'
                                                class='btn bd-green-400 text-white'>แก้ไข</a></td>
                                                <td><a href='savework.php?id={$work['id']}&action=delete'
                                                class='btn bd-red-400 text-white'>ลบ</a></td>
                                                
                                            </tr>                                  
                                        ";
                                    }
                                ?>
                            </tbody>
                        </table>
                        <a href="creatework.php" class="btn bd-green-200 justify-content-end text-white">เพิ่มงาน</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- <script src="../js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>