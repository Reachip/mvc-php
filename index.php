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
    $configuration::$debugging = $_ENV["DEBUG"];
    $configuration::$db_name = $_ENV["DBNAME"];
    $configuration::$host = $_ENV["HOST"];
    $configuration::$password = $_ENV["PASSWORD"];
    $configuration::$username = $_ENV["USERNAME"];
    $configuration::$port = $_ENV["PORT"];

    $db = new Database($configuration);
    $model = new IndexModel($db);

    $template = new Template("templates/");
    $view = new IndexView($template);

    $controller = new IndexController($model, $view);
    
    $router = new Router();
    $router->add_route(HTTPMethod::GET, "/", $controller);
    $router->serv(LocalURI::get_uri());
?>
