<!DOCTYPE html>
<!-- ICD2O-Assignment-04-PHP -->
<html lang="en-ca">

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Welcome to Yummy Pastries, in PHP" />
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
  <title>Welcome to Yummy Pastries, in PHP</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Welcome to Yummy Pastries, in PHP</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./images/cupcakes.jpg" alt="Image of pink cupcakes." />
      </div>
      <div class=" page-content-php">
        <div id="user-info">

          <?php
          // input
          $pastry = $_GET["pastry"];
          $quantity  = intval($_GET["quantity"]);

          $itemCost = 0;
          $discountRate = 0;
          $discount = 0;
          $subTotal = 0;
          $taxRate = 0.13;
          $tax = 0;
          $total = 0;

          if ($pastry == "cupcake") {
            $itemCost = 2.00;
          } else if ($pastry == "donut") {
            $itemCost = 1.50;
          } else if ($pastry == "mini-cheesecake") {
            $itemCost = 3.00;
          } else if ($pastry == "macaron") {
            $itemCost = 1.00;
          } else {
            $itemCost = 2.50;
          }

          if ($quantity > 5) {
            $discountRate = 0.10;
          }

          $subTotal = $quantity * $itemCost;
          $discount = $subTotal * $discountRate;
          $tax = ($subTotal - $discount) * $taxRate;
          $total = $subTotal - $discount + $tax;
          $subTotal = number_format($subTotal, 2);
          $discount = number_format($discount, 2);
          $tax = number_format($tax, 2);
          $total = number_format($total, 2);

          echo "<p>" . $quantity . " " . $pastry . "(s)</p>";
          echo "<p>Subtotal: $" . $subTotal . "</p>";
          echo "<p>Discount: $" . $discount . "</p>";
          echo "<p>Tax: $" . $tax . "</p>";
          echo "<p>Total: $" . $total . "</p>";
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