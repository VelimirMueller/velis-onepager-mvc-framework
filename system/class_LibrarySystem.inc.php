<?php

class LibrarySystem{

        public function loading_status($class_name, $class_function){

            if(file_exists($class_function.'/class_'.$class_name.$class_function.'.inc.php' )){
                echo '<br>'.$class_name.' loaded successfully!<br>';
                echo 'class_function is '.$class_function.'<br><br>';
            }else{
                echo 'critical_error';
            }
   
        }//End loading_status()


}//End Class

?>