<?php
$message = new Message(false, false);
$all_hobbies = '';
    if(isset($_POST['register'])){
        if( isset($_POST['pseudo']) && !empty($_POST['pseudo'])){
            $pseudo = str_secur($_POST['pseudo']);

            if( isset($_POST['email']) && !empty($_POST['email'])){
                $email = str_secur($_POST['email']);

                if( isset($_POST['password']) && !empty($_POST['password'])){
                    $password = str_secur($_POST['password']);

                    if( isset($_POST['password2']) && !empty($_POST['password2'])){
                        $password2 = str_secur($_POST['password2']);

                        if($password == $password2){
                            $password = password_hash($password, PASSWORD_BCRYPT, array('cost' => 12));

                            // debug($sent_newsletter);
                            if( isset($_POST['hobbies']) && !empty($_POST['hobbies'])){
                                $hobbies = $_POST['hobbies'];
                                if(count($hobbies) > 0 ){
                                    for($i = 0; $i < count($hobbies); $i++){
                                        $hobbies[$i] = str_secur($hobbies[$i]);
                                        $all_hobbies .= $hobbies[$i].', ';
                                    }
                                }
                            }else{
                                $all_hobbies = 'Aucun';
                            }

                            if( isset($_POST['autre']) && !empty($_POST['autre'])){
                                $autre = str_secur($_POST['autre']);
                            }else{
                                $autre = '';
                            }
                            if( isset($_POST['sent_newsletter']) && !empty($_POST['sent_newsletter'])){
                                $sent_newsletter = true;

                            }else{
                                $sent_newsletter = false;
                            }


                            $register = new User($pseudo, $email, $password, $all_hobbies, $autre, $sent_newsletter);
                            if($register->check_if_pseudo_exist()){
                                $message->error = true;
                                echo '<h1 class="error">'.$message->errorMsg('Le pseudo existe déjà').'</h1>';
                                $message->error = false;
                            }else{

                                $register->register();
                                header('Location: login');
                            }

                        }else{
                            $message->error = true;
                            echo '<h1 class="error">'.$message->errorMsg('Les mots de passe ne correspondent pas').'</h1>';
                            $message->error = false;
                        }
                    }else{
                        $message->error = true;
                        echo '<h1 class="error">'.$message->errorMsg('Le mot de passe est obligatoire').'</h1>';
                        $message->error = false;
                    }
                }else{
                    $message->error = true;
                    echo '<h1 class="error">'.$message->errorMsg('Le mot de passe est obligatoire').'</h1>';
                    $message->error = false;
                }
            }else{
                $message->error = true;
                echo '<h1 class="error">'.$message->errorMsg('L\'email est obligatoire').'</h1>';
                $message->error = false;
            }
        }else{
            $message->error = true;
            echo '<h1 class="error">'.$message->errorMsg('Le pseudo est obligatoire').'</h1>';
            $message->error = false;
        }


    }

