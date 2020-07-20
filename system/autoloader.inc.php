<?php
//php/autoloader.inc.php


spl_autoload_register(function($class_name) {

    //funktionsvariable; array in foreach loop um alle classen automatisch zu laden,
    // wenn man neue Ordner hinzufügen möchte, muss man einen Eintrag im array erweitern
    //und die Klassen werden automatisch in den autoloader geladen.

    $folderstructure = array('system','helpers','model','view', 'controller');

    foreach($folderstructure as $folder){
        if(file_exists($folder.'/class_'.$class_name.'.inc.php' )){
            require_once($folder."/class_".$class_name.".inc.php");
    }
}
    
    
});
?>
