<?php
include "config.php";

if ($_SESSION['role'] != 'business') {
    die("Access denied.");
}

echo "<h2>Business Dashboard</h2>";
echo "<a href='logout.php'>Logout</a>";
?>