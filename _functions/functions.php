<?php

    function str_secur($string){
        return trim(htmlspecialchars($string));
    }

    function debug($var){
        echo '<pre>';
        print_r($var);
        echo '</pre>';
        exit();
    }

    function convert_string_to_array($string){
        $var = explode(',', $string);
        for($i=0; $i<count($var); $i++){
            $var[$i] = str_secur($var[$i]);
        }
        return $var;
    }

    function get_user_info($id){
        try{
            global $db;
            $sql = 'SELECT * FROM users WHERE id = :id';
            $query = $db->prepare($sql);
            $query->bindValue(':id', $id, PDO::PARAM_INT);
            $query->execute();
            $result = $query->fetch(PDO::FETCH_ASSOC);
            $i =new User( $result['pseudo'], $result['email'], $result['password'], $result['hobbies'], $result['autre'], $result['sent_newsletter']);
            $i->id = $result['id'];
            return  $i;
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    function deconnexion(){
        session_destroy();
    }