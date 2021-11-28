<!-- โหลด class ต่าง ๆ ที่อยู่ในไฟล์ autoload -->
<?php 
error_reporting(E_ALL ^ E_WARNING); 
require $_SERVER['DOCUMENT_ROOT']."../project-ajc/vendor/autoload.php";
require $_SERVER['DOCUMENT_ROOT']."../project-ajc/auth/auth.php";

use App\Model\Talanglearn;
use App\Model\Talanglearn2;
use App\model\Homework;

if ($_REQUEST['action']=='edit') {
    $workObj = new Homework;
    $work = $workObj->gethomeworkByid($_REQUEST['id']);
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boonraksa System</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="../css/colors_bt5.css" rel="stylesheet">
</head>
<body>
    <?php require $_SERVER['DOCUMENT_ROOT']."/project-ajc/index/navbar.php";?>  
    <!-- Main -->
    <div class="container-fluid">
        <div class="row mt-3 align-items-center">
            <!-- Col8 -->
            <div class="col-sm">
                <div class="card">
                    <div class="card-head text-center bg-light">
                        <h4>ตารางเรียน</h4>
                        <h4><?php echo "{$_SESSION['firstname']} ({$_SESSION['major']}) กลุ่มผู้เรียน {$_SESSION['grouplearn']} ";?></h4>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>วัน</th>
                                    <th>เวลาเริ่มเรียน</th>
                                    <th>รหัสวิชา</th>
                                    <th>ชื่อวิชา</th>
                                    <th>ชื่อผู้สอน</th>
                                    <th>ลิงค์เรียน</th>
                
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
                                                </tr>                                  
                                            ";
                                        }
                                    }
                                    
                                ?> 
                            </tbody>
                            <!-- ปุ่มดูงานทั้งหมด -->
                            <tfoot >
                                <tr class="">
                                    <td><button class="btn btn-danger" data-bs-target="#showmd" data-bs-toggle="modal">กดเพื่อดูงานทั้งหมด</button></td> 
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Modal -->
    <div class="modal" id="showmd">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header bg-light">
                    <h5 class="modal-title">งานในชั้นเรียน</h5>
                    <div style="text-align: center;">
                        <h5><?php echo "{$_SESSION['firstname']} ({$_SESSION['major']}) กลุ่มผู้เรียน {$_SESSION['grouplearn']}";?></h5>
                    </div>
                </div>
                
                <div class="modal-body">
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
                </div>
            <div class="modal-footer bg-light">
                <a href="creatework.php" class="btn bd-green-400 justify-content-end text-white">เพิ่มงาน</a>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ปิด</button>               
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