<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Your Age</title>
</head>
<body>

<?php
if (isset($_GET['age'])) {
    $age = $_GET['age'];
    echo "<p>You are $age years old.</p>";
}
?>

</body>
</html>