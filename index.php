<?php
require_once "util.php";
require_once "config.php";
header("Access-Control-Allow-Origin: {$CORS}");
if(isset($_GET["source"]) && !empty($_GET["source"]) && vaild($_GET["source"])){
    if($UA === null) $UA = "ImageProxy_v1.0.0";
    $image = CurlGet($_GET["source"], $UA);
    if($image[1]["http_code"] === 200){
        $mime = get_mime_type($image[0]);
        header("Content-Type: {$mime}");
        echo $image[0];
    }else{
        if(array_search($image[1]["http_code"], $ERROR_RESPONSE) !== false){
            err_image($image[1]["http_code"], $EPATH);
        }else{
            err_image(500, $EPATH);
        }
    }
}else{
    err_image(400, $EPATH);
}