<?php
require 'db.php';

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/static/css/style-home.css">
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
              <a href="home.php" class="escape__link">Home</a>
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
                  $posts = get_posts_all();
                  foreach ($posts as $post){
                    include 'post_big.php';
                  }
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
                
             
            
                <!-- 1я карта -->
                <div class="most-card">
                  <a href="#">                   
                    <!-- картинка -->  
                    <div class="most-card__image">
                      <img src="/static/images/balloons.svg" alt="balloons" class="most-card__image_style">
                    </div>                    
                    <!-- линия -->
                    <div class="most-card__separetion"></div>                   
                    <!-- название -->
                    <div class="most-card__theme theme">
                      <!-- заголовок стиль-->
                      <p class="theme__title">Still Standing Tall</p>
                      <!-- позаголовок стиль-->
                      <p class="theme__subtitle">Life begins at the end of your comfort zone.</p>
                    </div>
                  </a>
                  <a href="#">
                    <!-- линия под названием -->
                    <div class="most-card__separetion"></div>
                    <!-- автор и дата -->
                    <div class="most-card__author author">
                      <!-- автор -->
                      <div class="author__icon-name">
                        <!-- аватарка -->                
                        <img src="/static/images/img_1_187_b5ed31.jpeg" alt="avatar" class="author__icon">
                        <!-- имя и стиль -->
                        <p class="author__name">William Wong</p>
                      </div>
                      <!-- дата и стиль даты -->
                      <p class="author__date">9/25/2015</p>  
                    </div>
                  </a>
                </div>

                <!-- 2я карта -->
                <div class="most-card">
                  <a href="#">
                    <!-- картинка и линия под ней -->
                    <div class="most-card__image">
                      <!-- картинка -->  
                      <div class="card-container-image">
                        <img src="/static/images/bridge.svg" alt="bridge" class="most-card__image_style">
                      </div>
                      <!-- линия -->
                      <div class="most-card__separetion"></div>
                    </div>
                    <!-- название -->
                    <div class="most-card__theme theme">
                      <!-- заголовок стиль-->
                      <p class="theme__title">Sunny Side Up</p>
                      <!-- позаголовок стиль-->
                      <p class="theme__subtitle">No place is ever as bad as they tell you it’s going to be.</p>
                    </div>
                  </a>
                  <a href="#">
                    <!-- линия под названием -->
                    <div class="most-card__separetion"></div>
                    <!-- автор и дата -->
                    <div class="most-card__author author">
                      <!-- автор -->
                      <div class="author__icon-name">
                        <!-- аватарка -->
                        <div class="profile-card">
                          <img src="/static/images/img_1_224_7a4480.jpeg" alt="avatar" class="author__icon">
                        </div>
                        <!-- имя и стиль -->
                        <p class="author__name">Mat Vogels</p>
                      </div>
                      <!-- дата и стиль даты -->
                      <p class="author__date">9/25/2015</p>
                    </div>
                  </a>
                </div>

                <!-- 3я карта -->
                <div class="most-card">
                  <a href="#">
                    <!-- картинка и линия под ней -->
                    <div class="most-card__image">
                      <!-- картинка -->  
                      <div class="card-container-image">
                        <img src="/static/images/lake.svg" alt="lake" class="most-card__image_style">
                      </div>
                      <!-- линия -->
                      <div class="most-card__separetion"></div>
                    </div>
                    <!-- название -->
                    <div class="most-card__theme theme">
                      <!-- заголовок стиль-->
                      <p class="theme__title">Water Falls</p>
                      <!-- позаголовок стиль-->
                      <p class="theme__subtitle">We travel not to escape life, but for life not to escape us.</p>
                    </div>
                  </a>
                  <a href="#">
                    <!-- линия под названием -->
                    <div class="most-card__separetion"></div>
                    <!-- автор и дата -->
                    <div class="most-card__author author">
                      <!-- автор -->
                      <div class="author__icon-name">
                        <!-- аватарка -->
                        <div class="profile-card">
                          <img src="/static/images/img_1_224_7a4480.jpeg" alt="avatar" class="author__icon">
                        </div>
                        <!-- имя и стиль -->
                        <p class="author__name">Mat Vogels</p>
                      </div>
                      <!-- дата и стиль даты -->
                      <p class="author__date">9/25/2015</p>
                    </div>
                  </a>
                </div>

                <!-- 4я карта -->
                <div class="most-card">
                  <a href="#">
                    <!-- картинка и линия под ней -->
                    <div class="most-card__image">
                      <!-- картинка -->  
                      <div class="card-container-image">
                        <img src="/static/images/sea.svg" alt="sea" class="most-card__image_style">
                      </div>
                      <!-- линия -->
                      <div class="most-card__separetion"></div>
                    </div>
                    <!-- название -->
                    <div class="most-card__theme theme">
                      <!-- заголовок стиль-->
                      <p class="theme__title">Through the Mist</p>
                      <!-- позаголовок стиль-->
                      <p class="theme__subtitle">Travel makes you see what a tiny place you occupy in the world.</p>
                    </div>
                  </a>
                  <a href="#">
                    <!-- линия под названием -->
                    <div class="most-card__separetion"></div>
                    <!-- автор и дата -->
                    <div class="most-card__author author">
                      <!-- автор -->
                      <div class="author__icon-name">
                        <!-- аватарка -->
                        <div class="profile-card">
                          <img src="/static/images/img_1_187_b5ed31.jpeg" alt="avatar" class="author__icon">
                        </div>
                        <!-- имя и стиль -->
                        <p class="author__name">William Wong</p>
                      </div>
                      <!-- дата и стиль даты -->
                        <p class="author__date">9/25/2015</p>  
                    </div>
                  </a>
                </div>

                <!-- 5я карта -->
                <div class="most-card">
                  <a href="#">
                    <!-- картинка и линия под ней -->
                    <div class="most-card__image">
                      <!-- картинка -->  
                      <div class="card-container-image">
                        <img src="/static/images/power_lines.svg" alt="power lines" class="most-card__image_style">
                      </div>
                      <!-- линия -->
                      <div class="most-card__separetion"></div>
                    </div>
                    <!-- название -->
                    <div class="most-card__theme theme">
                      <!-- заголовок стиль-->
                      <p class="theme__title">Awaken Early</p>
                      <!-- позаголовок стиль-->
                      <p class="theme__subtitle">Not all those who wander are lost.</p>
                    </div>
                  </a>
                  <a href="#">
                    <!-- линия под названием -->
                    <div class="most-card__separetion"></div>
                    <!-- автор и дата -->
                    <div class="most-card__author author">
                      <!-- автор -->
                      <div class="author__icon-name">
                        <!-- аватарка -->
                        <div class="profile-card">
                          <img src="/static/images/img_1_224_7a4480.jpeg" alt="avatar" class="author__icon">
                        </div>
                        <!-- имя и стиль -->
                        <p class="author__name">Mat Vogels</p>
                      </div>
                      <!-- дата и стиль даты -->
                      <p class="author__date">9/25/2015</p>
                    </div>
                  </a>
                </div>

                <!-- 6я карта -->
                <div class="most-card">
                  <a href="#">
                    <!-- картинка и линия под ней -->
                    <div class="most-card__image">
                      <!-- картинка -->  
                      <div class="card-container-image">
                        <img src="/static/images/waterfall.svg" alt="waterfall" class="most-card__image_style">
                      </div>
                      <!-- линия -->
                      <div class="most-card__separetion"></div>
                    </div>
                    <!-- название -->
                    <div class="most-card__theme theme">
                      <!-- заголовок стиль-->
                      <p class="theme__title">Try it Always</p>
                      <!-- позаголовок стиль-->
                      <p class="theme__subtitle">The world is a book, and those who do not travel read only one page.</p>
                    </div>
                  </a>
                  <a href="#">
                    <!-- линия под названием -->
                    <div class="most-card__separetion"></div>
                    <!-- автор и дата -->
                    <div class="most-card__author author">
                      <!-- автор -->
                      <div class="author__icon-name">
                        <!-- аватарка -->
                        <div class="profile-card">
                          <img src="/static/images/img_1_224_7a4480.jpeg" alt="avatar" class="author__icon">
                        </div>
                        <!-- имя и стиль -->
                        <p class="author__name">Mat Vogels</p>
                      </div>
                      <!-- дата и стиль даты -->
                      <p class="author__date">9/25/2015</p>
                    </div>
                  </a>
                </div>
              </div>
            </div>
        </div>
      </div>
      
      <!-- подвал, разметка и задний фон -->
      <div class="footer">
        <!-- паддинги и блок с лого и навбвром -->
        <div class="footer__menu">
          <a href="home.html" class="footer__logo">
            <img src="/static/images/Escape..svg" alt="Escape.">
          </a>
          <div class="footer__nav">
            <a href="#" class="footer__link">Home</a>
            <a href="#" class="footer__link">Categories</a>
            <a href="#" class="footer__link">About</a>
            <a href="#" class="footer__link">Contact</a>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>