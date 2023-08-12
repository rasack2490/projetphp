<?php

    class Message{

        public $success;
        public $error;
        public $successM;
        public $errorM;

        public function __construct($success, $error){
            $this->success = $success;
            $this->error = $error;
        }

        public function successMsg($successM){
            $this->errorM = $successM;
            // return $this->successM;
        }
        public function errorMsg($errorM){
            $this->errorM = $errorM;
            // return $this->errorM;
        }

    }