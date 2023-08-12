<?php
    $db = new PDO('mysql:host='.DATABASE_HOST.';dbname='.DATABASE_NAME.';charset=utf8', DATABASE_USER, DATABASE_PASSWORD, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));



