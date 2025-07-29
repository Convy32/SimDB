<?php
include 'data/wheels.php';
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
<?php foreach ($wheels as $id => $wheel): ?>
    <li><a href="wheel.php?id=<?php echo urlencode($id); ?>"><?php echo htmlspecialchars($wheel['name']); ?></a></li>
<?php endforeach; ?>
</ul>
</body>
</html>