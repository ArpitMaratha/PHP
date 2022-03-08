<?php

require 'includes/database.php';

$conn = getDB();
// echo "Connected Sucessfully";

if(isset($_GET['id']) && is_numeric($_GET['id'])) {

$sql = "SELECT *
        FROM article
        WHERE id = " . $_GET['id'];

// var_dump($sql);

$results = mysqli_query($conn, $sql);

if ($results === false) {
   echo mysqli_error($conn);
} else {
  $article = mysqli_fetch_assoc($results);
}

} else {
  $article=null;
}
?>


<?php require 'includes/header.php'; ?>
<div class="main">
  <div class="hamburger">
    <img class="ham" src="/images/hamburger_icon.png" alt="" width="25">
    <img class="cross" src="/images/cross.png" alt="" width="28">
  </div>
  <div class="article-container">
    <?php if($article === null): ?>
      <p>Article not found!</p>
    <?php else: ?>

        <article>
          <h1><?= $article['title']; ?></h1>
          <p><?= $article['content']; ?></p>
        </article>


    <?php endif; ?>
  </div>
</div>
<?php require 'includes/footer.php'; ?>
