<?php
    error_reporting(E_ALL);
    ini_set('display_errors', '1');

    require_once('controllers/indexController.php');
    require_once('models/indexModel.php');
    require_once('views/indexView.php');
    require_once('configuration.php');
    require_once('router.php');
    require_once('url.php');
    
    
    $configuration = new Configuration();
    $configuration::$debugging = true;
    $configuration::$db_name = 'test';
    $configuration::$host = 'localhost';
    $configuration::$password = 'root';
    $configuration::$username = 'root';
    $configuration::$port = '8080';

    $db = new Database($configuration);
    $model = new IndexModel($db);
    $template = new Template("templates/");
    $view = new IndexView($model, $template);
    $controller = new IndexController($model, $view);
    
    $router = new Router();
    $router->add_route(HTTPMethod::GET, "/", $controller);
    $router->serv(LocalURI::get_uri());
?>
