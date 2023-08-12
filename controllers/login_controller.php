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
                header('Location: home.php');
            }else{
                $message = new Message(false, true);
                echo '<h1 class="error">'.$message->errorMsg('Mot de passe incorrect').'</h1>';

            }
        }else{
            $message = new Message(false, true);
            echo '<h1 class="error">'.$message->errorMsg('Email incorrect').'</h1>';
            // echo $message->errorMsg('Email incorrect');
        }
    }