<?php
include_once './vendor/autoload.php';

        $modulo = Url::getURL( 0 );
 
        if( $modulo == null )
            $modulo = "home";
 
        if( file_exists( "app/view/routes/".$modulo.".php" ) )
            require "app/view/routes/".$modulo.".php";
        else
            require "404.php";
