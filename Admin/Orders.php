<?php
require_once '../database.php';


// Prepare the SQL query with a condition to exclude orders with today's date
$stmt = mysqli_prepare($conn, 'SELECT * FROM appointments WHERE status = "طلب موعد جديد"');// Execute the query
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

// Initialize a variable to hold the HTML markup for the table rows
$tableRows = '';

// fetch and store all emergency orders
$emergencyOrders = array();
$normalOrders = array();

while ($row = mysqli_fetch_assoc($result)) {
    if ($row['Urgent'] == 1) {
        $emergencyOrders[] = $row;
    } else {
        $normalOrders[] = $row;
    }
}

// display emergency orders first
foreach ($emergencyOrders as $row) {
    $client_id = $row['Client'];
    $row2 = fetchCustomerDetails($conn, $client_id);
    $emergency = "طارئة!";
    $not_emergency = "عادية";
    echoTableRow($row, $row2, $emergency, $not_emergency, 'red');
}

// display normal orders next
$notEmergency = "عادية";
foreach ($normalOrders as $row) {
    $client_id = $row['Client'];
    $row2 = fetchCustomerDetails($conn, $client_id);
    $emergency = "طارئة !";
    echoTableRow($row, $row2, $emergency, $notEmergency, 'green');
}

// close the database connection
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
function fetchServiceTitle(mysqli $conn, int $service_id): ?string
{
    // Prepare the SQL query
    $stmt = mysqli_prepare($conn, "SELECT title FROM services WHERE service_id = ?");
    mysqli_stmt_bind_param($stmt, "i", $service_id);
    // Execute the query
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $row = mysqli_fetch_assoc($result);
    mysqli_stmt_close($stmt);
    return $row ? $row['title'] : null;
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
    global $conn;

    echo '<tr>';
    echo '<td>' . $row['Appointment_id'] . '</td>';
    echo '<td>' . ($row2 ? $row2['First_name'] . ' ' . $row2['Middle_name'] . ' ' . $row2['Last_name'] : '') . '</td>';
    echo '<td>' . ($row2 ? $row2['Phone'] : '') . '</td>';

    // Retrieve the service title
    $service_id = $row['Service_id'];
    $service_title = fetchServiceTitle($conn, $service_id);
    echo '<td>' . ($service_title ? $service_title : '') . '</td>';

    echo '<td>' . $row['Date'] . '</td>';
    echo '<td>' . $row['total_price'] . '</td>';
    echo '<td style="color: ' . $color . ';">' . ($row['Urgent'] == 1 ? $emergencyLabel : $notEmergencyLabel) . '</td>';
    echo '<td>' . $row['status'] . '</td>';
    echo '<td><a href="Orders_Details.php?appointment_id=' . $row['Appointment_id'] . '">تفاصيل</a></td>';
    echo '</tr>';

    // Store the appointment_id in the session for later use in Orders_Details.php
    $_SESSION['appointment_id'] = $row['Appointment_id'];
}
