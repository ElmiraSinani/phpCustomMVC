<?php

spl_autoload_register( function($class){
    
    $corePath = $GLOBALS['config']['path']['core'];
    $appPath = $GLOBALS['config']['path']['app'];
    $classFile = '';
    if(file_exists("{$corePath}abstracts/{$class}.php")){
        $classFile = "{$corePath}abstracts/{$class}.php";
    }else if(file_exists("{$corePath}classes/{$class}.php")){
        $classFile = "{$corePath}classes/{$class}.php";
    }else if(file_exists("{$corePath}interfaces/{$class}.php")){
        $classFile = "{$corePath}interfaces/{$class}.php";
    }else if(file_exists("{$appPath}controllers/{$class}.php")){
        $classFile = "{$appPath}controllers/{$class}.php";
    }else if(file_exists("{$appPath}libs/{$class}.php")){
        $classFile = "{$appPath}libs/{$class}.php";
    }else if(file_exists("{$appPath}models/{$class}.php")){
        $classFile = "{$appPath}models/{$class}.php";
    }else if(file_exists("{$appPath}interfaces/{$class}.php")){
        $classFile = "{$appPath}interfaces/{$class}.php";
    }else if(file_exists("{$appPath}abstracts/{$class}.php")){
        $classFile = "{$appPath}abstracts/{$class}.php";
    }
    
    if($classFile != ''){
        require_once($classFile);
    }
    
});