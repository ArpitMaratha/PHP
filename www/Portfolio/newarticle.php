<?php

require 'includes/database.php';

$errors=[];
$title='';
$content='';
// $published_at='';

if($_SERVER["REQUEST_METHOD"] == "POST") {

  $title = $_POST['title'];

  $content = $_POST['content'];

  if($_POST['title'] == '') {
    $errors[] = 'Article Title is required';
  }

  if($_POST['content'] == '') {
    $errors[] = 'Article Content is required';
  }

  // if($_POST['published_at'] == '') {
  //   $errors[] = 'Invalid date and time';
  // }

  if(empty($errors)) {

  $conn = getDB();

  $sql = "INSERT INTO article (title, content, published_at)
          VALUES(?,?,?)";

  $stmt = mysqli_prepare($conn, $sql);

  if ($stmt === false) {
     echo mysqli_error($conn);
  } else {

    mysqli_stmt_bind_param($stmt, "sss", $title, $content, $published_at);


    if(mysqli_stmt_execute($stmt)) {
    $id = mysqli_insert_id($conn);

    // echo "Article inserted with ID: $id";

    if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !='off') {
      $protocol = 'https';
    }
    else {
      $protocol = 'http';
    }

    header("Location: $protocol://" . $_SERVER['HTTP_HOST'] . "/Portfolio/blog.php");
    exit;

  } else {
    echo mysqli_stmt_error($stmt);
  }
  }
}
}

?>

<?php require 'includes/header.php'; ?>

<div>
  <?php if(!empty($errors)): ?>
  <ul>
    <?php foreach($errors as $error): ?>
      <li><?= $error; ?></li>
    <?php endforeach; ?>
  </ul>
<?php endif; ?>

</div>

<form method="post">
  <table>
 <div>
  <label>Article Title</label>
  <input type="text" id="txt" name="title" placeholder="Article Title" value="<?= $title ?>">
 </div>

 <div>
   <label>Article Content</label>
   <textarea name="content" id="cnt" placeholder="Article Content"><?= $content ?></textarea>
 </div>

 <div>
   <label>Published At</label>
   <input type="datetime-local" id="date" name="published_at">
 </div>

  <div>
    <button>Send</button>
  </div>
</table>
</form>

<?php require 'includes/footer.php'; ?>
