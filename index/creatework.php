<!-- โหลด class ต่าง ๆ ที่อยู่ในไฟล์ autoload -->
<?php 
error_reporting(E_ALL ^ E_WARNING); 
require $_SERVER['DOCUMENT_ROOT']."../project-ajc/vendor/autoload.php";
// require $_SERVER['DOCUMENT_ROOT']."../project-ajc/auth/auth.php";

use App\Model\Homework;
use App\Model\Talanglearn;
use App\Model\Talanglearn2;

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
    <title>เพิ่มงาน</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="../css/colors_bt5.css" rel="stylesheet">
</head>
<body class="bd-indigo-100">
    <?php require $_SERVER['DOCUMENT_ROOT']."/project-ajc/index/navbar.php";?>
    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <div class="card btn-bd-light">
                    <div class="card-header bd-indigo-200 text-white d-flex justify-content-between ">
                        <h4><?php echo ($_REQUEST['action']=='edit')? "แก้ไขงาน" : "เพิ่มงาน"; ?></h4>
                        <a href="mainpage.php" class="btn btn-light">ย้อนกลับ</a>
                    </div>
                    <div class="card-body text-black">
                        <div style="text-align: center;">
                            <h3><?php echo "{$_SESSION['firstname']} ({$_SESSION['major']}) กลุ่มผู้เรียน {$_SESSION['grouplearn']}";?></h3>
                        </div>
                        <form action="savework.php" method="GET">
                            <input type="hidden" name="action" 
                                value="<?php echo ($_REQUEST['action']=='edit')? "edit" : "add"; ?>">
                            <input type="hidden" name="id" value="<?php echo $work['id'] ?>" >
                            <div  class="form-group">
                                <label for="work_subject_id">ชื่อวิชา</label>
                                <?php
                                    if($_SESSION['grouplearn']=='ED2ED67'){
                                        echo "
                                            <select name='work_subject_id' id='work_subject_id' class='form-control' required>
                                            <option value=''>เลือก</option>";
                                        
                                        $talanglearnObj = new Talanglearn();
                                        $talanglearn  = $talanglearnObj->getAllTalanglearn();
                                        foreach($talanglearn as $Talang){
                                            $selected = ($Talang['subject_id'] == $work['work_subject_id']) ? "selected" : "";
                                            echo "
                                                <option value='{$Talang['subject_id']}' {$selected}>{$Talang['subject_name']}</option>                      
                                            ";
                                        }
                                    }elseif($_SESSION['grouplearn']=='ED1ED67'){
                                        echo "
                                            <select name='work_subject_id' id='work_subject_id' class='form-control' required>
                                            <option value=''>เลือก</option>";
                                        
                                        $talanglearn2Obj = new Talanglearn2();
                                        $talanglearn2  = $talanglearn2Obj->getAllTalanglearn2();
                                        foreach($talanglearn2 as $Talang2){
                                            $selected = ($Talang2['subject_id'] == $work['work_subject_id']) ? "selected" : "";
                                            echo "
                                                <option value='{$Talang2['subject_id']}' {$selected}>{$Talang2['subject_name']}</option>                      
                                            ";
                                        }
                                    }

                                ?>
                                </select>
                            </div> 
                            <div  class="form-group">
                                <label for="info">ข้อมูลงาน</label>
                                <input type="text" name="info" id="info" class="form-control" value="<?php echo $work['info']?>" required></input>
                            </div> 
                            <div  class="form-group">
                                <label for="dates">วันส่งงาน</label>
                                <input type="date" name="dates" id="dates" class="form-control" value="<?php echo $work['dates']?>" required></input>
                            </div><br>
                            <button type="submit" class="btn bd-green-400 text-white">เสร็จสิ้น</button>
                            <button type="reset" class="btn bd-red-400 text-white">รีเซ็ท</button>
                        </form>

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