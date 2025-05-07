<!DOCTYPE html>
<!-- ICS2O-Assignment-04-PHP -->
<html lang="en-ca">

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Welcome to Yummy Pastries, in PHP" />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="Olivia TD" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.deep_purple-pink.min.css" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="apple-touch-icon" sizes="180x180" href="./apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="./favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="./favicon-16x16.png" />
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
      <br />
      <form action="answer.php" method="GET">
        <div>
          <label for="pastry">
            <h5>Please select the pastry you would like to purchase.</h5>
          </label>
          <select name="pastry" id="pastry">
            <option value="cupcake">Cupcake: $2.00</option>
            <option value="donut">Donut: $1.50</option>
            <option value="mini-cheesecake">Mini Cheesecake: $3.00</option>
            <option value="macaron">Macaron: $1.00</option>
            <option value="eclair">Eclair: $2.50</option>
          </select>
        </div>
        <h5>Please enter the number of pastries you would like to purchase.</h5>
        <h6>6 or more pastries will give you a 10% discount. You cannot purchase more than 20 pastries at a time.</h6>
        <div class="mdl-textfield mdl-js-textfield">
          <!-- input pattern attribute -->
          <input class="mdl-textfield__input" type="number" min="1" max="20" id="quantity" name="quantity" />
          <!-- mdl-textfield__label -->
          <label class="mdl-textfield__label" for="quantity">Enter the number of pastries here...
          </label>
          <!-- class "mdl-textfield__error" -->
          <span class="mdl-textfield__error">Input is not a valid number.</span>
        </div>
        <br />
        <div>
          <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent"
            type="check-button">
            Checkout
          </button>
        </div>
      </form>
    </main>
  </div>
</body>

</html>