<?php
include "../database.php";

date_default_timezone_set('Asia/Riyadh');
$current_date = date("Y-m-d");


// Prepare the SQL query with a condition to exclude orders with today's date
/*
SELECT column_name(s) FROM table1
UNION
SELECT column_name(s) FROM table2;*/

$stmt = mysqli_prepare($conn, "SELECT date,time,Service_id FROM unavailable WHERE Date > DATE_SUB(CURDATE(), INTERVAL 1 DAY)
                                 UNION
                                 SELECT Date,Time, Service_id FROM appointments WHERE Date > DATE_SUB(CURDATE(), INTERVAL 1 DAY)
                                    ORDER BY date ASC, time ASC;");
// Execute the query
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);


$i=0;
while ($row = mysqli_fetch_assoc($result)) {
    if($i==2){
        echo '<tr>';
        $i=0;
    }
        if($row['Service_id']==0 ){
                echo '<td style="color:grey">' . $row['date'] . '</td>';
                echo '<td style="color:grey">' . $row['time'] . '</td>';
                $i++;

        }else{
                echo '<td style="color:green">' . $row['date'] . '</td>';
                echo '<td style="color:green">' . $row['time'] . '</td>';
                $i++;

        }
        
        if($i==2){
            echo '</tr>';
          
        } 
 
}
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