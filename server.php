<?php

    /*
     * This file gets called twice; once by $.get() and then again by $.post()
     */

    if($_SERVER['REQUEST_METHOD'] === "POST")
    {
        // This is a POST request, so do the following:

        $name  = $_POST["name"];
        $drink = $_POST["drink"];

        echo("My name is " . $name . " and I drink a lot of " . $drink);
    }

    if($_SERVER['REQUEST_METHOD'] === "GET")
    {
        // This is a GET request, so do the following:
        echo("GET request successful!");
    }





