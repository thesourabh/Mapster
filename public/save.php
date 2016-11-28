<?php

    // configuration
    require("../includes/config.php"); 

    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // validate submission
        if (empty($_POST["loclat"]) || empty($_POST["loclng"]))
        {
            apologize("No coordinates.");
        }
        query("INSERT INTO locations(id, name, lat, lng) VALUES(?, ?, ?, ?)",$_SESSION["id"],$_POST["locname"],$_POST["loclat"],$_POST["loclng"]);
        redirect('/');
    }
    else
    {
        // else render form
        apologize("Invalid submission.");
    }

?>
