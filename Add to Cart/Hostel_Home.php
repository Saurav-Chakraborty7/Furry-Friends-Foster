<!DOCTYPE html>
<html>
<head>
    <title>Hostel Table</title>
</head>
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #eeddbb; /* Wood color */
            margin: 0;
            padding: 0;
        }

        h2 {
            text-align: center;
            padding: 20px;
            color: #6b4226; /* Dark brown text color */
        }

        table {
            border-collapse: collapse;
            margin: 20px auto;
            background-color: #fff9e6; /* Light cream color */
            border: 1px solid #d3af78; /* Light brown border */
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            width: 80%;
        }

        th, td {
            padding: 15px;
            text-align: center;
            border-bottom: 1px solid #d3af78; /* Light brown border */
            color: #6b4226; /* Dark brown text color */
        }

        th {
            background-color: #f5e4b4; /* Pale yellow */
        }

        tr:nth-child(even) {
            background-color: #fff3d1; /* Lighter cream color */
        }
    </style>
<body>

<h2>Hostel Information for your Beloved Pets</h2>

<table border="1">
    <tr>
        <th>Room Number</th>
        <th>Room Fare</th>
        <th>Room Availability</th>
    </tr>

    <?php
    // Database connection parameters
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "threef";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Query to select data from the 'hostel' table
    $sql = "SELECT RoomNumber, RoomFare, RoomAvl FROM hostel";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["RoomNumber"] . "</td>";
            echo "<td>" . $row["RoomFare"] . "</td>";
            echo "<td>" . $row["RoomAvl"] . "</td>";
            echo "</tr>";
        }
    } else {
        echo "0 results";
    }

    // Close connection
    $conn->close();
    ?>
</table>

</body>
</html>
