<?php
//Separa functions.php em arquivos diferentes
    $roots_includes = array(
        '/functions/geral.php', //Scripts used in various files and sections.
    );

//Check if all files are included.
    foreach($roots_includes as $file){
        if(!$filepath = locate_template($file)) {
            trigger_error($file , E_USER_ERROR);    //Error message and stop execution with E_USER_ERROR
        }
        require_once ($filepath);
    }
    unset($file, $filepath);    //Reset the variables

?>