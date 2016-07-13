<?php
$home = "/";
$work_exp = "/work-exp";
$pro_dj = "/pro-dj";
$logical = "/logical";
$future = "/future";
$blog = "/blog";
$contact = "/contact";

// Facebook Link and Image src
$facebook = "https://www.facebook.com/MidnightArtsLab";
$facebook_img = "/images/icons/facebook.icon.png";

// Github Link and Image src
$github = "https://github.com/JDsWebService";
$github_img = "/images/icons/github.icon.png";

// Email Address and Image src
$email = "jdswebservice@gmail.com";
$email_img = "/images/icons/message.icon.png";

// Location Link and Image src
$location = "https://goo.gl/maps/9s5m3tMa6422";
$location_img = "/images/icons/location.icon.png";

?>

<div class="sidebar">

  <!-- Sidebar Links -->
  <div class="sidebar-links">
    <ul>
      <li><a href="<?php echo($home); ?>">Home</a></li>
      <li><a href="<?php echo($work_exp); ?>">Work Experience</a></li>
      <li><a href="<?php echo($pro_dj); ?>">Professional DJ</a></li>
      <li><a href="<?php echo($logical); ?>">Logical Web Development</a></li>
      <li><a href="<?php echo($future); ?>">Future Plans</a></li>
      <li><a href="<?php echo($blog); ?>">Blog</a></li>
      <li><a href="<?php echo($contact); ?>">Contact</a></li>
    </ul>
  </div>

  <!-- Add Social Media Buttons -->
  <div class="social-media">
    <!-- Facebook -->
    <a href="<?php echo($facebook); ?>">
      <img src="<?php echo($facebook_img); ?>">
    </a>
    <!-- Github -->
    <a href="<?php echo($github); ?>">
      <img src="<?php echo($github_img); ?>">
    </a>
    <!-- E-Mail -->
    <a href="mailto: <?php echo($email); ?>">
      <img src="<?php echo($email_img); ?>">
    </a>
    <!-- Location -->
    <a href="<?php echo($location); ?>">
      <img src="<?php echo($location_img); ?>">
    </a>
  </div>

</div>
