<?php
include 'connection_db.php';

$message_box = "";

if (isset($_POST['insertSub'])) 
 {

    $sql = "INSERT INTO bookings (full_name, phone_number, home_address, email_address, service, house_storey, preferred_date, inquiry_or_message) 
            VALUES (
            '$_POST[full_name]',
            '$_POST[phone_number]',
            '$_POST[email_address]',
            '$_POST[home_address]',
            '$_POST[service]',
            '$_POST[house_storey]',
            '$_POST[preferred_date]',
            '$_POST[inquiry_or_message]'
            
        )";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "<script>
                alert('Booking successfully recorded!');
                window.location.href = 'index.html';
              </script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>