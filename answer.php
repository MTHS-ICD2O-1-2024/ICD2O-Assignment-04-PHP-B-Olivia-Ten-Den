<!DOCTYPE html>
<!-- ICD2O-Assignment-04-PHP -->
<html lang="en-ca">

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Museum Entry Discount, with PHP" />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="Olivia TD" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link
    rel="stylesheet"
    href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link
    rel="stylesheet"
    href="https://code.getmdl.io/1.3.0/material.deep_purple-pink.min.css" />
  <link rel="stylesheet" href="./css/style.css" />
  <link
    rel="apple-touch-icon"
    sizes="180x180"
    href="./apple-touch-icon.png" />
  <link
    rel="icon"
    type="image/png"
    sizes="32x32"
    href="./favicon-32x32.png" />
  <link
    rel="icon"
    type="image/png"
    sizes="16x16"
    href="./favicon-16x16.png" />
  <link rel="manifest" href="./site.webmanifest" />
  <title>Museum Entry Discount, with PHP</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Museum Entry Discount, with PHP</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./images/museum.png" alt="Image of the outside of a museum." />
      </div>
      <div class=" page-content-php">
        <div id="user-info">

          <?php
          // input
          $age  = intval($_GET["age"]);
          $dayOfTheWeek = $_GET["day"];


          if ($dayOfTheWeek == "tuesday" || $dayOfTheWeek == "thursday" || ($age > 12 && $age < 21)) {
            echo "<p>You are eligible for the discount.</p>";
          } else {
            echo "<p>You are NOT eligible for the discount.</p>";
          }
          ?>

        </div>
        <br />
        <div class="page-content-answer">
          <a href="./index.php">Return ...</a>
        </div>
    </main>
  </div>
</body>

</html>