<?php
require_once '../database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['newQuestion']) && isset($_POST['newAnswer'])) {
        $newQuestion = $_POST['newQuestion'];
        $newAnswer = $_POST['newAnswer'];
        
        // Check if the 'preview' checkbox is checked
        $preview = isset($_POST['preview']) ? 1 : 0;

        // Insert the new question into the database
        $sql = "INSERT INTO questions (title, answer, preview) VALUES (?, ?, ?)";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "ssi", $newQuestion, $newAnswer, $preview);

        if (mysqli_stmt_execute($stmt)) {
            // The insertion was successful
            header("Location: Common_Questions.php"); // Redirect back to the main page
            exit();
        } else {
            // There was an error
            echo "Error: " . mysqli_error($conn);
        }

        mysqli_stmt_close($stmt);
    }
}

mysqli_close($conn);
?>
