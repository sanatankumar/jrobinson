<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width">
  <title>[Jonathan Robinson]</title>
  <link rel="stylesheet" href="../css/future.css" />
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
          <h1>Goals, Plans, and Aspirations</h1>
          <p class="h1">Welcome [insert name], thanks for coming and checking out what I'm planning on doing in the future. I have alot of goals, and aspirations. I have been wanting to write them down for a while so here they are!</p>
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
