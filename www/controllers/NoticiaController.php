<?php
    class NoticiaController extends Controller{
        public function index(){
            $dados = [
                'qt' => 15,
            ];
            $this->loadTemplate('Galeria', $dados);
        }
        public function abrir($titulo){
            echo "Titulo da noticia:".$titulo."<br>";
           
        }
    }