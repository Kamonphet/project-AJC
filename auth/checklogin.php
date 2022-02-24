<!-- <script src="../js/jquery-3.6.0.min.js"></script> -->
<?php require $_SERVER['DOCUMENT_ROOT']."/project-ajc/vendor/autoload.php"; 
use App\Model\user;

$user_obj= new user;

$result=$user_obj->checkuser($_POST);

if ($result) {
    header("location: /project-ajc/index/mainpage.php?msg=sussess");
}else{
    header("location: login.php?msg=error");
}
?>