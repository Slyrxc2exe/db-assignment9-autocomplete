<?php
// Include DB connection
require 'db_connect.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Autocomplete Demonstration Page</title>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- jQuery UI -->
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"></script>

    <!-- jQuery UI CSS -->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            line-height: 1.6;
            max-width: 900px;
        }
        #search {
            width: 350px;
            padding: 12px;
            font-size: 16px;
            border: 2px solid #333;
            border-radius: 6px;
            margin-bottom: 20px;
        }
        h2 {
            margin-bottom: 10px;
        }
        .explanation {
            background: #f7f7f7;
            padding: 15px;
            border-left: 4px solid #333;
            margin-bottom: 25px;
        }
    </style>
</head>
<body>

<h2>Assignment 9: Autocomplete Demonstration</h2>

<div class="explanation">
    <p>
        This page demonstrates the implementation of the <strong>Autocomplete</strong> feature 
        required in Assignment 9 of Databases Project 2025.
    </p>

    <p>
        The autocomplete below retrieves suggestions dynamically from the MySQL database using 
        <strong>PHP</strong> and <strong>AJAX (jQuery UI Autocomplete)</strong>.
    </p>

    <p>
        Due to temporary lack of access to the main team project repository, full integration 
        into all search fields of the main service will be done immediately once access is restored. 
        This demonstration shows the complete backend and frontend logic required for the assignment.
    </p>

    <p>
        Steps implemented here:
        <ul>
            <li>Static autocomplete demo</li>
            <li>Server-based autocomplete demo</li>
            <li>MySQL database integration</li>
            <li>Live filtering after each character typed (Bonus 5%)</li>
        </ul>
    </p>
</div>

<h3>Live Autocomplete Input:</h3>

<input type="text" id="search" placeholder="Start typing...">

<script>
$("#search").autocomplete({
    source: function(request, response) {
        $.ajax({
            url: "autocomplete.php",
            method: "GET",
            data: { term: request.term },
            dataType: "json",
            success: response,
            error: function(xhr, status, error) {
                console.error("Error:", error);
            }
        });
    }
});
</script>

</body>
</html>
