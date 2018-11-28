<?php

$router = new Router();

$router->define([
    '' => 'app/Controllers/GuestbookController.php',
    'list' => 'app/Controllers/GuestbookController.php',
    'add' => 'app/Controllers/GuestbookCreateController.php'
]);