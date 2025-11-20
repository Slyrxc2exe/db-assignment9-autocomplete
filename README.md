# db-assignment9-autocomplete


Assignment 9 – Autocomplete Feature

Databases Project 2025 – Constructor University
Student: Suad Huseynli

This repository contains the implementation of the Autocomplete functionality required in Assignment 9 of the Databases Project.

The autocomplete feature retrieves suggestions dynamically from a MySQL database using:

PHP

AJAX

jQuery UI Autocomplete

MySQL (InfinityFree hosting)

✔ Implemented Features
1. Static autocomplete demo

A simple jQuery UI autocomplete using a hardcoded list.

2. Server-based autocomplete

AJAX request → PHP script → JSON suggestions.

3. MySQL database integration

Suggestions are fetched directly from a database table:

items(name VARCHAR(255))

You can test the autocomplete here:

🔗 http://dbproject9.infinityfreeapp.com/autocomplete_test.html

📁 Files in This Repository

autocomplete_test.html → main demo page + frontend autocomplete logic

autocomplete.php → backend filtering using MySQL

db_connect.php → database connection

autocomplete_demo.php → static version (optional demo)

📌 Note

Due to temporary lack of access to the team’s main project repository, this assignment is submitted as a standalone working implementation.
Full integration into the existing web service will be completed once team access is restored.
