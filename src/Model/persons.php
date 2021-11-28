<?php
namespace App\Model;


use App\Database\Db;


class Persons extends Db {
    //รับค่าข้อมูลมาจากฐานข้อมูล
    public  function getAllPersons(){
        //ส่งคำสั่งไปเรียกข้อมูลทั้งหมดของตารางเรียน
        $sql ="
            SELECT * FROM persons
        ";
        $stmt=$this->pdo->query($sql);
        $data = $stmt->fetchAll();
        return  $data;

    }
}

?>