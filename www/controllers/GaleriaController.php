<?php
    class GaleriaController extends Controller{
        public function index(){
            $dados = [
                'qt' => 15,
            ];
            $this->loadTemplate('Galeria', $dados);
        }
        public function abrir($id, $titulo){
            echo "Id:".$id."<br>";
            echo "Titulo:".$titulo."<br>";
        }
    }