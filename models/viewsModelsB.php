<?php
class EnlacesModelsB{

    public function enlacesModels($enlaces){

        if($enlaces == "inicio" ||
            $enlaces == "registrarAsociado" ||
            
            $enlaces == "home" ||
            $enlaces == "ingreso" ||
            $enlaces == "productos" ||
            $enlaces == "servicios" ||
            $enlaces == "slide" ||
            $enlaces == "articulos" ||
            $enlaces == "galeria" ||
            $enlaces == "clientes" ||
            $enlaces == "videos" ||
            $enlaces == "suscriptores" ||
            $enlaces == "mensajes" ||
            $enlaces == "perfil" ||
            $enlaces == "salir"){

            $module = "views/modules/".$enlaces.".php";
        }

        else if($enlaces == "index"){
            $module = "views/modules/ingreso.php";
        }

        else{
            $module = false;
            //$module = "views/modules/ingreso.php";
        }

        return $module;

    }


}
