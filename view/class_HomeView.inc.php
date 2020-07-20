<?php

class HomeView extends LibrarySystem{

    public static function setLayout($template){
        
        $header = 'layout/header.html';
        $footer = 'layout/footer.html';

        require_once($header);
        
        HomeView::setContent($template);

        require_once($footer);
        //End setLayout()
        //Diese Funktion lädt automatisch header und footer
    }

    public static function setContent($template){
        if(file_exists('layout/'.$template.'.html')){
            require_once('layout/'.$template.'.html');
        }else{
            echo 'CONTENT NOT FOUND !';
        }
    }//End setContent
    //Diese Funktion lädt per paramater automatisch den dynamischen Content
  

}



?>