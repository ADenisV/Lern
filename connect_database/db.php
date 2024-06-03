<?php

 $HOST = 'localhost';
 $USERNAME = 'root';
 $PASSWORD = '';
 $DATABASE = 'blog';

$db = new PDO("mysql:host=$HOST; dbname=$DATABASE", $USERNAME, $PASSWORD);

function get_posts_all() {
  global $db;
  $posts = $db->query("SELECT * FROM post");
  return $posts;
}

function get_post_by_id($id) {
  global $db;
  $posts = $db->query("SELECT * FROM post WHERE id = $id");
  foreach ($posts as $posting) {
    return $posting;
  }
}


?>
