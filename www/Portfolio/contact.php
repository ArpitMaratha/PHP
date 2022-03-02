
<?php require 'includes/header.php'; ?>


<div class="main">
  <div class="contact-form">
    <h1> Contact me for work/general purpose </h1>
    <form>
      <div class="mb-3">
        <label for="clientemail" class="form-label">Email address</label>
        <input type="email" class="form-control" id="clientemail" aria-describedby="emailHelp">

      </div>
      <div class="mb-3">
        <label for="clientphone" class="form-label">Phone Number</label>
        <input type="number" class="form-control" id="clientphone">
      </div>

      <div class="mb-3" id="form-check">
        <input type="checkbox" class="form-check-input" id="isclient">
        <label class="form-check-label" for="isclient">I want you to work for me (only select for work purpose)</label>
      </div>

      <div id="emailHelp" class="form-text">We'll never share your email and phone number with anyone else.</div>

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>

<?php require 'includes/footer.php'; ?>
