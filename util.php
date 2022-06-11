<?php
function CurlGet($URL, $UserAgent){
    $ch = curl_init();
    curl_setopt_array($ch, [
        CURLOPT_URL => $URL,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_USERAGENT => $UserAgent
    ]);
    $result = curl_exec($ch);
    $info = curl_getinfo($ch);
    curl_close($ch);
    return [$result, $info];
}

function get_mime_type($file){
    $finfo = new finfo(FILEINFO_MIME);
    $mime_type = $finfo->buffer($file);
    return $mime_type;
}

function vaild($text){
    return preg_match("/https?(:\/\/[\w\/:%#\$&\?\(\)~\.=\+\-]+)/", $text);
}

function err_image($code, $BP){
    http_response_code($code);
    if(!file_exists($BP."{$code}.png")) exit;
    $mime = get_mime_type($BP."${code}.png");
    header("Content-Type: {$mime}");
    readfile($BP."{$code}.png");
    return;
}