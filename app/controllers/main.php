<?php

/**
 * Description of main
 *
 * @author Elmira
 */
class main extends controller {

    //put your code here

    public function index() {
        $data['text'] = "Hello Pet";
        load::view("main/index", $data);
    }

}
