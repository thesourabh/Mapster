<?php

    // configuration
    require("../includes/config.php"); 
    
    $rows = query("SELECT * FROM locations WHERE id = " . $_SESSION["id"]);
    $locations = [];
    foreach ($rows as $row)
    {
        $locations[] = [
            "lid" => $row["lid"],
            "name" => $row["name"],
            "lat" => $row["lat"],
            "lng" => $row["lng"]
        ];
    }
    // render portfolio
    render("locations.php", ["locations" => $locations, "title" => "Locations"]);

?>
