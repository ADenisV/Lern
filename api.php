<?php
include 'db.php';
$db = createDBConnection();
function saveFile(string $file, string $data): void {
    $myFile = fopen($file, 'w');
    if ($myFile) {
      $result = fwrite($myFile, $data);
      if ($result) {
        echo 'Данные успешно сохранены в файл <br>';
      } else {
        echo 'Произошла ошибка при сохранении данных в файл <br>';
      }
      fclose($myFile);
    } else {
      echo 'Произошла ошибка при открытии файла <br>';
    }
  }
function saveImage(string $imageBase64) {
  // разделяем строку в массиве на 
    // [
    // 'data:image/jpeg',
    // 'iVBORw0KGgoAAAANSUhEUgAA...'
    // ];
  $imageBase64Array = explode(';base64,', $imageBase64);

  //   вытаскиваем расшиерние файла  
    //   заменяя подстроку 'data:image/' на пустую строку 
    //   в значении 'data:image/jpeg', что дает нам: 'jpeg'
  $imgExtention = str_replace('data:image/', '', $imageBase64Array[0]);

  // декодирование из base64 обратно
  $imageDecoded = base64_decode($imageBase64Array[1]);
  $GLOBALS['path'] = "static/images/image.{$imgExtention}";
  saveFile("static/images/image.{$imgExtention}", $imageDecoded);
}  
function getPostJsonAsArray(string $dataAsJson): array {
$dataAsArray = json_decode($dataAsJson, true);
if (!$dataAsArray) {
    echo 'Не удалось преобразовать JSON в массив! <br>';
    return [];
}
return $dataAsArray;
}

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    echo 'api error </br>';
    $method = $_SERVER['REQUEST_METHOD'];
    echo 'Method: ' . $method . '</br>';
    die;
  }

$dataAsJson = file_get_contents("php://input");
if ($dataAsJson) {
    $GLOBALS['dataAsArray'] = getPostJsonAsArray($dataAsJson);
    $dataAsArray = getPostJsonAsArray($dataAsJson);
    if ($dataAsArray['image_url']) {
      saveImage($dataAsArray['image_url']);
    }
  }

$title = $dataAsArray["title"];
$subtitle = $dataAsArray["subtitle"];
$content = $dataAsArray["content"];
$author = $dataAsArray["author"];
$author_url = $dataAsArray["author_url"];
$publish_date = $dataAsArray["publish_date"];
$image_url = $path;
$featured = $dataAsArray["featured"] ? 1 : 0;

$query = $db->query("INSERT INTO posts (
    id, 
    title, 
    subtitle, 
    content, 
    author, 
    author_url, 
    publish_date, 
    image_url, 
    featured
    ) 
    VALUES ( NULL, '$title', '$subtitle', '$content', '$author', '$author_url', '$publish_date', '$image_url', '$featured')
    ") ;
?>

