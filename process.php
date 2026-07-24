
<?php
include 'connect.php';
if (isset($_POST['register'])) {
    $name     = $_POST['name'];
    $email    = $_POST['email'];
    $password = $_POST['password'];
    $phone    = $_POST['phone'];
    $gender   = $_POST['gender'];
    $sql = "INSERT INTO regiss (name, email, password, phone, gender) 
            VALUES ('$name', '$email', '$password', '$phone', '$gender')";
    if (mysqli_query($conn, $sql)) {
        echo "Details submitted successfully";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
mysqli_close($conn);
?>
