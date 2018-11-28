<?php

$dbh = connectToDatabase();

// Tabelle benötigt folgende Spalten:
// id, int, auto_increment
// name, varchar
// message, text

$statement = $dbh->prepare('SELECT * FROM entries');
$statement->execute();

$entries = $statement->fetchAll();

require 'blog.view.php';