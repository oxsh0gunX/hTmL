<?php
if (isset($_POST['submit'])) {
    $units = floatval($_POST['units']); 
    $rate1 = 0.10; 
    $rate2 = 0.15; 
    $rate3 = 0.20; 
    $bill = 0;
    if ($units <= 100) {
        $bill = $units * $rate1;
    } elseif ($units <= 200) {
        $bill = (100 * $rate1) + (($units - 100) * $rate2);
    } else {
        $bill = (100 * $rate1) + (100 * $rate2) + (($units - 200) * $rate3);
    }

    echo "<h3>Electricity Bill</h3>";
    echo "Units Consumed: $units <br>";
    echo "Total Bill: $" . number_format($bill, 2);
}
?>

<!-- Simple HTML form to take user input -->
<form method="post" action="">
    <label for="units">Enter Units Consumed:</label>
    <input type="number" step="0.01" name="units" required>
    <input type="submit" name="submit" value="Calculate Bill">
</form>

