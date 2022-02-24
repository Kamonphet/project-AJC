<?php
namespace App\Model;


use App\Database\Db;


class user extends Db {
    
    public function createUser($user){

        $user['password']=password_hash($user['password'], PASSWORD_DEFAULT);

        $sql="
            INSERT INTO persons (
                firstname,
                lastname,
                password,
                major,
                grouplearn
            ) VALUES (
                :firstname,
                :lastname,
                :password,
                :major,
                :grouplearn
            )
        ";

        $stmt= $this->pdo->prepare($sql);
        $stmt->execute($user);
        
        
        session_start();
        $_SESSION['firstname'] = $user['firstname'];
        $_SESSION['password'] = $user['password'];
        $_SESSION['major'] = $user['major'];
        $_SESSION['grouplearn'] = $user['grouplearn'];
        $_SESSION['role'] = 'member';
        $_SESSION['login'] = true;

        return $this->pdo->lastInsertId();
    }

    public  function checkUser($user){
        $sql ="
            SELECT
                firstname,
                password,
                major,
                grouplearn,
                role
            FROM
                persons
            WHERE
                persons.firstname = ?;
        ";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$user['firstname']]);
        $data = $stmt->fetchAll();
        $userDB= $data[0];

        if(password_verify($user['password'], $userDB['password'])){
            session_start();
            $_SESSION['firstname'] = $userDB['firstname'];
            $_SESSION['password'] = $userDB['password'];
            $_SESSION['major'] = $userDB['major'];
            $_SESSION['grouplearn'] = $userDB['grouplearn'];
            $_SESSION['role'] = $userDB['role'];
            $_SESSION['login'] = true;

            return true;
        }else{
            return false;
        }
    }

}
?>