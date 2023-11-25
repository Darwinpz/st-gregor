<?php

    class Instalaciones extends Controlador{
        
        public function __construct(){

        }

        public function index(){
        
            $cabecera = [
                'item' => 'instalaciones'
            ];

            $this->vista("pages/instalaciones",$cabecera);

        }

    }


?>