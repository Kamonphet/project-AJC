<?php
namespace App\Model;


use App\Database\Db;


class Talanglearn2  extends Db {
    //รับค่าข้อมูลมาจากฐานข้อมูล
    public  function getAllTalanglearn2(){
        //ส่งคำสั่งไปเรียกข้อมูลทั้งหมดของตารางเรียน
        $sql ="
            SELECT
                *
            FROM
                talanglearn2
                
        
        ";
        $stmt=$this->pdo->query($sql);
        $data = $stmt->fetchAll();
        return  $data;

    }
}
?>