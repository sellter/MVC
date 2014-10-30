<?php

    function views($plantilla, $variables = array()){
        extract($variables);
        require('views/'.$plantilla.'.tpl.php');
    }

    function controllers($nombre){
        if(empty($nombre))
              $nombre = 'home';

        $archivo = "controllers/$nombre.php";

        if(file_exists($archivo))
            require($archivo);
        else
            echo"Error archivo no encontrado";
    }
	?>
