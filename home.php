<?php
require 'db.php';

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/static/css/style-homed.css">
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <div>
      <div class="main-container">
        <!-- навигация и верхний блок -->
        <div class="escape">
          <div class="escape__header header">
            <a href="home.php" class="escape__logo">
              <img src="/static/images/Escape..svg" alt="Escape.">
            </a>
            <div class="escape__nav">
              <a href="home" class="escape__link">Home</a>
              <a href="#" class="escape__link">Categories</a>
              <a href="#" class="escape__link">About</a>
              <a href="#" class="escape__link">Contact</a>
            </div>
          </div>
          <div class="escape__theme">
            <p class="escape__title">Let&apos;s do it together.</p>
            <p class="escape__subtitle">We travel the world in search of stories. Come along for the ride.</p>
            <button type="button" class="escape__button">View Latest Posts</button>
          </div>
        </div>  
        <!-- 2 навигация -->
        <div class="nav">
          <a href="#" class="nav__item">Nature</a>
          <a href="#" class="nav__item">Photography</a>
          <a href="#" class="nav__item">Relaxation</a>
          <a href="#" class="nav__item">Vacation</a>
          <a href="#" class="nav__item">Travel</a>
          <a href="#" class="nav__item">Adventure</a>
        </div>
        <!-- большой блок с картами, с падингами-->
        <div class="posts">

            <!-- большие карты и название отдела -->
            <div class="posts__big">

              <!-- название отдела -->
              <div class="post__title">
                  <p class="post__title_style">Featured Posts</p>
                  <div class="post__separator"></div>
              </div>

              <!-- большие карты -->
              <div class="post__featur">

                <?php
                  $db = createDBConnection();
                  getFeaturedPostsFromDB($db);
                  closeDBConnection($db);
                ?>
              </div>
            </div>

            <!-- маленькие карты и название отдела -->
            <div class="posts__small">

              <!-- название отдела -->
              <div class="post__title">
                <p class="post__title_style">Most Recent</p>
                <div class="post__separator"></div>
              </div>

              <!-- отдел с маленькими картами -->
              <div class="post__most">
                
                <?php
                  $db = createDBConnection();
                  getMostRecentPostsFromDB($db);
                  closeDBConnection($db);
                ?>
                
              </div>
            </div>
        </div>
      </div>
      
      <!-- подвал, разметка и задний фон -->
      <div class="footer">
        <!-- паддинги и блок с лого и навбвром -->
        <div class="footer__menu">
          <a href="home class="footer__logo">
            <img src="/static/images/Escape..svg" alt="Escape.">
          </a>
          <div class="footer__nav">
            <a href="home" class="footer__link">Home</a>
            <a href="#" class="footer__link">Categories</a>
            <a href="#" class="footer__link">About</a>
            <a href="#" class="footer__link">Contact</a>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>