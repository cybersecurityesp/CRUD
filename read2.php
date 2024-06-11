<?php
include 'db.php';

$sql = "SELECT id, name, last_name, birthda, location, country FROM users";
$results = $conn->query($sql);

?>

<!DOCTYPE HTML>

<table border=1>
<tr>
<th>ID</th>
<th>Name</th>
<th>Last name</th>
<th>Birthday</th>
<th>Location</th>
<th>Country</th>
</tr>

<?php
if ($results->num_rows > 0){
while($row = $results->fetch_assoc()) {

     "<tr>
            <td>".$row["id"]."</td>
            <td>".$row["name"]."</td>
            <td>".$row["last_name"]."</td>
            <td>".$row["birthday"]."</td>
            <td>".$row["location"]."</td>
            <td>".$row["country"]."</td>

            <td>
                <a href='update.php?id=".$row["id"]."'>Edit</a>
                <a href='delete.php?id=".$row["id"]."'>Delete</a>
            </td>
        </tr>";

    }

    $conn->close();}

?>