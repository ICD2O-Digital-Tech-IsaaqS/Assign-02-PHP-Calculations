<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Calculation result page for Hexagon -->
    <meta charset="UTF-8">
    <meta name="description" content="Hexagon Calculation Results">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hexagon Results</title>
    <link rel="apple-touch-icon" sizes="180x180" href="./favicon_io (9)/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon_io (9)/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon_io (9)/favicon-16x16.png" />
    <link rel="manifest" href="./favicon_io (9)/site.webmanifest" />>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <h1>Hexagon Calculation Results</h1>

    <div class="highlight-text">
        <?php
        // Check if the form was submitted and the value is valid
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST["sideLength"]) && is_numeric($_POST["sideLength"]) && $_POST["sideLength"] > 0) {
                $side = round(floatval($_POST["sideLength"]), 2);
                $perimeter = round(6 * $side, 2);
                $area = round((3 * sqrt(3) / 2) * pow($side, 2), 2);

                echo "Side Length: $side cm<br>";
                echo "Perimeter: $perimeter cm<br>";
                echo "Area: $area cm<sup>2</sup>";
            } else {
                echo "Please enter a valid positive side length.";
            }
        } else {
            echo "No data submitted.";
        }
        ?>
    </div>

    <br><a href="index.php">← Back to Calculator</a>

</body>
</html>