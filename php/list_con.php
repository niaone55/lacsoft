<?php

try {
    $db = new PDO("mysql:host=localhost;dbname=forum", "root", "");
} catch (Excption $e) {
    die("erreur: " .$e->getMessage());
}