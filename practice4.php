<!DOCTYPE html>
<html>
<head>
    <title>Practice 4 - Multiplication Table</title>
</head>
<body>
    <h1>Multiplication Table</h1>
    <form method="post" action="practice4.php">
        <label for="size">Size of the multiplication table:</label>
        <input type="number" id="size" name="size" required>
        <input type="submit" value="Submit">
    </form>

    <?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $size = intval($_POST["size"]);
        echo "<table border='1' style='border-collapse: collapse;'>";
        
        // Print header row
        echo "<tr><th>*</th>";
        for ($i = 1; $i <= $size; $i++) {
            echo "<th>$i</th>";
        }
        echo "</tr>";

        // Print rows of the multiplication table
        for ($row = 1; $row <= $size; $row++) {
            echo "<tr><th>$row</th>"; // Row index
            for ($col = 1; $col <= $size; $col++) {
                echo "<td>" . ($row * $col) . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
    ?>
</body>
</html>
