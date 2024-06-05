<?php


function saveImage(string $imageBase64, string $path, string $name): string
{
    $imageBase64Array = explode(';base64,', $imageBase64);
    $imgExtention = str_replace('data:image/', '', $imageBase64Array[0]);
    $imageDecoded = base64_decode($imageBase64Array[1]);
    $file_dir = $path . $name . ".{$imgExtention}";
    $file = fopen($file_dir, 'wb');
    if ($file) {
        fwrite($file, $imageDecoded);
    } else {
        echo "\nerror while saving file";
    }
    fclose($file);
    return $name . ".{$imgExtention}";
}

$body = json_decode(file_get_contents("php://input"), true);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($body) {
        echo $body['a'];
    } else {
       echo "something's going wrong";
       http_response_code(500);
    }
}
?>