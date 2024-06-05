<?php
const HOST = 'localhost';
const USERNAME = 'root';
const PASSWORD = '';
const DATABASE = 'blog';
function createDBConnection(): mysqli {
  $db = new mysqli(HOST, USERNAME, PASSWORD, DATABASE);
  if ($db->connect_error) {
    echo "Connection failed: " . $db->connect_error;
  }
  return $db;
}
function closeDBConnection(mysqli $db): void {
  $db->close();
}

function getFeaturedPostsFromDB(mysqli $db): void
  {
    $sql = "SELECT * FROM posts WHERE featured=1";
    $result = $db->query($sql);
    if ($result->num_rows > 0) {
      while ($post = $result->fetch_assoc()) {
        include 'post_big.php';
      }
    } else {
      echo "0 results";
    }
}

function get_posts_all() {
  global $db;
  $posts = $db->query("SELECT * FROM posts");
  return $posts;
}

function get_post_by_id($id) {
  $db = new mysqli(HOST, USERNAME, PASSWORD, DATABASE);
  $posts = $db->query("SELECT * FROM posts WHERE id = $id");
  foreach ($posts as $post) {
    return $post;
  }
  closeDBConnection($db);
}








function getMostRecentPostsFromDB(mysqli $db): void {
  $sql = "SELECT * FROM posts WHERE featured=0";
  $result = $db->query($sql);
  if ($result->num_rows > 0) {
    while ($post = $result->fetch_assoc()) {
      include 'post_small.php';
    }
  } else {
    echo "0 results";
  }
}
?>
