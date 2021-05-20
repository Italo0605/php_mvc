<?php
    class HomeController extends Controller{
        public function index(){
            $anuncios = new Anuncios();
            $usuarios = new Usuarios();

            $dados = [
                'quantidade' => $anuncios->getQuantidade(),
                'nome' => $usuarios->getUser()
            ];
            $this->loadTemplate('Home', $dados);
        }
    }