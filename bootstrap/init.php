<?php
    /**
     * Star session if not alredy started
     */
    if (!isset($_SESSION)) session_start();

    //load environment variable
    require_once __DIR__ . '/../app/config/_env.php';

    //Instanciar la clase Database
    new \App\Classes\Database();

    require_once __DIR__ . '/../app/routing/routes.php';

    new \App\RouteDispatcher($router);

