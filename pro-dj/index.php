<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width">
  <title>[Jonathan Robinson]</title>
  <link rel="stylesheet" href="../css/pro-dj.css" />
</head>
<body>
  <!-- Input Checkbox for Sidebar -->
  <input type="checkbox" id="sidebartoggler" name="" value="">
  <!-- Wrap Page in Page Wrap -->
  <div class="page-wrap">
    <!-- Sidebar Menu Button -->
    <label for="sidebartoggler" class="toggle">&#9776;</label>


    <!-- Actual Website Itself -->
    <div class="page-content">
      <div class="main-content-box">
        <!-- Header Text -->
        <?php
          include("../modules/header.php");
        ?>
        <!-- Main Content of Website -->
        <div class="main-content">
          <h1>Professional DJ Career</h1>
          <p class="h1">Hello [insert_name], welcome to my Professional DJ page. We're going to take a look at how I got started, the tools I use, the genre's I spin, and my future plans as a DJ. For booking information, please use the contact page to send a booking request form.</p>
        </div>

        <!-- Footer of Website -->
        <?php
          include ("../modules/footer.php");
        ?>


      </div>
    </div>

    <!-- Add sidebar -->
    <?php
      include ("../modules/sidebar.php");
    ?>

  </div>

</body>
</html>
