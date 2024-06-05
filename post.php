<?php 
include 'db.php' ;
if(empty($_GET['id'])) 
{
  header("Location: home");
  exit;
}
$post = get_post_by_id($_GET['id']);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    
    <meta charset="UTF-8">
    <meta type="description" content="Blog about The-Road-Ahead">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $post['title'] ?></title>
    <link href="/static/css/reset.css" rel="stylesheet">
    <link href="/static/css/style-post.css" rel="stylesheet">
  </head>
  <body>
    <header class="header">      
      <div class="wrapper">
        <div class="header__wrapper">
          <a href="home" class="header__logo">
            <img class="header__img" src="/static/images/Escape.logo.svg" alt="logo">
          </a>
             
          <nav class="header__nav">
            <ul class="header__list">
              <li class="header__item">
                <a href="home" class="header__link">home</a>
              </li>
              <li class="header__item">
                <a href="#!" class="header__link">categories</a>
              </li>
              <li class="header__item">
                <a href="#!" class="header__link">about</a>
              </li>
              <li class="header__item">
                <a href="#!" class="header__link">contact</a>
              </li>
            </ul>
          </nav> 
        </div>
      </div>
      
    </header>
    <main class="main">
      <section class="intro">
          <h1 class="intro__title">
            <?= $post['title'] ?>
          </h1>
          <p class="intro__subtitle">
            <?= $post['subtitle'] ?>
          </p>
        </div>
        <img class="intro__img" src="<?= $post['image_url'] ?>" alt="img">
      </section>
      <section class="content">
        <div class="wrapper">     
          <p class="content__text"><?= $post['content'] ?></p>
        </div>
      </section>
    </main>
     
    
    <footer class="footer">
      <!-- паддинги и блок с лого и навбвром -->
      <div class="footer__menu">
        <a href="home" class="footer__logo">
          <img src="/static/images/Escape..svg" alt="Escape.">
        </a>
        <div class="footer__nav">
          <a href="home" class="footer__link">Home</a>
          <a href="#" class="footer__link">Categories</a>
          <a href="#" class="footer__link">About</a>
          <a href="#" class="footer__link">Contact</a>
        </div>
      </div>
    </footer>
  </body>
</html>
