<!DOCTYPE html>
<html>
<head><title>Sort Example</title></head>
<body>
<?php
$name = array("gopi", "arjun", "afsa", "jasil");

// Ascending order
asort($name);
echo "<h3>Ascending order (asort):</h3>";
foreach($name as $n){
    echo $n . "<br>";
}

// Descending order
arsort($name);
echo "<h3>Descending order (arsort):</h3>";
foreach($name as $n){
    echo $n . "<br>";
}
?>
</body>
</html>

