<?php
spl_autoload_register(function($className) {
	$filename = str_replace("\\", '/', $className) . ".php";
        if (file_exists($filename)) {
            include($filename);
            if (class_exists($className)) {		
                echo "CARGANDO: ".$className;	
                return TRUE;
            }
		}
        return FALSE;
});

