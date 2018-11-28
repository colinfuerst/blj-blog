<?php

$dbh = connectToDatabase();

// Tabelle benötigt folgende Spalten:
// id, int, auto_increment
// name, varchar
// message, text

$statement = $dbh->prepare('INSERT INTO entries (name, message) VALUES (:name, :message)');
$statement->bindParam(':name', $_POST['name']);
$statement->bindParam(':message', $_POST['message']);

$statement->execute();

header('Location: list');