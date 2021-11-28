<!-- class -->
<?php require $_SERVER['DOCUMENT_ROOT']."/project-ajc/vendor/autoload.php"; 

use App\Model\user;

$user_obj= new user;
$result=$user_obj->createUser($_POST);

if ($result) {
    header("location: login.php");
}else{
    header("location: register.php?msg=error");
}
?>