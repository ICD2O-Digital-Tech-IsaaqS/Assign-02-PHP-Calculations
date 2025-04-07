<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Calculation result page for Hexagon -->
    <meta charset="UTF-8">
    <meta name="description" content="Hexagon Calculation Results">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hexagon Results</title>
    <link rel="icon" type="image/png" href="favicon.png">
    <link rel="stylesheet" href="style.css">
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

                echo "Side Length: $side<br>";
                echo "Perimeter: $perimeter<br>";
                echo "Area: $area";
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
</html