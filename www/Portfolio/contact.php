
<?php

require 'includes/database.php';

// $errors=[];
// $first_name='Arpit';
// $last_name='';
// $email_address='';
// $phone_number='';
// $enquiry='';
// $check_box='';



if($_SERVER["REQUEST_METHOD"] == "POST") {


//   $first_name = $_POST['first_name'];
//
//   $last_name = $_POST['last_name'];
//
//   $email_address = $_POST['email_address'];
//
//   $phone_number = $_POST['phone_number'];
//
//   $enquiry = $_POST['enquiry'];
//
//   // $check_box = $_POST['check_box'];
//
//   if($_POST['first_name'] == '') {
//     $errors[] = 'first_name Title is required';
//   }
//
//   if($_POST['last_name'] == '') {
//     $errors[] = 'Article Content is required';
//   }
//
// if(empty($errors)) {

$conn = getDB();

$sql = "INSERT INTO contactform (first_name, last_name, email_address, phone_number, enquiry, check_box)
        VALUES(?,?,?,?,?,?)";

        $stmt = mysqli_prepare($conn, $sql);

        if ($stmt === false) {
           echo mysqli_error($conn);
        } else {

          mysqli_stmt_bind_param($stmt, "sssdss", $first_name, $last_name, $email_address, $phone_number, $enquiry, $check_box);


          if(mysqli_stmt_execute($stmt)) {
          $id = mysqli_insert_id($conn);

          echo "Article inserted with ID: $id";
        } else {
          echo mysqli_stmt_error($stmt);
        }

}
// }
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
    <form method="post">
      <div class="mb-3">
        <label for="firstname" class="form-label">First Name</label>
        <input type="text" name="first_name" class="form-control" id="firstname" aria-describedby="emailHelp" required>
      </div>
      <div class="mb-3">
        <label for="lastname" class="form-label">Last Name</label>
        <input type="text"  name="last_name" class="form-control" id="lastname" aria-describedby="emailHelp" required>
      </div>
      <div class="mb-3">
        <label for="clientemail" class="form-label">Email address</label>
        <input type="email" name="email_address" class="form-control" id="clientemail" aria-describedby="emailHelp" required>
      </div>
      <div class="mb-3">
        <label for="clientphone" class="form-label">Phone Number</label>
        <input type="number" name="phone_number" class="form-control" id="clientphone" required>
      </div>
      <div class="mb-3">
        <label for="enquiry" class="form-label">Enquiry</label>
        <input type="text" name="enquiry" class="form-control" id="enquiry" required>
      </div>

      <div class="mb-3" id="form-check">
        <input type="checkbox" name="check_box" class="form-check-input" id="isclient">
        <label class="form-check-label" for="isclient">I want you to work for me (only select for work purpose)</label>
      </div>

      <div id="emailHelp" class="form-text">We'll never share your email and phone number with anyone else.</div>


        <button type="submit" class="btn btn-sm">Submit</button>


    </form>
  </div>
</div>

<?php require 'includes/footer.php'; ?>
