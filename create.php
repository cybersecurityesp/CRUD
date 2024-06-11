<?php
include 'db.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $birthday = $_POST['birthday'];
    $location = $_POST['location'];
    $country = $_POST['country'];

    $sql = "INSERT INTO users (name, last_name, email, birthday, location, country) VALUES ('$name', '$last_name', '$email', '$birthday', '$location', '$country')";
    $result = $conn->query($sql);

    if ($result === false) {
        die("Error: " . $conn->error);
    }
}
?>

<!DOCTYPE HTML>
<html>
<body>

<h1>Creación de Usuario</h1>
<form method="post" action="create.php">
    Name: <input type="text" name="name"><br><br>
    Last_name: <input type="text" name="last_name"><br><br>
    Email: <input type="text" name="email"><br><br>
    Birthday: <input type="text" name="birthday"><br><br>
    Location: <input type="text" name="location"><br><br>
    Country: <input type="text" name="country"><br><br>
    <input type="submit" value="Create">
</form>



</html>
</body>