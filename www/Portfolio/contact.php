
<?php

  require 'includes/database.php';



if($_SERVER["REQUEST_METHOD"] == "POST") {



  $conn = getDB();

  $sql = "INSERT INTO contactform (first_name, last_name, email_address, phone_number, enquiry)
          VALUES ('" . $_POST['first_name'] . "', '" . $_POST['last_name'] . "' , '" . $_POST['email_address'] . "',
          '" . $_POST['phone_number'] . "', '" . $_POST['enquiry'] . "' )";


  $results = mysqli_query($conn, $sql);

  if ($results === false) {
     echo mysqli_error($conn);
  } else {
    $id = mysqli_insert_id ($conn);
    if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !='off') {
      $protocol = 'https';
    }
    else {
      $protocol = 'http';
    }

    header("Location: $protocol://" . $_SERVER['HTTP_HOST'] . "/Portfolio/index.php");
    exit;
  }

}
?>

<?php require 'includes/header.php'; ?>




<div class="main">

  <div class="hamburger">
    <img class="ham" src="/images/hamburger_icon.png" alt="" width="25">
    <img class="cross" src="/images/cross.png" alt="" width="28">
  </div>

  <div class="contact-form">
    <h1> Contact me for work/general enquiries </h1>

    <form action="" name="myform" onsubmit="return validateform()" method="post">

      <div class="mb-3">
        <label for="firstname" class="form-label">First Name</label>
        <input type="text" name="first_name" class="form-control" id="firstname" required>
        <span class="error"><b></b></span>
      </div>

      <div class="mb-3">
        <label for="lastname" class="form-label">Last Name</label>
        <input type="text"  name="last_name" class="form-control" id="lastname" required>
        <span class="error"><b></b></span>
      </div>

      <div class="mb-3">
        <label for="clientemail" class="form-label">Email address</label>
        <input type="email" name="email_address" class="form-control" id="clientemail" required>
        <span class="error"><b></b></span>
      </div>

      <div class="mb-3">
        <label for="clientphone" class="form-label">Phone Number</label>
        <input type="number" name="phone_number" min="0" class="form-control" id="clientphone" required>
        <span class="error"><b></b></span>
      </div>

      <div class="mb-3">
        <label for="enquiry" class="form-label">Enquiry</label>
        <input type="text" name="enquiry" class="form-control" id="enquiry" required>
        <span class="error"><b></b></span>
      </div>

      <!-- <div class="mb-3" id="form-check">
        <input type="checkbox" name="check_box" class="form-check-input" id="isclient">
        <label class="form-check-label" for="isclient">I want you to work for me (only select for work purpose)</label>
      </div> -->

      <div id="emailHelp" class="form-text">We'll never share your email and phone number with anyone else.</div>


        <button type="submit" class="btn btn-sm">Submit</button>


    </form>
  </div>
</div>

<?php require 'includes/footer.php'; ?>
