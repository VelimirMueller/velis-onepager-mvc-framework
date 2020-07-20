<?php

class HomeController extends LibrarySystem{
    private $r;

    public function __construct(){
        $this->r = $_REQUEST;

        switch(key($this->r)){
            case 'home' : HomeView::setLayout('home/home');
                break;
            
            case 'about' : HomeView::setLayout('home/about');
                break;
            
            case 'contact' : HomeView::setLayout('home/contact');
                break;

            case 'imp' : HomeView::setLayout('home/imprint');
                break;

            case 'dsgvo' : HomeView::setLayout('home/dsgvo');
                break;
            
            //neue Home Seiten nach gleichem Schema einbinden

            case 'dsgvo' : HomeView::setLayout('home/content');
                break;

            default: HomeView::setLayout('home/home');
                break;
        
        }
    
    
    }

}
?>