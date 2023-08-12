<?php

    function str_secur($string){
        return trim(htmlspecialchars($string));
    }

    function debug($var){
        echo '<pre>';
        print_r($var);
        echo '</pre>';
    }