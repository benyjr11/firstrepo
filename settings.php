
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Settings</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <style>
    :root {
      --bg-dark: #1a1d21;
      --card-bg: #24282d;
      --sidebar-bg: #2c3136;
      --text-muted: #9ba3af;
      --accent-blue: #3d8bfd;
      --input-bg: #2c3136;
    }
    
    body {
      background: radial-gradient(circle at top right, #2c3e50, #000000);
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      font-family: 'Inter', -apple-system, sans-serif;
      color: #ffffff;
      margin: 20px;
    }
    .settings-container {
      background: var(--card-bg);
      border-radius: 24px;
      overflow: hidden;
      box-shadow: 0 50px 100px rgba(0, 0, 0, 0.5);
      border: 1px solid rgba(255, 255, 255, 0.05);
      width: 100%;
      max-width: 1100px;
      display: flex;
      min-height: 700px;
    }
    /* Sidebar */
    .sidebar {
      background: var(--sidebar-bg);
      width: 280px;
      border-right: 1px solid rgba(255, 255, 255, 0.05);
      padding: 2rem 0;
      flex-shrink: 0;
    }
    .sidebar-header {
      padding: 0 2rem 1.5rem;
      border-bottom: 1px solid rgba(255, 255, 255, 0.05);
      margin-bottom: 1.5rem;
    }
    .list-group-item {
      background: transparent !important;
      color: var(--text-muted) !important;
      border: none !important;
      padding: 0.8rem 2rem;
      font-size: 0.9rem;
      transition: all 0.3s ease;
      display: flex;
      align-items: center;
      cursor: pointer;
      text-decoration: none;
    }
    .list-group-item:hover {
      color: #fff !important;
      background: rgba(255, 255, 255, 0.03) !important;
    }
    .list-group-item.active {
      color: var(--accent-blue) !important;
      background: rgba(61, 139, 253, 0.1) !important;
      border-left: 4px solid var(--accent-blue) !important;
    }
    .section-title {
      font-size: 0.7rem;
      text-transform: uppercase;
      letter-spacing: 1.5px;
      color: #555e69;
      padding: 1.5rem 2rem 0.5rem;
      font-weight: 700;
    }
    /* Main Content */
    .main-content {
      flex: 1;
      background: linear-gradient(145deg, #24282d, #1e2125);
      padding: 3rem;
      overflow-y: auto;
    }
    .tab-pane {
      display: none;
      animation: fadeIn 0.4s ease-out;
    }
    .tab-pane.active-pane {
      display: block;
    }
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(10px); }
      to { opacity: 1; transform: translateY(0); }
    }
    /* Form Elements Styling */
    .form-label { color: var(--text-muted); font-size: 0.85rem; margin-bottom: 0.5rem; }
    
    .form-control, .form-select {
      background-color: var(--input-bg);
      border: 1px solid rgba(255,255,255,0.1);
      color: white;
      border-radius: 10px;
      padding: 0.75rem;
    }
    .form-control:focus {
      background-color: var(--input-bg);
      color: white;
      border-color: var(--accent-blue);
      box-shadow: 0 0 0 0.25rem rgba(61, 139, 253, 0.25);
    }
    .btn-primary {
      background-color: var(--accent-blue);
      border: none;
      padding: 0.7rem 2rem;
      border-radius: 10px;
      font-weight: 600;
    }
    .table { color: white; border-color: rgba(255,255,255,0.05); }
    .table thead { color: var(--text-muted); font-size: 0.8rem; text-transform: uppercase; }
    .accent-dot {
      width: 8px; height: 8px; background: #3d8bfd;
      border-radius: 50%; display: inline-block;
      margin-right: 8px; box-shadow: 0 0 10px #3d8bfd;
    }
  </style>
</head>
<body>
<div class="settings-container">
  <aside class="sidebar">
    <div class="sidebar-header">
      <h5 class="mb-0 fw-bold"><span class="accent-dot"></span>Settings</h5>
    </div>
    
    <div class="list-group">
      <div class="section-title">Identity</div>
      <a class="list-group-item active" data-target="profile"><i class="bi bi-person me-2"></i> Profile Info</a>
      <a class="list-group-item" data-target="academic"><i class="bi bi-mortarboard me-2"></i> Academic Data</a>
      <div class="section-title">Security</div>
      <a class="list-group-item" data-target="security"><i class="bi bi-fingerprint me-2"></i> Security</a>
      
      <div class="section-title">System</div>
      <a class="list-group-item" data-target="help"><i class="bi bi-life-preserver me-2"></i> Support</a>
    </div>
  </aside>
  <main class="main-content">
    
    <div id="profile" class="tab-pane active-pane">
      <h3 class="mb-4">Profile Information</h3>
      <div class="row g-4">
        <div class="col-md-6">
          <label class="form-label">First Name</label>
          <input type="text" class="form-control" value="Alex">
        </div>
        <div class="col-md-6">
          <label class="form-label">Last Name</label>
          <input type="text" class="form-control" value="Rivers">
        </div>
        <div class="col-12">
          <label class="form-label">Email Address</label>
          <input type="email" class="form-control" value="alex.rivers@university.edu">
        </div>
        <div class="col-md-6">
          <label class="form-label">Student ID</label>
          <input type="text" class="form-control" value="#STU-88291" readonly>
        </div>
        <div class="col-md-6">
          <label class="form-label">Phone Number</label>
          <input type="text" class="form-control" placeholder="+1 (555) 000-0000">
        </div>
        <div class="col-12 mt-5">
          <button class="btn btn-primary">Save Changes</button>
        </div>
      </div>
    </div>
    <div id="academic" class="tab-pane">
      <h3 class="mb-4">Current Enrollment</h3>
      <div class="table-responsive">
        <table class="table align-middle">
          <thead>
            <tr>
              <th>Course Code</th>
              <th>Subject</th>
              <th>Credits</th>
              <th>Grade</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>CS101</td>
              <td>Introduction to Computing</td>
              <td>4.0</td>
              <td><span class="badge bg-success">A</span></td>
            </tr>
            <tr>
              <td>MATH202</td>
              <td>Advanced Calculus</td>
              <td>3.0</td>
              <td><span class="badge bg-primary">B+</span></td>
            </tr>
            <tr>
              <td>PHYS110</td>
              <td>Quantum Mechanics</td>
              <td>4.0</td>
              <td><span class="badge bg-info">In Progress</span></td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="mt-4 p-3 rounded-4" style="background: rgba(255,255,255,0.03);">
        <p class="mb-0 text-muted">Cumulative GPA: <strong class="text-white">3.82</strong></p>
      </div>
    </div>
    <div id="security" class="tab-pane">
      <h3 class="mb-4">Security Settings</h3>
      <div class="list-group list-group-flush">
        <div class="d-flex justify-content-between align-items-center py-3 border-bottom border-secondary">
          <div>
            <h6 class="mb-0">Two-Factor Authentication</h6>
            <small class="text-muted">Secure your account with an extra layer of security.</small>
          </div>
          <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" checked>
          </div>
        </div>
        <div class="d-flex justify-content-between align-items-center py-3 border-bottom border-secondary">
          <div>
            <h6 class="mb-0">Biometric Login</h6>
            <small class="text-muted">Use Fingerprint or FaceID to access the portal.</small>
          </div>
          <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox">
          </div>
        </div>
      </div>
      <div class="mt-5">
        <h5 class="mb-3">Change Password</h5>
        <div class="mb-3">
          <input type="password" class="form-control mb-2" placeholder="Current Password">
          <input type="password" class="form-control" placeholder="New Password">
        </div>
        <button class="btn btn-outline-light btn-sm">Update Password</button>
      </div>
    </div>
    <div id="help" class="tab-pane">
      <h3 class="mb-4">Support Center</h3>
      <div class="row g-3">
        <div class="col-md-6">
          <div class="p-4 rounded-4 h-100" style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.05);">
            <i class="bi bi-chat-dots fs-2 text-primary"></i>
            <h5 class="mt-3">Live Chat</h5>
            <p class="small text-muted">Chat with the Registrar's office in real-time.</p>
            <a href="#" class="text-primary text-decoration-none small fw-bold">Start Conversation →</a>
          </div>
        </div>
        <div class="col-md-6">
          <div class="p-4 rounded-4 h-100" style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.05);">
            <i class="bi bi-file-earmark-text fs-2 text-primary"></i>
            <h5 class="mt-3">Documentation</h5>
            <p class="small text-muted">Browse guides on enrollment and financial aid.</p>
            <a href="#" class="text-primary text-decoration-none small fw-bold">View Guides →</a>
          </div>
        </div>
      </div>
    </div>
  </main>
</div>
<script>
  document.addEventListener('DOMContentLoaded', () => {
    const tabs = document.querySelectorAll('.list-group-item');
    const panes = document.querySelectorAll('.tab-pane');
    tabs.forEach(tab => {
      tab.addEventListener('click', (e) => {
        e.preventDefault();
        const targetId = tab.getAttribute('data-target');
        // Update Active Sidebar Link
        tabs.forEach(t => t.classList.remove('active'));
        tab.classList.add('active');
        // Update Visible Content Pane
        panes.forEach(pane => {
          if (pane.id === targetId) {
            pane.classList.add('active-pane');
          } else {
            pane.classList.remove('active-pane');
          }
        });
      });
    });
  });


  
</script>
</body>
</html>
