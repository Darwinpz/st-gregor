<?php

    class Recetas extends Controlador{
        
        public function __construct(){

        }

        public function index(){
        
            $cabecera = [
                'item' => 'recetas'
            ];

            $this->vista("pages/recetas",$cabecera);

        }

    }


?>