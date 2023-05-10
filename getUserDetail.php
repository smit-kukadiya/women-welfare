<?php
    $a = $_GET['a'];
    $conn = mysqli_connect("localhost", "root", "", "myData");
    if($conn === false){
        die("ERROR: Could not connect. "
            . mysqli_connect_error());
    }
    $sql = "SELECT * FROM details WHERE password='".$a."'";
    $result = mysqli_query($conn, $sql);
    echo "<table> 
            <tr>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Gender</th>
                <th>Hobby</th>
                <th>Mobile Number</th>
                <th>email</th>
            </tr>";
    while($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row['fName'] . "</td>";
        echo "<td>" . $row['lName'] . "</td>";
        echo "<td>" . $row['gender'] . "</td>";
        echo "<td>" . $row['hobby'] . "</td>";
        echo "<td>" . $row['number'] . "</td>";
        echo "<td>" . $row['mail'] . "</td>";
        echo "</tr>";
    }
    
    echo "</table>";
    mysqli_close($conn); 
?>