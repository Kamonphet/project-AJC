<!-- โหลด class ต่าง ๆ ที่อยู่ในไฟล์ autoload -->
<?php 
error_reporting(E_ALL ^ E_WARNING); 
require $_SERVER['DOCUMENT_ROOT']."../project-ajc/vendor/autoload.php";
require $_SERVER['DOCUMENT_ROOT']."../project-ajc/auth/auth.php";

use App\Model\Talanglearn;
use App\Model\Talanglearn2;

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ตารางเรียน</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="../css/colors_bt5.css" rel="stylesheet">
</head>
<body>
    <?php require $_SERVER['DOCUMENT_ROOT']."/project-ajc/index/navbar.php";?>
    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <div class="card mb-3">
                    <h4 class="card-header bd-blue-200 text-white">ตารางเรียน
                    <?php echo "{$_SESSION['firstname']} ({$_SESSION['major']}) กลุ่มผู้เรียน {$_SESSION['grouplearn']} ";?>
                    </h4>
                    <div class="card-body">
                        <table class="table" style="text-align: center;"">
                            <thead>
                                <tr>
                                    <th>วัน</th>
                                    <th>เวลาเริ่มเรียน</th>
                                    <th>รหัสวิชา</th>
                                    <th>ชื่อวิชา</th>
                                    <th>ชื่อครู</th>
                                    <th>ลิงค์เรียน</th>
                                    <th>งาน</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $talanglearnObj = new Talanglearn();
                                    $talanglearn  = $talanglearnObj->getAllTalanglearn();

                                    $talanglearn2Obj = new Talanglearn2();
                                    $talanglearn2  = $talanglearn2Obj->getAllTalanglearn2();
                                    
                                    if ($_SESSION['grouplearn']=='ED2ED67'){
                                        foreach($talanglearn as $Talang){
                                            echo "
                                                <tr>
                                                    <td>{$Talang['days']}</td>
                                                    <td>{$Talang['learn_time']}</td>
                                                    <td>{$Talang['subject_id']}</td>
                                                    <td>{$Talang['subject_name']}</td>
                                                    <td>{$Talang['teacher_name']}</td>
                                                    <td><a href='{$Talang['learn_link']}' target='_blank' class='btn bd-blue-300 text-white'>ลิงค์เรียน</a></td></td>
                                                    <td><a href='work.php' class='btn bd-red-300 text-white'>ดูงานทั้งหมด</a></td>
                                                </tr>                                  
                                            ";
                                        }
                                    }elseif ($_SESSION['grouplearn']=='ED1ED67'){
                                        foreach($talanglearn2 as $Talang2){
                                            echo "
                                                <tr>
                                                    <td>{$Talang2['days']}</td>
                                                    <td>{$Talang2['learn_time']}</td>
                                                    <td>{$Talang2['subject_id']}</td>
                                                    <td>{$Talang2['subject_name']}</td>
                                                    <td>{$Talang2['teacher_name']}</td>
                                                    <td><a href='{$Talang2['learn_link']}' target='_blank' class='btn bd-blue-300 text-white'>ลิงค์เรียน</a></td></td>
                                                    <td><a href='work.php' class='btn bd-red-300 text-white'>ดูงานทั้งหมด</a></td>
                                                </tr>                                  
                                            ";
                                        }
                                    }
                                    
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="../js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>
</html>