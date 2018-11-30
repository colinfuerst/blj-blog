<?php

$router = new Router();

$router->define([
    '' => 'GuestbookController.php',
    'list' => 'GuestbookController.php',
    'add' => 'GuestbookCreateController.php',
]);