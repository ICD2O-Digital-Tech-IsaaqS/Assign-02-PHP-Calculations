<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Web page to calculate perimeter and area of a hexagon -->

    <meta charset="UTF-8">
    <meta name="description" content="Hexagon Calculator - Perimeter and Area">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hexagon Calculator</title>
    <link rel="icon" type="image/png" href="favicon.png">
    <link rel="stylesheet" href="style.css">
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
      <img src="hexagon_example.png" alt="Hexagon Example">

    </body>
</html>