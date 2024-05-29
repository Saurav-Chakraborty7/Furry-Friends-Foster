<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "threef";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = 'SELECT bookrooms.Booked_ID, bookrooms.User_ID, Users.username, bookrooms.Room_Number, hostel.RoomFare
        FROM bookrooms
        JOIN Users ON bookrooms.User_ID = Users.id
        JOIN hostel ON bookrooms.Room_Number = hostel.RoomNumber';

$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Include your meta tags, stylesheets, and other head content -->
    <title>Booking Details</title>
</head>
<style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f7f1e3; /* Light beige background */
    margin: 0;
    padding: 0;
}

h1 {
    text-align: center;
    margin: 2rem 0;
    color: #333; /* Dark brown text color */
}

table {
    width: 80%;
    margin: 0 auto;
    border-collapse: collapse;
    border: 1px solid #8e8273; /* Brown border */
    background-color: #fff; /* White background for the table */
}

th, td {
    padding: 10px 20px;
    text-align: left;
    border-bottom: 1px solid #8e8273; /* Brown border-bottom for cells */
}

th {
    background-color: #f2dfd0; /* Light brown background for header cells */
    font-weight: bold;
    color: #333; /* Dark brown text color */
}

tr:nth-child(even) {
    background-color: #f2dfd0; /* Alternate row background color */
}
</style>
<body>
    <h1>Booking Details</h1>

    <table border="1">
        <tr>
            <th>Booked ID</th>
            <th>User ID</th>
            <th>Username</th>
            <th>Room Number</th>
            <th>Room Fare</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $row['Booked_ID']; ?></td>
                <td><?php echo $row['User_ID']; ?></td>
                <td><?php echo $row['username']; ?></td>
                <td><?php echo $row['Room_Number']; ?></td>
                <td><?php echo $row['RoomFare']; ?></td>
            </tr>
        <?php } ?>
    </table>

</body>

</html>
