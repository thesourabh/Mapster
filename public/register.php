<?php

    // configuration
    require("../includes/config.php");

    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if (empty($_POST["username"]))
        {
            apologize("You must provide a username.");
        }
        else if (empty($_POST["password"]))
        {
            apologize("You must provide a password.");
        }
        else if ($_POST["password"] !== $_POST["confirmation"])
        {
            apologize("Passwords didn't match.");
        }
        
        $query_success = query("INSERT INTO users (username, hash, email) VALUES(?, ?, ?)", $_POST["username"], crypt($_POST["password"]), $_POST["email"]);
        if (!$query_success)
        {
            $rows = query("SELECT LAST_INSERT_ID() AS id");
            $_SESSION["id"] = $rows[0]["id"];
            // redirect to portfolio
            redirect("/"); 
        }
        else
        {    
            apologize("A database error occurred. The username may already exist.");
        }
    }
    else
    {
        // else render form
        render("register_form.php", ["title" => "Register"]);
    }

?>
