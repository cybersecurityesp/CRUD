<?php
include 'db.php';
$id = $GET['id'];

$sql = "DELETE * FROM users WHERE id=$id";

if ($conn->query($sql) === TRUE) {

    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>