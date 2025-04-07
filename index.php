<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Web page to calculate perimeter and area of a hexagon -->

    <meta charset="UTF-8">
    <meta name="description" content="Hexagon Calculator - Perimeter and Area">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hexagon Calculator</title>
    <link rel="apple-touch-icon" sizes="180x180" href="./favicon_io (9)/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon_io (9)/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon_io (9)/favicon-16x16.png" />
    <link rel="manifest" href="./favicon_io (9)/site.webmanifest" />
    <link rel="stylesheet" href="css/style.css">
  </head>
    <body>

      <h1>Hexagon Calculator</h1>

      <!-- Form for input -->
      <form method="post" action="calculate.php">
          <input type="number" name="sideLength" step="0.01" placeholder="Enter side length (2 decimal places)" required>
          <br><br>
          <!-- MDL-style button -->
          <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" type="submit">
              Calculate
          </button>
      </form>

      <!-- Informational text -->
      <p class="info-text">Enter the side length of a regular hexagon to calculate its perimeter and area.</p>

      <!-- Hexagon image -->
      <img src="images/hexagon-gif.png" alt="Hexagon" width="200">

    </body>
</html>