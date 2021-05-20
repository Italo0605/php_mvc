<?php
    class GaleriaController extends Controller{
        public function index(){
            $dados = [
                'qt' => 15,
            ];
            $this->loadTemplate('Galeria', $dados);
        }
    }