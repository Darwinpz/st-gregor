<?php

    class Tratamiento extends Controlador{
        
        public function __construct(){

        }

        public function index(){
        
            $cabecera = [
                'item' => 'tratamiento'
            ];

            $this->vista("pages/tratamiento",$cabecera);

        }

    }


?>