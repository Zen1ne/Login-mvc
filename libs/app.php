<?php

class App{
    function _construct(){
        $url=isset($_GET['url'])? $_GET['url']:null;
        $url=rtrim($url,'/');
        $url=explode('/',$url);

        if(empty($url[0])){
            $archivoController='controllers/login.php';
            require_once $archivoController;
            $controller = new Login();
            $controller ->loadModel('login');
            $controller->render();
            return false;
        }

    }


}



?>