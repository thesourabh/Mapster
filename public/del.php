
<?php

    // configuration
    require("../includes/config.php"); 

    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // validate submission
        if (empty($_POST["lid"]))
        {
            apologize("No data selected to be deleted.");
        }
        echo $_POST["lid"];
        query("DELETE FROM locations WHERE lid = ?",$_POST["lid"]);
        redirect('/');
    }
    else
    {
        // else render form
        apologize("Invalid submission.");
    }

?>
