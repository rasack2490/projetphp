<?php
$message = new Message(false, false);
    if($_SESSION['user']['hobbies'] != 'Auccun'){
        $hobbies = convert_string_to_array($_SESSION['user']['hobbies']);
    }
    $userinfo = get_user_info($_SESSION['user']['id']);

    if(isset($_POST['edit'])){
        if( isset($_POST['pseudo']) && !empty($_POST['pseudo'])){
            $pseudo = str_secur($_POST['pseudo']);
            $userinfo->pseudo = $pseudo;
        }
        if( isset($_POST['password']) && !empty($_POST['password'])){
            $password = str_secur($_POST['password']);

            if( isset($_POST['password2']) && !empty($_POST['password2'])){
                $password2 = str_secur($_POST['password2']);
                debug($password == $password2);
                if( $password == $password2){
                    $password = password_hash($password, PASSWORD_BCRYPT, array('cost' => 12));
                    $userinfo->password = $password;
                }else{
                    // debug(false);
                    $message->error = true;
                    echo '<h1 class="error">'.$message->errorMsg('Les mots de passe ne correspondent pas').'</h1>';
                    $message->error = false;
                }
            }else{
                $message->error = true;
                echo '<h1 class="error">'.$message->errorMsg('Veuillez confirmer le mot de passe').'</h1>';
                $message->error = false;
            }
        }

        if( isset($_POST['hobbies']) && !empty($_POST['hobbies'])){
            $hobbies = $_POST['hobbies'];
            if(count($hobbies) > 0 ){
                for($i = 0; $i < count($hobbies); $i++){
                    $hobbies[$i] = str_secur($hobbies[$i]);
                    $all_hobbies .= $hobbies[$i].', ';
                }
                $userinfo->hobbies = $all_hobbies;
            }
        }

        if( isset($_POST['autre']) && !empty($_POST['autre'])){
            $autre = str_secur($_POST['autre']);
            $userinfo->autre = $autre;
        }

        if( isset($_POST['sent_newsletter']) && !empty($_POST['sent_newsletter'])){
            $sent_newsletter = true;
            $userinfo->sent_newsletter = $sent_newsletter;
        }

        if($userinfo->update()){
            $userinfo = get_user_info($_SESSION['user']['id']);
            $_SESSION['user']['pseudo'] = $userinfo->pseudo;
            $_SESSION['user']['email'] = $userinfo->email;
            $_SESSION['user']['hobbies'] = $userinfo->hobbies;
            $_SESSION['user']['autre'] = $userinfo->autre;
            $_SESSION['user']['sent_newsletter'] = $userinfo->sent_newsletter;
            $_SESSION['user']['created_at'] = $userinfo->created_at;
            $_SESSION['user']['updated_at'] = $userinfo->updated_at;

            header('Location: home');
        }else{
            $message->error = true;
            echo '<h1 class="error">'.$message->errorMsg('Une erreur est survenue').'</h1>';
            $message->error = false;
        }

    }
