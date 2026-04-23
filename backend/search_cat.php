<?php
include "db_conn.php";

$q = $_GET['q'];

$sql = "SELECT name FROM specializations WHERE name LIKE '%$q%' LIMIT 5";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
    echo "<div class='item' onclick=\"selectItem('".$row['name']."')\">".$row['name']."</div>";
}
?>