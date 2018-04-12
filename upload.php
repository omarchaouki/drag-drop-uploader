<?php 
session_start();
if (isset($_FILES['choosefile'])) {
    //file info
    $fileInfo = $_FILES['choosefile'];
    //file Extentsion
    $fileExtension = explode('.',
                     $fileInfo['name']
                 );
    //file name
    $fileName = uniqid('upload',true).'.'.
                end($fileExtension);
    $destination = 'uploads/'.
    '/'.$fileName;
    if(move_uploaded_file(
        $fileInfo['tmp_name'],
        $destination
        )) {
        echo "Uploaded successfully";
        print_r($_SESSION);
    }else{
        print_r($fileInfo);
    }
}



