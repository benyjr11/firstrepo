
<!DOCTYPE html>
<html lang="en">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body, html {
      height: 100%;
      margin: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    ._regisse {
      /* Replace with your image path */
      background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('1cb4ac2b-0c3d-4af3-b4d6-7c9c1fd1a498.JPG');
      background-size: cover;
      background-position: center;
      background-attachment: fixed;
      min-height: 100vh;
      display: flex;
      align-items: center;
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
    }
    .form-label {
      font-size: 0.9rem;
      text-transform: uppercase;
      letter-spacing: 1px;
      color: #cbd5e0;
      margin-bottom: 0.5rem;
    }
    .custom-input {
      background: rgba(255, 255, 255, 0.1) !important;
      border: 1px solid rgba(255, 255, 255, 0.2) !important;
      color: #fff !important;
      padding: 12px 15px !important;
      border-radius: 10px !important;
      transition: all 0.3s ease-in-out;
    }
    .custom-input:focus {
      background: rgba(255, 255, 255, 0.2) !important;
      border-color: #0d6efd !important;
      box-shadow: 0 0 10px rgba(13, 110, 253, 0.5) !important;
      outline: none;
    }
    .btn-register {
      background: linear-gradient(135deg, #0d6efd 0%, #6610f2 100%);
      border: none;
      padding: 14px;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 1.5px;
      border-radius: 10px;
      margin-top: 1rem;
      transition: transform 0.2s, box-shadow 0.2s;
    }
    .btn-register:hover {
      transform: translateY(-2px);
      box-shadow: 0 10px 20px rgba(13, 110, 253, 0.4);
      background: linear-gradient(135deg, #0b5ed7 0%, #520dc2 100%);
    }
  </style>
</head>
<body>
<section class="_regisse">
  <div class="container py-5">
    <div class="row justify-content-center">
      <div class="col-lg-6">
        <div class="glass-form">
          <h1 class="display-5 fw-bold mb-4 text-center">Student Login</h1>
          <form action="loginn.php" method="post">
            <div class="mb-3">
              <label class="form-label">Email Address</label>
              <input type="email" name="email" class="form-control custom-input" placeholder="name@school.edu" required>
            </div>
            <div class="mb-3">
              <label class="form-label">Password</label>
              <input type="password" name="password" class="form-control custom-input" placeholder="••••••••" required>
            </div>
            <button type="submit" name="login" class="btn btn-primary w-100 btn-register">Login</button>
            <!-- Registration Link -->
            <p class="text-center mt-3">
              Don’t have an account? 
              <a href="page.php" class="text-primary fw-bold">Create Account</a>
            </p>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>

<head>
