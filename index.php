<?php define('_OK_INC',1);

// error handling code 
error_reporting(E_ALL^E_STRICT);
ini_set("display_errors", 0);
ini_set("log_errors", 1);
ini_set("error_log", dirname($_SERVER['DOCUMENT_ROOT'])."/path/to.log");

$req = "/home";

// incoming requests
if((isset($_SERVER['REQUEST_URI'])) && (preg_match('/^\/[A-Za-z0-9-_\/]+$/',($_SERVER['REQUEST_URI'])))) {
    $req = rtrim($_SERVER['REQUEST_URI'],"/");

    elseif(!file_exists($_SERVER['DOCUMENT_ROOT'].'/page'.$req.'.php')) {
        $req = "/home";
    }
}

// adds data file array with sensible default meta tags

@include_once(realpath(__DIR__)).'/page/data'.$req.'.php';
if(!isset($meta)) {
    $meta = array(
        "keywd" => "Waycool3D,3D printing,custom phone case,print,what you want",
        "descr" => "Waycool3D website and store.",
        "title" => "Waycool3D"
    );
}

require_once(realpath(__DIR__)).'/inc/header.php';

require_once(realpath(__DIR__)).'/page'.$req.'.php'; // actual page content
?>
