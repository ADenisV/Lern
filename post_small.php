<div class="most-card">
  <a href="/post?id=<?= $post['id'] ?>">                   
  <!-- картинка -->  
  <div class="most-card__image">
    <img src="<?= $post['image_url'] ?>" alt="balloons" class="most-card__image_style">
  </div>                    
  <!-- линия -->
  <div class="most-card__separetion"></div>                   
  <!-- название -->
  <div class="most-card__theme theme">
    <!-- заголовок стиль-->
    <p class="theme__title"><?= $post['title'] ?></p>
    <!-- позаголовок стиль-->
    <p class="theme__subtitle"><?= $post['subtitle'] ?></p>
  </div>
  <!-- линия под названием -->
  <div class="most-card__separetion"></div>
  <!-- автор и дата -->
  <div class="most-card__author author">
    <!-- автор -->
    <div class="author__icon-name">
    <!-- аватарка -->                
    <img src="<?= $post['author_url'] ?>" alt="avatar" class="author__icon">
    <!-- имя и стиль -->
    <p class="author__name"><?= $post['author'] ?></p>
    </div>
    <!-- дата и стиль даты -->
    <p class="author__date"><?= date("d/m/Y", strtotime($post['publish_date'])); ?></p>  
  </div>
  </a>
</div>