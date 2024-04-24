<?php 
     foreach ($posts as $post) {
    //    include 'post_preview.php';
       echo $post['title'];
     }
    ?>


<!-- 1я карта -->
                <!-- разметка блока -->
                <a href="The-Road-Ahead.html" class="adventure-card">
                  <!-- задний фон -->
                  <img src="static/images/div_1dq5qdd_2b7f09.jpeg" alt="" class="adventure-card-img">
                  <!-- блок с текстовой информацией -->
                  <div class="quote-card">
                    <!-- teg -->
                    <div class="visible1">
                      <div class="teg">Category</div>
                    </div>                       
                    <!-- заголовок и подзаголовок -->
                    <p class="article-title"><?= $post['title'] ?></p>
                    <p class="card-subtitle"><?= $post['subtitle'] ?></p>
                    <!-- автрор и дата -->
                    <div class="article-container">
                      <object data="hhj/dhh">  
                        <!-- автор -->
                        <a href="#" class="author-container">
                          <div class="profile-card">
                            <img src="static/images/img_1_224_7a4480.jpeg" alt="avatar" class="rounded-image-avatar">
                          </div>
                          <p class="author-style"><?= $post['author'] ?></p>
                        </a>
                      </object>
                      <!-- дата -->
                      <p class="meta-text">September 25, 2015</p>
                    </div>
                  </div>
                </a>