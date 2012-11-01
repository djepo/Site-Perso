<?php
//Fonction d'override des magic quotes
// !!!! DOIT ABSOLUMENT RESTER ICI EN TOUT DEBUT DE SCRIPT !!!!!!
//
function stripslashes_r($var) // Fonction qui supprime l'effet des magic quotes
{
        if(is_array($var)) // Si la variable passée en argument est un array, on appelle la fonction stripslashes_r dessus
        {
                return array_map('stripslashes_r', $var);
        }
        else // Sinon, un simple stripslashes suffit
        {
                return stripslashes($var);
        }
}
 
if(get_magic_quotes_gpc()) // Si les magic quotes sont activés, on les désactive avec notre super fonction ! ;)
{
   $_GET = stripslashes_r($_GET);
   $_POST = stripslashes_r($_POST);
   $_COOKIE = stripslashes_r($_COOKIE);
}
//Fin d'override des magic quotes

use Symfony\Component\HttpFoundation\Request;

// If you don't want to setup permissions the proper way, just uncomment the following PHP line
// read http://symfony.com/doc/current/book/installation.html#configuration-and-setup for more information
//umask(0000);

// This check prevents access to debug front controllers that are deployed by accident to production servers.
// Feel free to remove this, extend it, or make something more sophisticated.
if (isset($_SERVER['HTTP_CLIENT_IP'])
    || isset($_SERVER['HTTP_X_FORWARDED_FOR'])
    || !in_array(@$_SERVER['REMOTE_ADDR'], array(
        '127.0.0.1',
        '::1',
    ))
) {
    header('HTTP/1.0 403 Forbidden');
    exit('You are not allowed to access this file. Check '.basename(__FILE__).' for more information.');
}

$loader = require_once __DIR__.'/../app/bootstrap.php.cache';
require_once __DIR__.'/../app/AppKernel.php';

$kernel = new AppKernel('dev', true);
$kernel->loadClassCache();
$request = Request::createFromGlobals();
$response = $kernel->handle($request);
$response->send();
$kernel->terminate($request, $response);
