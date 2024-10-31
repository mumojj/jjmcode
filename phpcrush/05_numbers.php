

<!DOCTYPE html>
<html>
<head>
    <title>Circle Area Calculator</title>
</head>
<body>

    <h2>Calculate the Area of a Circle</h2>
    
    <form method="POST">
        <label for="radius">Enter the radius:</label>
        <input type="number" name="radius" id="radius" step="0.01" required>
        <input type="submit" value="Calculate Area">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $radius = $_POST['radius'];
        $pi = 3.142;
        $area = $pi * $radius * $radius;

        echo "<h3>The area of the circle with radius $radius is: $area</h3>";
    }
    ?>

</body>

</html>

