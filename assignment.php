<!DOCTYPE html>
<?php
session_start();
include '../connect.php';
if (isset($_SESSION['email'])) {
   $email = $_SESSION['email'];
} else {
   $email = "Guest User"; // Fallback
}
$id = null;
$sql = "SELECT id FROM regiss WHERE email = '$email'";
$result = mysqli_query($conn, $sql);
if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $id = $row['id'];
} 
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignments Dashboard</title>
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
        .card {
            border: none;
            border-radius: 24px;
            background: #ffffff;
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.05), 0 8px 10px -6px rgba(0, 0, 0, 0.05);
            overflow: hidden;
        }