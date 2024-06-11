<?php
include 'db.php';

$sql = "SELECT id, name, last_name, birthday, location, country FROM users";
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
while($row = $results->fetch_object()) {

    ?>
<tr>
    <td>
        <?php echo $row->id; ?>
    </td>
    <td><?php echo $row->name ?></td>
    <td><?php echo $row->last_name ?></td>
    <td><?php echo $row->birthday ?></td>
    <td><?php echo $row->location ?></td>
    <td><?php echo $row->country ?></td>

    <td>
        <a href="update.php?id=<?php echo $row->id; ?>">Edit</a>
        <a href="delete.php?id=<?php echo $row->id; ?>"
            onclick="return confirm('Quieres eliminar este documento?')"">Delete</a>
    </td>
</tr>

<?php
}

$conn->close();}
?>