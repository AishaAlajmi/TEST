<?php
require_once 'database.php';

// Define the specific customer ID you want to display data for
$specificCustomerId = $_SESSION['client_id']; // Replace with the actual customer ID

// Prepare the SQL query with a condition for the specific customer ID and join with the services table
$stmt = mysqli_prepare($conn, "SELECT a.*, s.title AS service_name FROM orders a
    JOIN services s ON a.service_id = s.service_id
    WHERE a.client_id = ? ");
mysqli_stmt_bind_param($stmt, "i", $specificCustomerId);

// Execute the query
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);



// Fetch and store all orders
while ($row = mysqli_fetch_assoc($result)) {
    $client_id = $row['client_id'];
    $row2 = fetchCustomerDetails($conn, $client_id);
    $emergency = "طارئة!";
    $not_emergency = "عادية";
    echoTableRow($row, $row2, $emergency, $not_emergency, 'red');
}

// Close the database connection
mysqli_close($conn);

/**
 * Fetches customer details from the database based on the given customer ID.
 *
 * @param mysqli $conn The database connection object
 * @param int $client_id The customer ID
 * @return array|null The customer details or null if not found
 */
function fetchCustomerDetails(mysqli $conn, int $client_id): ?array
{
    // Prepare the SQL query
    $stmt = mysqli_prepare($conn, "SELECT * FROM clients WHERE client_id = ?");
    mysqli_stmt_bind_param($stmt, "i", $client_id);
    // Execute the query
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $row = mysqli_fetch_assoc($result);
    mysqli_stmt_close($stmt);
    return $row;
}

/**
 * Echoes the HTML markup for a table row.
 *
 * @param array $row The order details
 * @param array|null $row2 The customer details
 * @param string $emergencyLabel The label for emergency orders
 * @param string $notEmergencyLabel The label for normal orders
 * @param string $color The color for the table cell
 */
function echoTableRow(array $row, ?array $row2, string $emergencyLabel, string $notEmergencyLabel, string $color): void
{
    echo '<tr>';
    echo '<td>' . $row['order_id'] . '</td>';
    echo '<td>' . $row['service_name'] . '</td>';
    echo '<td>' . $row['due_date'] . '</td>';
    echo '<td>' . $row['status'] . '</td>';
    echo '<td>' . $row['total_price'] . '</td>';
    if ($row['status'] == "تم القبول" || $row['status'] == "تم الرفض") {
        echo '<td> <button class="btn btn-sm" style="background-color:#CFB99A !important; border-radius: 6px;">
        <a href="admin/invoice.php?appointment_id=' . $row['order_id'] . '" style="color: #FFF; text-decoration:none;">عرض</a>
    </button></td>';
    } else {
        echo '<td> </td>';
    }
    echo '</tr>';
}
?>