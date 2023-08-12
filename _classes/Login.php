<?php

 class Login{
    public $email;
    public $password;

    public function __construct($email, $password){
        $this->email = $email;
        $this->password = $password;
    }

    public function getUserInfo(){
        try{
            global $db;
            $query = $db->prepare("SELECT * FROM users WHERE email = :email");
            $query->execute(array(
                'email' => $this->email,
            ));
            $result = $query->fetch();
            return $result;
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    public function verifyPassword(){
        return password_verify($this->password, $this->getUserInfo()['password']);
    }
 }