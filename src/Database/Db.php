<?php
// ที่อยู่ของ class ที่สร้างไว้
namespace App\Database;
 
//ชื่อ oop จาก PHP
use PDO;

// เชื่อมต่อกับฐานข้อมูล
class Db{
    private $host = "localhost";
    private $user =  "phet";
    private $password = "Pfyk/RDXKsM(s5rx";
    private $dbName = "tschedule";

    // oop pdo
    protected  $pdo;
    
    //ถูกเรียกใช้หลังจากสร้าง object
    function __construct(){
        $this->pdo = $this->connect();
    }

    // ติดต่อฐานข้อมูล
    protected function connect(){
        $dsn = "mysql:host={$this->host};dbname={$this->dbName}";
        // สร้าง  pdo
        $pdo =new  PDO($dsn, $this->user, $this->password);
        //set คุณสมบัติ
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }
}

?>