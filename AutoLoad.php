<?php

spl_autoload_register( function ( string $className ) {
    $className = str_replace( 'ClassFly',
        '',
        $className );
    $className = str_replace( '\\',
        DIRECTORY_SEPARATOR,
        $className );
    include_once __DIR__
        .DIRECTORY_SEPARATOR
        .'ClassFly'
        .$className
        .'.php';
} );
?>

