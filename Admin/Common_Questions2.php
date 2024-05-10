<?php
require_once '../database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['id'])) {
        $id = $_POST['id'];
        $preview = isset($_POST['preview']) ? 1 : 0;

        // Update the 'preview' field in the database
        $sql = "UPDATE questions SET preview = ? WHERE id = ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "ii", $preview, $id);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
    }
}

// Fetch data and populate the table
$sql = "SELECT * FROM questions";
$result = mysqli_query($conn, $sql);

$sequence = 1;
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $sequence++ . "</td>";
    echo "<td>" . $row['title'] . "</td>";
    echo "<td>" . $row['answer'] . "</td>";
    echo '<td>';
    echo '<form method="POST">';
    echo '<input type="hidden" name="id" value="' . $row['id'] . '">';
    echo '<input type="checkbox" name="preview" value="1" ' . ($row['preview'] == 1 ? 'checked' : '') . '>';
    echo '<input type="submit" class="btn btn-sm" style="margin-right: 10px; background-color: #CFB99A; border-radius: 6px; color: white;" value="حفظ التغيرات">';
    echo '</form>';
    echo '</td>';
    echo "</tr>";
}

mysqli_close($conn);
?>

<script>
        // JavaScript to toggle the form's visibility when the button is clicked
        const addQuestionButton = document.getElementById('addQuestionButton');
        const addQuestionForm = document.getElementById('addQuestionForm');

        addQuestionButton.addEventListener('click', function() {
            // Toggle the form's visibility
            addQuestionForm.style.display = addQuestionForm.style.display === 'none' ? 'block' : 'none';
        });
    </script>