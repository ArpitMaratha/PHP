
<?php require 'includes/header.php'; ?>

<div class="main">
  <div class="hamburger">
    <img class="ham" src="/images/hamburger_icon.png" alt="" width="25">
    <img class="cross" src="/images/cross.png" alt="" width="28">
  </div>
  <div class="intro-container">
    <h1 class="p-3 mb-2 bg-primary text-white text-center"> Intro </h1>
      <h1 class="p-3 mb-2 bg-dark text-white">About Me <button class="btn bt-sm" onclick="edit()">Edit</button></h1>
      <!-- <button class="btn bt-sm" onclick="edit()">Edit</button> -->
      <p id="p1" class="p-3 mb-2 bg-light text-dark">
         Grounded and solution-oriented computer
          science student with keen learning.<br> Adept at
          motivating self and others. Passionate about
          technology. </p>

  <div class="skill-container" >
    <ul id="thelist1" class="p-3 mb-2 bg-light text-dark">
      <h1 class="p-3 mb-2 bg-dark text-white">My Skills <button class="btn bt-sm" onclick="addelement1();">Edit</button></h1>




        <!-- <button class="btn bt-sm" onclick="addelement1();">Add Skills</button> -->
        <li>Asp.Net</li>
        <li>Asp.Net Core</li>
        <li>Asp.Net MVC</li>
        <li>Angular</li>
        <li>MySql</li>
        <li>HTML</li>
        <li>CSS</li>
        <li>Bootstrap</li>
        <li>Javascript</li>
        <li>PHP</li>
        <li>Microsoft Azure</li>
      </ul>
  </div>

  <div class="certificate-container">
    <h1 class="p-3 mb-2 bg-dark text-white">Certificates</h1>
    <h5 class="p-3 mb-2 bg-dark text-white"> Devops Essential.</h5>
    <p class="p-3 mb-2 bg-light text-dark">Udemy (2021)</p>



    <h5 class="p-3 mb-2 bg-dark text-white"> AWS Essential.</h5>
    <p class="p-3 mb-2 bg-light text-dark">Udemy (2021)</p>




    <h5 class="p-3 mb-2 bg-dark text-white"> Essential Cloud Infrastructure: Foundation.</h5>
    <p class="p-3 mb-2 bg-light text-dark">Coursera (2020)</p>




    <h5 class="p-3 mb-2 bg-dark text-white">Google Cloud Platform Fundamentals: Core Infrastructure.</h5>
    <p class="p-3 mb-2 bg-light text-dark">Coursera (2020)</p>



    <h5 class="p-3 mb-2 bg-dark text-white">Web Development training for 6 weeks.</h5>
    <p class="p-3 mb-2 bg-light text-dark">Internshala (2019)</p>
  </div>




  </div>
</div>


<?php require 'includes/footer.php'; ?>
