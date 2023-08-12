<?php
// include_once '_classes/Message.php';
    if(isset($_POST['login']))
    {
        $email = str_secur($_POST['email']);
        $password = str_secur($_POST['password']);
        $login = new Login($email, $password);
        if($login->getUserInfo())
        {
            if($login->verifyPassword())
            {
                $_SESSION['user'] = $login->getUserInfo();
                header('Location: home');
            }else{
                $message = new Message(false, true);
               $message->errorMsg('Mot de passe incorrect');

            }
        }else{
            $message = new Message(false, true);
           $message->errorMsg('Email incorrect');
            // echo $message->errorMsg('Email incorrect');
        }
    }