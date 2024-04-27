<?php
require 'db.php';
?>
<?php
require 'big_posts.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta type="description" content="Blog about The-Road-Ahead">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $post['title'] ?></title>
    <link href="/static/css/reset.css" rel="stylesheet">
    <link href="/static/css/style.css" rel="stylesheet">
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
        <img class="intro__img" src="<?= $post['image_url'] ?>" alt="Northern lights">
      </section>
      <section class="content">
        <div class="wrapper">     
          <p class="content__text"><?= $post['content'] ?></p>
        </div>
      </section>
    </main>
    <footer class="footer">
      <div class="wrapper">
        <div class="footer__wrapper">
          <a href="index.html" class="footer__logo">
            <img class="footer__img" src="/static/images/Escape.footer.svg" alt="logo">
          </a>
             
          <nav class="footer__nav">
            <ul class="footer__list">
              <li class="footer__item">
                <a href="#!" class="footer__link">home</a>
              </li>
              <li class="footer__item">
                <a href="#!" class="footer__link">categories</a>
              </li>
              <li class="footer__item">
                <a href="#!" class="footer__link">about</a>
              </li>
              <li class="footer__item">
                <a href="#!" class="footer__link">contact</a>
              </li>
            </ul>
          </nav> 
        </div>
      </div>
    </footer>   
  </body>
</html>
