<?php
include 'data/wheels.php';

$wheelId = $_GET['id'] ?? null;

if (!$wheelId || !isset($wheels[$wheelId])) {
    echo 'Wheel not found';
    exit;
}

$wheel = $wheels[$wheelId];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRODUCT NAME</title>
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
    <link rel="stylesheet" href="/navbar.css">
    <link rel="stylesheet" href="/styles.css">
    <script src="/load-navbar.js"></script>
</head>
<body>
<div id="navbar-placeholder"></div>
<div class="prhead">
<img src="/images/<?php echo htmlspecialchars($wheelId); ?>.jpg" class="prlarge">
<div class="prmeta">
<h2 class="prh2"><?php echo htmlspecialchars($wheel['name']); ?></h2>
<h3 class="prprice">$<?php echo htmlspecialchars($wheel['price']); ?></h3>
    <ul class="prinfo">
    <li><b>Diameter:</b> <?php echo htmlspecialchars($wheel['diameter']); ?>MM</li>
    <li><b>Grip Material:</b> <?php echo htmlspecialchars($wheel['grip']); ?></li>
    <li><b>Build Material:</b> <?php echo htmlspecialchars($wheel['build']); ?></li>
    <li><b>Paddles:</b> <?php echo htmlspecialchars($wheel['paddles']); ?></li>
        <?php if (!empty($wheel['display'])): ?>
        <li><b>Display:</b> <?php echo htmlspecialchars($wheel['display']); ?></li>
    <?php endif; ?>
    <li><b>Software:</b> <?php echo htmlspecialchars($wheel['software']); ?></li>
    <li><b>QR Type:</b> <?php echo htmlspecialchars($wheel['qr']); ?></li>
    <li><b>Connectivity:</b> <?php echo htmlspecialchars($wheel['connectivity']); ?></li>
    <li><b>Weight:</b> <?php echo htmlspecialchars($wheel['weight']); ?>KG</li>
    <li><b>Warranty:</b> <?php echo htmlspecialchars($wheel['warranty']); ?></li>
    </ul>
</div>
</div>


<script>
        // Load the navbar
        loadNavbar();
    </script>
</body>
</html>