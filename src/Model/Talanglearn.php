<?php
namespace App\Model;


use App\Database\Db;


class Talanglearn  extends Db {
    //รับค่าข้อมูลมาจากฐานข้อมูล
    public  function getAllTalanglearn(){
        //ส่งคำสั่งไปเรียกข้อมูลทั้งหมดของตารางเรียน
        $sql ="
            SELECT
                *
            FROM
                talanglearn
                
        
        ";
        $stmt=$this->pdo->query($sql);
        $data = $stmt->fetchAll();
        return  $data;

    }
}
?>