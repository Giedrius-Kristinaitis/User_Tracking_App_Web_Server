<?php

// define required http headers
header('Access-Control-Allow-Origin: *');

// define the directory of app update file
define('UPDATE_DIRECTORY', __DIR__ . '/update/');

// scan the update directory for files
$files = scandir(UPDATE_DIRECTORY);

// look for .exe files
if(count($files) > 0){
    foreach($files as $file){
        if(strpos($file, '.exe') !== false){
            echo $file;
            die;
        }
    }
}

// if this is reached then no update file was found, write 'false' to the response
echo 'false';

?>