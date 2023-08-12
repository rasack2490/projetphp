<?php

if(isset($_POST['deconnect'])){
    deconnexion();
    header('Location: login');
}