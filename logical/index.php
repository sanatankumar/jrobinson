<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width">
  <title>[Jonathan Robinson]</title>
  <link rel="stylesheet" href="../css/logical.css" />
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
          <h1>Logical Web Development</h1>
          <p class="h1">Welcome [insert name], this page will discuss Logical Web Development. What is Logical Web Development you say? Well, Logical Web Development is a company I started in 2004 with the help of my mentor <a href="http://visionspin.com/">Louis Hutmire</a>. Louis taught me the basic of website design, structure, and programming. Since 2005, I've broken away from Louis as a mentor, and started learning on my own. Here's some of the things I've learned over the years and what it means for my clients.</p>

            <h2>HTML and CSS</h2>
            <p class="h2"></p>

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
