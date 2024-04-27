
<!-- разметка блока -->
<a href="/post?id=<?= $post['id'] ?>" class="adventure-card">
  <!-- задний фон -->
  <img src="<?= $post['image_url'] ?>" alt="" class="adventure-card-img">
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
            <img src="<?= $post['author_url'] ?>" alt="avatar" class="rounded-image-avatar">
          </div>
          <p class="author-style"><?= $post['author'] ?></p>
        </a>
      </object>
      <!-- дата -->
      <p class="meta-text"><?= $post['publish_date'] ?></p>
    </div>
  </div>
</a>