<?php

$fileName = 'example.txt';
$fileData = 'Some.txt';
$rights = 'w';

if (filePutContents($fileName, $fileData, $rights)){
    echo 'Save complete';
} else{
    echo 'Save failed';
}


/**
 * Put data to some file with some right
 *
 * @param string $fileName
 * @param string $fileData
 * @param string(optional) $rights
 *
 * @return bool
 */
function filePutContents($fileName, $fileData, $rights = 'w')
{
    $fp = fopen($fileName, $rights);

    fwrite($fp, $fileData);

    fclose($fp);

    return true;
}


?>