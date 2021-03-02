<?php


try {
    $db = new PDO('mysql:hot=localhost;dbname=lacsoft'; 'root'; '');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
