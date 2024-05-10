<?php
require_once '../database.php';

$stmt = mysqli_prepare($conn, "SELECT * FROM clients WHERE registered = 1");
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr>';
        echo '<td>' . $row['First_name'] . ' ' . $row['Middle_name'] . ' ' . $row['Last_name'] . '</td>';
        echo '<td>' . $row['Phone'] . '</td>';
        echo '<td>' . $row['NationalID'] . '</td>';
        echo '<td>' . $row['Email'] . '</td>';
        echo '</tr>';
      }
      ?>
