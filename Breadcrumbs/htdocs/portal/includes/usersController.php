<?php

require "../db/db.php";
$data = array();

$query = "SELECT * FROM users";
$stmt = $con->prepare($query);
$stmt->execute();
$result = $stmt->get_result();
$stmt->close();

while ($row = $result->fetch_array(MYSQLI_ASSOC)){
    array_push($data, $row);
}