<?php
/**
 * @author : Gaellan
 * @link : https://github.com/Gaellan
 */

require "vendor/autoload.php";

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$router = new Router();
$router->handleRequest($_GET);