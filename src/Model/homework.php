<?php
namespace App\Model;


use App\Database\Db;


class Homework extends Db {
    //รับค่าข้อมูลมาจากฐานข้อมูล
    public function getAllHomework(){
        //ส่งคำสั่งไปเรียกข้อมูลทั้งหมดของตารางเรียน
        $sql ="
            SELECT 
                homework.id,
                homework.work_subject_id,
                homework.info,
                homework.dates,
                talanglearn.subject_name AS work_subject_name
                

            FROM 
                homework
            LEFT JOIN talanglearn ON
                homework.work_subject_id = talanglearn.subject_id
            


        ";
        $stmt=$this->pdo->query($sql);
        $data = $stmt->fetchAll();
        return  $data;

    }

    public function getAllHomework2(){
        //ส่งคำสั่งไปเรียกข้อมูลทั้งหมดของตารางเรียน
        $sql ="
            SELECT 
                homework.id,
                homework.work_subject_id,
                homework.info,
                homework.dates,
                talanglearn2.subject_name AS work_subject_name
                
            FROM 
                homework
            LEFT JOIN talanglearn2 ON
                homework.work_subject_id = talanglearn2.subject_id
            


        ";
        $stmt=$this->pdo->query($sql);
        $data = $stmt->fetchAll();
        return  $data;

    }

    public function addhomework($work){
        $sql="
            INSERT INTO homework (
                work_subject_id,
                info,
                dates
            )VALUES (
                :work_subject_id,
                :info,
                :dates
            )   
        ";
        $stmt= $this->pdo->prepare($sql);
        $stmt->execute($work);

        return $this->pdo->lastInsertId();
    }

    public function deletework($id){
        $sql="
        DELETE FROM homework WHERE id = ?
        ";
        $stmt= $this->pdo->prepare($sql);
        $stmt->execute([$id]);
        
        return true;
    }

    public function gethomeworkByid($id){
        $sql ="
        SELECT 
            homework.id,
            homework.work_subject_id,
            homework.info,
            homework.dates,
            talanglearn.subject_name AS work_subject_name
        FROM 
            homework
        LEFT JOIN talanglearn ON
            homework.work_subject_id = talanglearn.subject_id
        WHERE
            homework.id = ?
        ";

        $stmt= $this->pdo->prepare($sql);
        $stmt->execute([$id]);
        $data = $stmt->fetchAll();
        return  $data[0];
    }

    public function updatehomework($work){
        $sql="
            UPDATE homework SET
                work_subject_id = :work_subject_id,
                info = :info,
                dates = :dates
         
            WHERE id = :id
        ";
        $stmt= $this->pdo->prepare($sql);
        $stmt->execute($work);

        return true;
    }
}
?>