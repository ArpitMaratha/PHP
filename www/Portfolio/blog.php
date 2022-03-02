<?php

require 'includes/database.php';

$conn = getDB();
// echo "Connected Sucessfully";

$sql = "SELECT *
        FROM article
        ORDER BY id";

$results = mysqli_query($conn, $sql);

if ($results === false) {
   echo mysqli_error($conn);
} else {
  $articles = mysqli_fetch_all($results, MYSQLI_ASSOC);
}
?>

<?php require 'includes/header.php'; ?>

<div class="main">
  <div class="hamburger">
    <img class="ham" src="/images/hamburger_icon.png" alt="" width="25">
    <img class="cross" src="/images/cross.png" alt="" width="28">
  </div>
  <!-- <a href="newarticle.php"><h1>Create Article</h1></a> -->
    <?php if(empty($articles)): ?>
      <p>No articles found!</p>
    <?php else: ?>
    <div class="blog-container">
      <h1>Arpit Maratha Blogs</h1>
    <ul>
      <?php foreach ($articles as $article): ?>
      <li>

        <article class="blog-item">

          <h2><a href="article.php?id=<?=$article['id'] ?>"><?= $article['title']; ?></a></h2>
          <p><?= $article['content']; ?></p>
        </article>
      </li>
      <?php endforeach; ?>
    </ul>

    <div class="pagination">
      <a href="#">&laquo;</a>
      <a class="active" href="#">1</a>
      <a href="#">2</a>
      <a href="#">3</a>
      <a href="#">4</a>
      <a href="#">5</a>
      <a href="#">6</a>
      <a href="#">&raquo;</a>
    </div>

  </div>
  <?php endif; ?>



</div>



  <?php require 'includes/footer.php'; ?>
