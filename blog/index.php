<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width">
  <title>[Jonathan Robinson]</title>
  <link rel="stylesheet" href="../css/blog.css" />
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
          <h1>My Thoughts... and Ideas</h1>
          <p class="h1">Welcome to the Blog page. Here you will see some recent thoughts, ideas, quotes, and more. This is my brain on paper. Enjoy sifting through the mess!</p>

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
