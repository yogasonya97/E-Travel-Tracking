<?php

class View {

    function __construct() {
        
    }

    public function render($name, $noInclude = false) {
        
        // if (Session::get('privilege') != 'Admin' && Session::get('privilege') != 'Operator' && Session::get('privilege') != 'Conduct') {
        //    require 'views/header.php';
        //     require 'views/' . $name . '.php';
        //     require 'views/footer.php';
        // } else { 
            require 'views/' . $name . '.php';
            
            
            
        // }
    }

}

?>