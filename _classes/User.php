<?php


class User {
    public $id;
    public $pseudo;
    public $email;
    public $password;
    public $hobbies;
    public $autre;
    public $sent_newsletter;
    public $created_at;
    public $updated_at;

    public function __construct($pseudo, $email, $password, $hobbies, $autre, $sent_newsletter){
        $this->pseudo = $pseudo;
        $this->email = $email;
        $this->password = $password;
        $this->hobbies = $hobbies;
        $this->autre = $autre;
        $this->sent_newsletter = $sent_newsletter;
    }

    public function register(){
        try{
            global $db;
            $query = $db->prepare("INSERT INTO users (pseudo, email, password, hobbies, autre, sent_newsletter) VALUES (:pseudo, :email, :password, :hobbies, :autre, :sent_newsletter)");
            $query->execute(array(
                'pseudo' => $this->pseudo,
                'email' => $this->email,
                'password' => $this->password,
                'hobbies' => $this->hobbies,
                'autre' => $this->autre,
                'sent_newsletter' => $this->sent_newsletter
            ));
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    public function update(){
        try{
            global $db;
            $query = $db->prepare("UPDATE users SET pseudo = :pseudo, email = :email, password = :password, hobbies = :hobbies, autre = :autre, sent_newsletter = :sent_newsletter WHERE id = $this->id");
            $check =$query->execute(array(
                'pseudo' => $this->pseudo,
                'email' => $this->email,
                'password' => $this->password,
                'hobbies' => $this->hobbies,
                'autre' => $this->autre,
                'sent_newsletter' => $this->sent_newsletter,

            ));
            if($check){
                return true;
            }else{
                return false;
            }
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    public function check_if_pseudo_exist(){
        try{
            global $db;
            $query = $db->prepare("SELECT * FROM users WHERE pseudo = :pseudo");
            $query->execute(array(
                'pseudo' => $this->pseudo
            ));
            if($query->rowCount() > 0){
                return true;
            }else{
                return false;
            }
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
}