<?php
    namespace App\Providers;
    use App\Exceptions\ControllerNotFound;
    use App\Controllers\HomeController;
    
    class Kernel{
        public $controller;
        public function __construct()
        {
           $urlArray =  self::getUrl();
           if(!is_array($urlArray)){
              $this->controller =  new HomeController();
           }else{
              $controller =  $urlArray[0];
              try{
                $controller = 'App'.DIRECTORY_SEPARATOR.'Controllers'.DIRECTORY_SEPARATOR.ucfirst($controller).'Controller';
                $this->controller = new $controller();
                unset($urlArray[0]);
                $method = isset($urlArray[1]);
                if($method){
                   $methodName = $urlArray[1];
                   unset($urlArray[1]);
                   if(method_exists($this->controller,$methodName)){
                      call_user_func_array(array($this->controller, $methodName),$urlArray);
                   }
                }
              }catch(ControllerNotFound $e){
                 throw new Exception("controller not found");
              }
           }
        }
        public static function getUrl()
        {
          $url =  isset($_GET['url']) ?  explode('/',$_GET['url']) : "/";
          return $url;
        }
    }

?>