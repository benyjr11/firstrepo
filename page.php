
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Registration Form</title>
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
    select.custom-input option {
      background-color: #212529;
      color: white;
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
    .benefit-list li {
      margin-bottom: 15px;
      list-style: none;
      display: flex;
      align-items: center;
    }
    .benefit-list li::before {
      content: '✓';
      margin-right: 15px;
      color: #0d6efd;
      font-weight: bold;
      font-size: 1.2rem;
    }
  </style>
</head>
<body>
<section class="_regisse">
  <div class="container py-5">
    <div class="row align-items-center g-5">
      <div class="col-lg-6">
        <h1 class="display-4 fw-bold mb-4">REGISTER AS A <span class="text-primary">STUDENT</span></h1>
        <p class="lead opacity-75 mb-5">Welcome to our academic community! Gain access to resources that support your learning journey and connect with peers.</p>
        
        <h3 class="h4 mb-4 fw-bold">BENEFITS</h3>
        <ul class="benefit-list p-0">
          <li>Access to course materials and resources</li>
          <li>Personalized tracking dashboard</li>
          <li>Direct link to lecturers and classmates</li>
          <li>Exclusive event and workshop updates</li>
        </ul>
      </div>
      <div class="col-lg-6">
        <div class="glass-form">
          <form action="register.php" method="post">
            <div class="row">
              <div class="col-md-6 mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control custom-input" placeholder="John Doe" required>
              </div>
              <div class="col-md-6 mb-3">
                <label class="form-label">Email Address</label>
                <input type="email" name="email" class="form-control custom-input" placeholder="name@school.edu" required>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control custom-input" placeholder="••••••••" required>
              </div>
              <div class="col-md-6 mb-3">
                <label class="form-label">Date of Birth</label>
                <input type="date" name="dob" class="form-control custom-input" required>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label class="form-label">Matric Number</label>
                <input type="text" name="matric" class="form-control custom-input" placeholder="PH/2026/001" required>
              </div>
              <div class="col-md-6 mb-3">
                <label class="form-label">Department</label>
                <input type="text" name="department" class="form-control custom-input" placeholder="e.g. Computer Science" required>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label class="form-label">Gender</label>
                <select name="gender" class="form-select custom-input" required>
                  <option value="" selected disabled>Select...</option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                </select>
              </div>
              <div class="col-md-6 mb-4">
                <label class="form-label">Level</label>
                <select name="level" class="form-select custom-input" required>
                  <option value="" selected disabled>Select...</option>
                  <option value="100">100 Level</option>
                  <option value="200">200 Level</option>
                  <option value="300">300 Level</option>
                  <option value="400">400 Level</option>
                  <option value="500">500 Level</option>
                </select>
              </div>
            </div>
            <button type="submit" value="login" name="login" class="btn btn-primary w-100 btn-register">Create Account</button>
            <p class="text-center mt-3">
              Already have an account? 
              <a href="page2.php" class="text-primary fw-bold">Login</a>
            </p>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>
