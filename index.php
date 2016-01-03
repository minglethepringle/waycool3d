<?php define('_OK_INC',1);

// errors
error_reporting(E_ALL^E_STRICT);
ini_set("display_errors", 1);
ini_set("log_errors", 1);
ini_set("error_log", dirname($_SERVER['DOCUMENT_ROOT'])."/_log_files/waycool3d_phperrors.log");

// requests
$req = "/home";
if((isset($_SERVER['REQUEST_URI'])) && (preg_match('/^\/[A-Za-z0-9-_\/]+$/',($_SERVER['REQUEST_URI'])))) {
    $req = rtrim($_SERVER['REQUEST_URI'],"/");
var_dump($req);die(meh);    
    if(!file_exists($_SERVER['DOCUMENT_ROOT'].'./pages'.$req.'.php')) {
        $req = "/home";
    }
}
// metadata
@include_once(realpath(__DIR__)).'./pages/data'.$req.'.php';
if(!isset($meta)) {
    $meta = array(
        "keywd" => "Waycool3D,3D printing,custom phone case,print,what you want",
        "descr" => "Waycool3D website and store.",
        "title" => "Waycool3D"
    );
}

require_once(realpath(__DIR__)).'/inc/header.php';
require_once(realpath(__DIR__)).'/inc/nav.php';
require_once(realpath(__DIR__)).'/pages/'.$req.'.php'; // actual page content
require_once(realpath(__DIR__)).'/inc/footer.php';
?>
