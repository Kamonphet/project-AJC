<?php 
error_reporting(E_ALL ^ E_WARNING); 
require $_SERVER['DOCUMENT_ROOT']."../project-ajc/vendor/autoload.php";

use App\model\Homework;
$workObj= new Homework;

if ($_REQUEST['action']=='delete') {
    $workObj->deletework($_REQUEST['id']);

}elseif ($_REQUEST['action']=='edit') {
    $work = $_REQUEST;
    unset($work['action']);
    $workObj->updatehomework($work);

}elseif ($_REQUEST['action']=='add') {
    $work = $_REQUEST;
    unset($work['action']);
    unset($work['id']);
    $workObj->addhomework($work);
}

header("location:mainpage.php");
?>