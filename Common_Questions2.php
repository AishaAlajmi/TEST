<?php
// Include your database connection here
require_once 'database.php';

// Fetch questions from the 'questions' table where 'preview' is 1
$query = "SELECT id, title, answer FROM questions WHERE preview = 1";
$result = mysqli_query($conn, $query);

$questions = [];
while ($row = mysqli_fetch_assoc($result)) {
    $questions[] = $row;
}

// Close the database connection
mysqli_close($conn);
?>
