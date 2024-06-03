<!-- разметка блока -->
<a href="/templates/post_copy.php?id=<?= $post['id'] ?>" class="featur-card">
  <!-- задний фон -->
  <img src="<?= $post['image_url'] ?>" alt="" class="featur-card__img">
  <!-- блок с текстовой информацией -->
  <div class="featur-card__info">
    <!-- teg -->
    <div class="featur-card__visible1">
      <div class="featur-card__teg">Category</div>
    </div>                       
    <!-- заголовок и подзаголовок -->
    <p class="featur-card__title"><?= $post['title'] ?></p>
    <p class="featur-card__subtitle"><?= $post['subtitle'] ?></p>
    <!-- автрор и дата -->
    <div class="featur-card__meta">
      <!-- автор -->
      <div class="author__icon-name">
        <img src="<?= $post['author_url'] ?>" alt="avatar" class="author__icon">
      
        <p class="author__name"><?= $post['author'] ?></p>
      </div>
      <!-- дата -->
      <p class="author__date"><?= date("F.j , Y", strtotime($post['publish_date']));  ?></p>
    </div>
  </div>
</a>

