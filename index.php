<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width">
  <title>[Jonathan Robinson]</title>
  <link rel="stylesheet" href="css/index.css" />
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
          include("modules/header.php");
        ?>
        <!-- Main Content of Website -->
        <div class="main-content">
          <h1>Welcome</h1>
          <p class="h1">Welcome [insert-name], thanks for taking the time to view my website. Here you will find a bunch of information about me, my work history, passsions, and concepts. This website can serve as an online resume if need be. I hope you enjoy your stay.</p>
          </div>

        <!-- Footer of Website -->
        <?php
          include ("modules/footer.php");
        ?>


      </div>
    </div>

    <!-- Add sidebar -->
    <?php
      include ("modules/sidebar.php");
    ?>

  </div>

</body>
</html>
