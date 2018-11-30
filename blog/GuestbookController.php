<?php

$dbh = connectToDatabase();

// Tabelle benötigt folgende Spalten:
// id, int, auto_increment
// name, varchar
// message, text

$statement = $dbh->prepare('SELECT * FROM entries order by date desc');
$statement->execute();

$entries = $statement->fetchAll();

require 'blog.view.php';

?>
<?php
$dbh = connectToDatabase();

// Tabelle benötigt folgende Spalten:
// id, int, auto_increment
// name, varchar
// message, text

$statement = $dbh->prepare('SELECT * FROM rating');
$statement->execute();

$rating = $statement->fetchAll();

require 'kommentar.php';
?>