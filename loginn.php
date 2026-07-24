
<?php
session_start();
include 'connect.php';
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM regiss WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $_SESSION['email'] = $email;
        header("Location: dashboard/index.php");
        exit(); 
    } else {
        echo "Invalid email or password";
    }
}
?>
