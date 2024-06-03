<?php
const HOST = 'localhost';
const USERNAME = 'root';
const PASSWORD = '';
const DATABASE = 'blog';



  $db = new mysqli(HOST, USERNAME, PASSWORD, DATABASE);
//  $HOST = 'localhost';
//  $USERNAME = 'root';
//  $PASSWORD = '';
//  $DATABASE = 'blog';

// $db = new PDO("mysql:host=$HOST; dbname=$DATABASE", $USERNAME, $PASSWORD);

function get_posts_all() {
  global $db;
  $posts = $db->query("SELECT * FROM posts");
  return $posts;
}

function get_post_by_id($id) {
  global $db;
  
  $posts = $db->query("SELECT * FROM posts WHERE id = $id");
  foreach ($posts as $post) {
    return $post;
  }
  
}

function get_posts_feat() {
  global $db;
  $posts = $db->query("SELECT * FROM posts WHERE featured=1");
  return $posts;
}
function getFeaturedPostsFromDB(mysqli $conn): void {
  $sql = "SELECT * FROM post WHERE featured=1";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      include 'post_big.php';
    }
  } else {
    echo "0 results";
  }
}

function getMostRecentPostsFromDB(mysqli $conn): void {
  $sql = "SELECT * FROM post WHERE featured=0";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      include 'post-preview-second.php';
    }
  } else {
    echo "0 results";
  }
}
?>
