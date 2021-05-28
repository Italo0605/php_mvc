<?php
    class NotFoundController extends Controller{
        public function index(){
            $this->loadTemplate('404', array());
        }
    }