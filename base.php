<?php
include 'data/bases.php';

$baseId = $_GET['id'] ?? null;

if (!$baseId || !isset($bases[$baseId])) {
    echo 'Base not found';
    exit;
}

$base = $bases[$baseId];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($base['name']); ?></title>
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
    <link rel="stylesheet" href="/navbar.css">
    <link rel="stylesheet" href="/styles.css">
    <script src="/load-navbar.js"></script>
</head>
<body>
<div id="navbar-placeholder"></div>
<div class="prhead">
<img src="/images/<?php echo htmlspecialchars($baseId); ?>.jpg" class="prlarge">
<div class="prmeta">
<h2 class="prh2"><?php echo htmlspecialchars($base['name']); ?></h2>
<h3 class="prprice">$<?php echo htmlspecialchars($base['price']); ?></h3>
    <ul class="prinfo">
    <li><b>Torque:</b> <?php echo htmlspecialchars($base['torque']); ?>Nm</li>
    <li><b>Resolution:</b> <?php echo htmlspecialchars($base['resolution']); ?> Bits</li>
    <li><b>Connectivity:</b> <?php echo htmlspecialchars($base['connectivity']); ?></li>
    <li><b>Compatability:</b> <?php echo htmlspecialchars($base['compatability']); ?></li>
    <li><b>Mounting:</b></li>
    <ul class="prinfo prisub">
    <li><b>Bottom:</b> <?php echo htmlspecialchars($base['bmount']); ?></li>
    <li><b>Front:</b> <?php echo htmlspecialchars($base['fmount']); ?></li>
    <li><b>Side:</b> <?php echo htmlspecialchars($base['smount']); ?></li>
    </ul>
    <li><b>Dimensions:</b> <?php echo htmlspecialchars($base['dimensions']); ?>mm</li>    
    <li><b>Weight:</b> <?php echo htmlspecialchars($base['weight']); ?>kg</li>
    <li><b>Warranty:</b> <?php echo htmlspecialchars($base['warranty']); ?></li>
    </ul>
</div>
</div>


<script>
        // Load the navbar
        loadNavbar();
    </script>
</body>
</html>