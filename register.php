
<?php
// Database connection
$conn = new mysqli("localhost", "root", "", "wemz");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Collect form data
$name = $_POST['name'];
$email = $_POST['email'];
// Store password as plain text (⚠️ not secure)
$password = $_POST['password'];
$dob = $_POST['dob'];
$matric = $_POST['matric'];
$department = $_POST['department'];
$gender = $_POST['gender'];
$level = $_POST['level'];
// Check if user already exists in regiss table
$sql = "SELECT * FROM regiss WHERE email='$email' OR matric='$matric'";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Status</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body, html {
      height: 100%;
      margin: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    ._regisse {
      background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('1cb4ac2b-0c3d-4af3-b4d6-7c9c1fd1a498.JPG');
      background-size: cover;
      background-position: center;
      background-attachment: fixed;
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      color: #fff;
    }
    .glass-form {
      backdrop-filter: blur(12px) saturate(180%);
      -webkit-backdrop-filter: blur(12px) saturate(180%);
      background-color: rgba(255, 255, 255, 0.08);
      border-radius: 20px;
      border: 1px solid rgba(255, 255, 255, 0.2);
      padding: 3rem;
      box-shadow: 0 25px 50px rgba(0,0,0,0.3);
      text-align: center;
      max-width: 600px;
    }
    .status-message {
      padding: 20px;
      border-radius: 12px;
      margin-bottom: 20px;
      font-weight: bold;
      font-size: 1.3rem;
      animation: fadeIn 1s ease-in-out;
    }
    .status-success {
      background: rgba(0, 180, 255, 0.15);
      border: 1px solid #00b4ff;
      color: #00b4ff;
      text-shadow: 0 0 8px rgba(0,180,255,0.7);
    }
    .status-error {
      background: rgba(255, 0, 0, 0.15);
      border: 1px solid #ff4d4d;
      color: #ff4d4d;
      text-shadow: 0 0 8px rgba(255,77,77,0.7);
    }
    @keyframes fadeIn {
      from {opacity: 0; transform: scale(0.95);}
      to {opacity: 1; transform: scale(1);}
    }
  </style>
</head>
<body>
<section class="_regisse">
  <div class="glass-form">
    <?php
    if ($result->num_rows > 0) {
        echo "<div class='status-message status-error'>User already exists!</div>";
        echo "<p>Please <a href='page2.php' class='text-primary fw-bold'>go to login</a>.</p>";
    } else {
        // Insert new user into regiss table
        $sql = "INSERT INTO regiss (name, email, password, dob, matric, department, gender, level) 
                VALUES ('$name', '$email', '$password', '$dob', '$matric', '$department', '$gender', '$level')";
        if ($conn->query($sql) === TRUE) {
            echo "<div class='status-message status-success'>Account successfully created!</div>";
            echo "<p>Proceed to <a href='page2.php' class='text-primary fw-bold'>login</a>.</p>";
        } else {
            echo "<div class='status-message status-error'>Error creating account: " . $conn->error . "</div>";
        }
    }
    $conn->close();
    ?>
  </div>
</section>
</body>
</html>
