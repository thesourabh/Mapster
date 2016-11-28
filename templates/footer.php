<footer style="text-align: center;">
<?php
        if (!empty($_SESSION["id"]))
        {
            echo '<span><a href="map.php"><strong>Open Map</strong></a></span>';
        }
?>
<span>Mapster &copy; 2014</span>
<?php
        if (!empty($_SESSION["id"]))
        {
            echo '<span><a href="logout.php"><strong>Log Out</strong></a></span>';
        }
?>
</footer>
</body>
</html>
