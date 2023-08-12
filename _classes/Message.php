<?php

    class Message{

        public $success;
        public $error;

        public function __construct($success, $error){
            $this->success = $success;
            $this->error = $error;
        }

        public function successMsg($successM){
            
            return $successM;
        }
        public function errorMsg($errorM){
            return $errorM;
        }

    }