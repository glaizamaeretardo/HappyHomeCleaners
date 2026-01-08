<?php
header("Content-Type: application/json");

require_once "connection_db.php";

$sql = "SELECT 
            id,
            full_name,
            email_address,
            phone_number,
            service,
            preferred_date,
            inquiry_or_message,
            status
        FROM bookings
        ORDER BY id ASC";

$result = mysqli_query($conn, $sql);

$data = [];

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
}

echo json_encode($data);
?>