<?php
    class HomeController extends Controller{
        public function index(){
            $dados = [
                'quantidade' => 5,
                'nome' => 'vinícius'
            ];
            $this->loadTemplate('Home', $dados);
        }
    }