<?php
    /*here is your main page */

    namespace App\Controllers;
    use App\Providers\View;
    class HomeController{
        public $view;
        public function __construct()
        {
           $view = new View();
           $this->view = $view->render("public/resources/index.php");
        }

        public function store()
        {
            dd('entrou');
        }
    }

?>