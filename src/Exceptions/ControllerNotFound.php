<?php
    namespace App\Exceptions;

    use Exception;

    class ControllerNotFoundException extends Exception{
        public $view;
        public function __construct()
        {
            
        }
    }

?>