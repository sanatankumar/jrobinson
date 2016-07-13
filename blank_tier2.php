<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width">
  <title>[Jonathan Robinson]</title>
  <link rel="stylesheet" href="../css/work-exp.css" />
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
          <h1>Default Text</h1>
          <p class="h1">This is a tier 2 blank page. Please make sure to update the relevant style sheet accordingly.</p>
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
