<?php

class HomeView extends LibrarySystem{

    public static function setLayout($template){
        
        $header = 'layout/header.php';
        $footer = 'layout/footer.php';

        require_once($header);
        
        HomeView::setContent($template);

        require_once($footer);
        //End setLayout()
        //Diese Funktion lädt automatisch header und footer
    }

    public static function setContent($template){
        if(file_exists('layout/'.$template.'.php')){
            require_once('layout/'.$template.'.php');
        }else{
            echo 'CONTENT NOT FOUND !';
        }
    }//End setContent
    //Diese Funktion lädt per paramater automatisch den dynamischen Content
  

}



?>