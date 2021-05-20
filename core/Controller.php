<?php
    class Controller{
        public function loadView($viewName){
            require 'views/'.$viewName.'.php';
        }
    }
?>