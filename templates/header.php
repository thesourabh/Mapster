<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.css"/>
	<link rel="stylesheet" href="css/bootstrap-theme.css"/>
	<link rel="stylesheet" href="css/fonts.css"/>
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<?php
    if (preg_match("{(?:map)\.php$}", $_SERVER["PHP_SELF"]))
    {
        echo '<script src="https://www.google.com/jsapi"></script>';
        echo '<script src="js/service.js"></script>';
    }
	?>
	<?php
    if (preg_match("{(?:viewer)\.php$}", $_SERVER["PHP_SELF"]))
    {
        echo '<script src="js/viewer.js"></script>';
	    echo '<link rel="stylesheet" href="css/viewer.css"/>';
    }
	?>
	
	<link rel="stylesheet" href="css/service.css"/>
    <?php if (isset($title)): ?>
        <title><?= htmlspecialchars($title) ?> | Mapster</title>
    <?php else: ?>
        <title>Mapster</title>
    <?php endif ?>
</head>
<body>
	<header class="page-header" id="mapster-name-div">
		<h1>MAPSTER</h1>
	</header>

