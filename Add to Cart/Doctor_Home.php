<!DOCTYPE html>
<html>
<head>
    <title>Doctor's Information</title>
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

<h2>Choose your Doctor from the below list</h2>

<table border="1">
    <tr>
        <th>Doctor's ID</th>
        <th>Doctor's Name</th>
        <th>Phone Number for Appointment</th>
        <th>Doctor's Degree</th>
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
    $sql = "SELECT DoctorID, DoctorName,PhoneNumber,Degree FROM doctor";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["DoctorID"] . "</td>";
            echo "<td>" . $row["DoctorName"] . "</td>";
            echo "<td>" . $row["PhoneNumber"] . "</td>";
            echo "<td>" . $row["Degree"] . "</td>";
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
