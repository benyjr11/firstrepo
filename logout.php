
<?php
session_start();
session_unset();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Logout</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex justify-content-center align-items-center vh-100 bg-light">
  <div class="text-center">
    <div class="alert alert-success shadow-lg rounded-3">
      <h4 class="alert-heading">You have successfully logged out!</h4>
      <p>Redirecting you to the login page...</p>
    </div>
  </div>
  <script>
    setTimeout(function(){
      window.location.href = 'page2.php'; // Redirect to login page
    }, 7000); // Redirect after 7 seconds
  </script>
</body>
</html>
