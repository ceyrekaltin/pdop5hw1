<?php
require_once 'db.php';

$database = new Database();
$conn = $database->getConnection();

if ($conn) {
    echo "<p>Database verbinding is tot stand gebracht.</p>";
} else {
    echo "<p>Database verbinding mislukt.</p>";
}
?>