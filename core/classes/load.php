<?php

class load{
    
    static function view($viewFile, $viewVars = array() ){
        extract($viewVars);
        $viewFileCeck = explode('.', $viewFile);
        if(!isset($viewFileCeck[1])){
            $viewFile .= ".php";
        }
        $viewFile = str_replace('::', '/', $viewFile);
        require_once $GLOBALS['config']['path']['app']."views/{$viewFile}";
    }
    
    
}

