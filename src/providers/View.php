<?php
    /*here is your main page */
    namespace App\Providers;
    class View{
        public function render(String $filename,$data = [])
        {
            extract($data);
            require_once($filename);
            return $this;
        }
        public function Gethtml()
        {
           $var =  htmlspecialchars(ob_get_contents());
           return $var;
        }
    }

?>