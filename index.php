
<!DOCTYPE html>
<?php
 include '../connect.php';
session_start();
if (isset($_SESSION['email'])) {
   $email = $_SESSION['email'];
   $sql = "SELECT * FROM regiss WHERE email = '$email'";
   $result = $conn->query($sql);
   if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();
      $name = $row['name'];
   }
} else {
   $email = "Guest User"; // Fallback for display
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Profile Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
    <style>
        :root {
            --primary-gradient: linear-gradient(135deg, #6366f1 0%, #a855f7 100%);
            --sidebar-bg: #0f172a;
        }
        body {
            background-color: #f1f5f9;
            font-family: 'Inter', sans-serif;
            color: #1e293b;
        }
        .sidebar {
            min-height: 100vh;
            background: var(--sidebar-bg);
            color: #94a3b8;
            padding: 1.5rem 1rem;
            border-right: 1px solid rgba(255,255,255,0.05);
        }
        .sidebar h4 {
            color: #f8fafc;
            font-weight: 700;
            text-transform: uppercase;
            font-size: 0.9rem;
            letter-spacing: 2px;
            margin-bottom: 2rem;
        }
        .sidebar .nav-link {
            color: #94a3b8;
            font-weight: 500;
            padding: 12px 15px;
            margin-bottom: 5px;
            border-radius: 8px;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
        }
        .sidebar .nav-link i {
            margin-right: 12px;
            font-size: 1.2rem;
        }
        .sidebar .nav-link:hover, .sidebar .nav-link.active {
            background: rgba(255, 255, 255, 0.1);
            color: #fff;
        }
        .profile-container {
            margin-top: 2rem;
        }
        .card {
            border: none;
            border-radius: 24px;
            background: #ffffff;
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.05), 0 8px 10px -6px rgba(0, 0, 0, 0.05);
            overflow: hidden;
        }
        .card::before {
            content: "";
            display: block;
            height: 120px;
            background: var(--primary-gradient);
        }
        .profile-header {
            margin-top: -75px;
            padding-bottom: 2rem;
        }
        .profile-img {
            width: 140px;
            height: 140px;
            object-fit: cover;
            border: 6px solid #fff;
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
            background-color: #fff;
        }
        .info-row {
            padding: 1rem 1.5rem;
            border-bottom: 1px solid #f1f5f9;
            transition: background 0.2s;
        }
        .info-row:last-child { border-bottom: none; }
        .info-row:hover { background: #f8fafc; }
        .label-text {
            color: #64748b;
            font-size: 0.85rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        .value-text {
            color: #1e293b;
            font-weight: 500;
        }
        .btn-primary {
            background: var(--primary-gradient);
            border: none;
            padding: 10px 25px;
            border-radius: 12px;
            font-weight: 600;
            box-shadow: 0 4px 12px rgba(99, 102, 241, 0.3);
        }
            
        .btn-outline-danger {
            border-radius: 12px;
            padding: 10px 25px;
            font-weight: 600;
            border: 2px solid #fee2e2;
            color: #ef4444;
        }
    
        .btn-outline-danger:hover {
            background: #ef4444;
            border-color: #ef4444;
        }
    </style>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <?php include 'includes/sidebar.php';?> 
        <main class="col-md-10 ms-sm-auto px-md-5 py-4">
            <div class="d-flex justify-content-between align-items-center pb-3 mb-4 border-bottom">
                <h1 class="h3 fw-bold">Student Profile</h1>
                <span class="badge bg-light text-dark border p-2 px-3 rounded-pill shadow-sm">
                    <i class="bi bi-calendar3 me-2"></i> <?php echo date("M Y"); ?>
                </span>
            </div>
            <div class="row profile-container">
                <div class="col-xl-6 col-lg-8 mx-auto">
                    <div class="card shadow-lg">
                        <div class="card-body p-0">
                            <div class="profile-header text-center">
                                <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?auto=format&fit=crop&q=80&w=200" alt="Profile" class="rounded-circle profile-img mb-3">
                                <h2 class="fw-bold mb-1"><?php echo $name;?></h2>
                                <p class="text-muted small fw-medium">Student ID:#<?php echo $row['id']; ?></p>
                            </div>
                            <div class="px-2 pb-4">
                                <div class="row info-row mx-3 rounded-3">
                                    <div class="col-sm-4 label-text">Email</div>
                                    <div class="col-sm-8 value-text"><?php echo $email; ?></div>
                                </div>
                                <div class="row info-row mx-3 rounded-3">
                                    <div class="col-sm-4 label-text">Major</div>
                                    <div class="col-sm-8 value-text">Law</div>
                                </div>
                                <div class="row info-row mx-3 rounded-3">
                                    <div class="col-sm-4 label-text">Semester</div>
                                    <div class="col-sm-8 value-text">Spring 2026</div>
                                </div>
                            </div>
                            <!-- Action Buttons -->
                            <div class="text-center pb-5 pt-2">
                                <button class="btn btn-primary me-2" onclick="window.location.href='edit_profile.php'">
                                    <i class="bi bi-pencil-square me-2"></i>Edit Profile
                                </button>
                                <button class="btn btn-outline-danger" onclick="window.location.href='logout.php'">
                                    <i class="bi bi-box-arrow-right me-2"></i>Logout
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
