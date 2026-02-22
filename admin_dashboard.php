<?php
include "config.php";

if ($_SESSION['role'] != 'admin') {
    die("Access denied.");
}

echo "<h2>Admin Dashboard</h2>";
echo "<a href='logout.php'>Logout</a><br><br>";

$result = mysqli_query($conn, "SELECT * FROM businesses WHERE status='pending'");

while ($row = mysqli_fetch_assoc($result)) {
    echo $row['business_name'] . " 
    <a href='approve.php?id=".$row['id']."'>Approve</a><br>";
}
?>