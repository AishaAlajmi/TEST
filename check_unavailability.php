<?php
include 'database.php';

if(isset($_POST['date']) && isset($_POST['time'])){
    $date = $_POST['date'];
    $time = $_POST['time'];
    
    $stmt = mysqli_prepare($conn, "SELECT * FROM unavailable WHERE Date = ? AND Time = ?");
    mysqli_stmt_bind_param($stmt, "ss", $date, $time);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if(mysqli_num_rows($result) > 0){
        echo "unavailable";
    } else {
        echo "available";
    }
} else {
    echo "invalid_params";
}

$conn->close();
?>
