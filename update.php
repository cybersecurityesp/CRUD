<?php
include 'db.php';

if ($_SERVER ["REQUEST_METHOD"] == "POST")
        $id = $_POST['id'];
        $name = $_POST['name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $birthday = $_POST['birthday'];
        $location = $_POST['location'];
        $country = $_POST['country'];

        $sql = "UPDATE users SET name='$name',last_name='$last_name', email='$email', birthday='$birthday', location='$location', country='$country' WHERE id=$id";

        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $conn->error;
        }

        $conn->close();
?>

<!DOCTYPE html>
<html>
<body>

<h2>Update User</h2>
<form method="post" action="update.php">
  <input type="hidden" name="id" value="<?php echo $row->id ?>">
  Name: <input type="text" name="name" value="<?php echo $row->name ?>"><br><br>
  Last_Name: <input type="text" name="last_name" value="<?php echo $row->last_name ?>"><br><br>
  Email: <input type="text" name="email" value="<?php echo $row->email ?>"><br><br>
  Birthday: <input type="text" name="birthday" value="<?php echo $row->birthday ?>"><br><br>
  Location: <input type="text" name="location" value="<?php echo $row->location ?>"><br><br>
  Country: <input type="text" name="country" value="<?php echo $row->country ?>"><br><br>
  <input type="submit" value="Update">
</form>

</body>
</html>
