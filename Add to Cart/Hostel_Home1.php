
<!DOCTYPE html>
<html>
<head>
    <title>Hostel Table</title>
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

        .book-button {
            background-color: #d43f3a;
            color: white;
            border: none;
            padding: 8px 20px;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .book-button:hover {
            background-color: #c9302c;
        }

        .filter-container {
            text-align: center;
            margin: 20px;
        }

        .filter-label {
            font-weight: bold;
            margin-right: 10px;
        }

        .filter-select {
            padding: 5px;
        }
    </style>
   <script>
        function bookRoom(roomNumber) {
        var userEmail = prompt("Please enter your email:");
        if (userEmail !== null && userEmail.trim() !== "") {
            if (confirm("Are you sure you want to book this room?")) {
                var xhr = new XMLHttpRequest();
                xhr.onreadystatechange = function () {
                    if (xhr.readyState === 4 && xhr.status === 200) {
                        alert("Room booked successfully. A confirmation email will be sent.");
                        location.reload();
                    }
                };
                xhr.open("GET", "update_room.php?roomNumber=" + roomNumber + "&email=" + encodeURIComponent(userEmail), true);
                xhr.send();
            }
        } else {
            alert("Please provide a valid email.");
        }
    }

        function applyFilter() {
            var selectedPetType = document.getElementById("petTypeFilter").value;
            var rows = document.getElementsByTagName("tr");

            for (var i = 1; i < rows.length; i++) {
                var row = rows[i];
                var petType = row.getElementsByTagName("td")[3].textContent; // Assuming Pet Type is the 4th column
                if (selectedPetType === "All" || petType === selectedPetType) {
                    row.style.display = "table-row";
                } else {
                    row.style.display = "none";
                }
            }
        }
    </script>
</head>
<body>

<h2>Hostel Information for your Beloved Pets</h2>

<div class="filter-container">
    <label for="petTypeFilter" class="filter-label">Filter by Pet Type:</label>
    <select id="petTypeFilter" class="filter-select" onchange="applyFilter()">
        <option value="All">All</option>
        <option value="Dog">Dog</option>
        <option value="Cat">Cat</option>
    </select>
</div>

<table>
    <tr>
        <th>Room Number</th>
        <th>Room Fare</th>
        <th>Room Availability</th>
        <th>Pet Type</th>
        <th></th>
    </tr>

    <?php
    // Database connection parameters
   
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "threef";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // $sql1 = "insert into bookrooms values (1,1)";
    // $conn->query($sql1);
    // $conn->error;
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Query to select data from the 'hostel' table
    $sql = "SELECT RoomNumber, RoomFare, RoomAvl,PetType FROM hostel";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            if ($row["RoomAvl"] === "YES") {
                echo "<tr>";
                echo "<td>" . $row["RoomNumber"] . "</td>";
                echo "<td>" . $row["RoomFare"] . "</td>";
                echo "<td>" . $row["RoomAvl"] . "</td>";
                echo "<td>" . $row["PetType"] . "</td>";
               
                
                echo "<td>";
                echo '<button class="book-button" onclick="bookRoom(' . $row["RoomNumber"] . ')">Book</button>';
                echo "</td>";
                
                echo "</tr>";
            }
        }
    } else {
        echo "<tr><td colspan='4'>No available rooms</td></tr>";
    }

    // Close connection
    $conn->close();
    ?>
</table>

</body>
</html>
