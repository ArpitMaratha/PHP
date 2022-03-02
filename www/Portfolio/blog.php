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


  <!-- <a href="newarticle.php"><h1>Create Article</h1></a> -->
    <?php if(empty($articles)): ?>
      <p>No articles found!</p>
    <?php else: ?>

    <ul>
      <?php foreach ($articles as $article): ?>
      <li>
        <article>
          <h2><a href="article.php?id=<?=$article['id'] ?>"><?= $article['title']; ?></a></h2>
          <p><?= $article['content']; ?></p>
        </article>
      </li>
      <?php endforeach; ?>
    </ul>
  <?php endif; ?>

  <?php require 'includes/footer.php'; ?>