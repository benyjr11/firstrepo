
<?php
session_start();
include 'connect.php';
if (isset($_POST['submit_assignment'])) {
    $id = $_POST['student_id'];
$answer = $_POST['answer'];
$subject = $_POST['subject'];
echo $id.$answer.$subject;
    // $sql = "SELECT * FROM regiss WHERE email = '$email' AND password = '$password'";
    // $result = $conn->query($sql);
    // if ($result->num_rows > 0) {
    //     $_SESSION['email'] = $email;
    //     header("Location: dashboard/index.php");
    //     exit(); 
    // } else {
    //     echo "Invalid email or password";
    // }
}
?>
