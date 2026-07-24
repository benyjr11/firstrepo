<?php
// Mock PHP Bug Diagnostics & System Status Monitor
$system_status = [
    "environment"   => "Production (PHP 8.2)",
    "database"      => "MySQL 8.0 — Connected",
    "active_session"=> "Secure (SSL Active)",
    "response_time" => "24ms"
];

$bug_logs = [
    [
        "issue_id"    => "ERR-4021",
        "description" => "SQL Syntax Exception in query builder",
        "component"   => "Database / MySQL",
        "severity"    => "High",
        "status"      => "Resolved",
        "badge"       => "success"
    ],
    [
        "issue_id"    => "ERR-4022",
        "description" => "CSS Responsive Flexbox Overflow on Mobile",
        "component"   => "Frontend / HTML & CSS",
        "severity"    => "Medium",
        "status"      => "Fixed & Tested",
        "badge"       => "success"
    ],
    [
        "issue_id"    => "ERR-4023",
        "description" => "PHP Session Timeout Handling & Middleware Leak",
        "component"   => "Backend / PHP Core",
        "severity"    => "Critical",
        "status"      => "Patched",
        "badge"       => "success"
    ],
    [
        "issue_id"    => "ERR-4024",
        "description" => "REST API CORS Header Injection Error",
        "component"   => "API Integration",
        "severity"    => "Low",
        "status"      => "Resolved",
        "badge"       => "success"
    ],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Core Engine Diagnostics — Bug Resolution Console</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=JetBrains+Mono:wght@500;700&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --surface-glass: rgba(255, 255, 255, 0.78);
            --border-glass: rgba(255, 255, 255, 0.9);
            --shadow-glitter: 0 20px 40px -15px rgba(100, 116, 139, 0.12), 0 0 30px rgba(255, 255, 255, 0.8);
            --text-dark: #0f172a;
            --text-muted: #64748b;
            --primary-accent: #0284c7;
            --code-font: 'JetBrains Mono', monospace;
        }

        * { box-sizing: border-box; margin: 0; padding: 0; font-family: 'Plus Jakarta Sans', sans-serif; }

        /* Bright Metallic Mesh Background */
        body { 
            display: flex; 
            background-color: #f1f5f9;
            background-image: 
                radial-gradient(at 10% 10%, rgba(224, 242, 254, 0.8) 0px, transparent 50%),
                radial-gradient(at 90% 15%, rgba(243, 232, 255, 0.9) 0px, transparent 50%),
                radial-gradient(at 50% 90%, rgba(238, 242, 255, 0.8) 0px, transparent 60%),
                radial-gradient(at 80% 85%, rgba(255, 255, 255, 1) 0px, transparent 40%);
            background-attachment: fixed;
            color: var(--text-dark); 
            min-height: 100vh; 
            -webkit-font-smoothing: antialiased;
        }

        /* Sidebar */
        .sidebar { 
            width: 270px; 
            background: rgba(255, 255, 255, 0.65);
            backdrop-filter: blur(20px);
            border-right: 1px solid rgba(226, 232, 240, 0.8); 
            padding: 32px 20px; 
            display: flex; 
            flex-direction: column; 
            gap: 24px; 
            box-shadow: 10px 0 30px rgba(0, 0, 0, 0.02);
        }

        .brand-container {
            display: flex;
            align-items: center;
            gap: 12px;
            padding-bottom: 24px;
            border-bottom: 1px solid rgba(226, 232, 240, 0.8);
        }

        .brand-icon {
            width: 38px;
            height: 38px;
            background: linear-gradient(135deg, #0284c7 0%, #0369a1 100%);
            border-radius: 10px;
            display: grid;
            place-items: center;
            box-shadow: 0 8px 16px rgba(2, 132, 199, 0.25);
        }

        .brand-title {
            font-size: 1.1rem;
            font-weight: 800;
            letter-spacing: -0.3px;
            color: var(--text-dark);
        }

        .nav-list { list-style: none; display: flex; flex-direction: column; gap: 6px; }

        .nav-link { 
            color: var(--text-muted); 
            text-decoration: none; 
            padding: 12px 14px; 
            border-radius: 12px; 
            font-size: 0.9rem; 
            font-weight: 600; 
            display: flex; 
            align-items: center; 
            gap: 12px;
            transition: all 0.2s ease;
        }

        .nav-link:hover { 
            background: rgba(255, 255, 255, 0.8); 
            color: var(--text-dark); 
        }

        .nav-link.active {
            background: #ffffff;
            color: var(--primary-accent);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        }

        /* Main Workspace */
        .main-content { flex: 1; padding: 40px 48px; max-width: 1300px; }

        .header-bar { 
            display: flex; 
            justify-content: space-between; 
            align-items: flex-end; 
            margin-bottom: 36px; 
        }

        .page-title { font-size: 1.8rem; font-weight: 800; letter-spacing: -0.8px; color: #0f172a; }
        .page-subtitle { font-size: 0.9rem; color: var(--text-muted); margin-top: 4px; }

        .btn-action { 
            background: #0f172a; 
            color: #ffffff; 
            border: none; 
            padding: 12px 22px; 
            border-radius: 12px; 
            font-weight: 700; 
            font-size: 0.88rem;
            cursor: pointer; 
            box-shadow: 0 10px 20px rgba(15, 23, 42, 0.15);
            display: flex;
            align-items: center;
            gap: 8px;
        }

        /* System Info Cards */
        .metrics-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 18px; margin-bottom: 32px; }

        .metric-card { 
            background: var(--surface-glass); 
            backdrop-filter: blur(16px);
            border: 1.5px solid var(--border-glass); 
            border-radius: 16px; 
            padding: 20px; 
            box-shadow: var(--shadow-glitter);
        }

        .metric-label { font-size: 0.75rem; color: var(--text-muted); font-weight: 700; text-transform: uppercase; letter-spacing: 0.5px; }
        .metric-value { font-size: 0.95rem; font-weight: 800; margin-top: 8px; color: #0f172a; font-family: var(--code-font); }

        /* Table Glass Container */
        .table-card { 
            background: var(--surface-glass); 
            backdrop-filter: blur(16px);
            border: 1.5px solid var(--border-glass); 
            border-radius: 20px; 
            overflow: hidden; 
            box-shadow: var(--shadow-glitter);
        }

        .table-title { padding: 20px 24px; border-bottom: 1px solid rgba(226, 232, 240, 0.8); font-size: 1rem; font-weight: 800; display: flex; justify-content: space-between; align-items: center; }

        table { width: 100%; border-collapse: collapse; text-align: left; }
        th { background: rgba(241, 245, 249, 0.5); padding: 16px 24px; color: var(--text-muted); font-size: 0.78rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.6px; }
        td { padding: 18px 24px; border-top: 1px solid rgba(226, 232, 240, 0.6); font-size: 0.9rem; }
        
        .code-tag { font-family: var(--code-font); font-size: 0.85rem; font-weight: 700; color: #0284c7; }

        /* Status Badges */
        .status-pill { padding: 6px 12px; border-radius: 20px; font-size: 0.75rem; font-weight: 700; display: inline-flex; align-items: center; gap: 6px; }
        .status-success { background: #d1fae5; color: #047857; }
        .severity-tag { font-size: 0.75rem; font-weight: 700; padding: 4px 8px; border-radius: 6px; background: #f1f5f9; color: #475569; }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <aside class="sidebar">
        <div class="brand-container">
            <div class="brand-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2.5"><path d="M16 18l6-6-6-6M8 6l-6 6 6 6"/></svg>
            </div>
            <span class="brand-title">DevEngine Lab</span>
        </div>

        <ul class="nav-list">
            <li>
                <a href="#" class="nav-link active">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                    Bug Console
                </a>
            </li>
            <li>
                <a href="#" class="nav-link">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><ellipse cx="12" cy="5" rx="9" ry="3"/><path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"/><path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"/></svg>
                    Database Fixes
                </a>
            </li>
            <li>
                <a href="#" class="nav-link">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
                    HTML/CSS Audits
                </a>
            </li>
            <li>
                <a href="#" class="nav-link">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="3"/><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"/></svg>
                    Settings
                </a>
            </li>
        </ul>
    </aside>

    <!-- Main Workspace -->
    <main class="main-content">
        <header class="header-bar">
            <div>
                <h1 class="page-title">Backend & Bug Fix Console</h1>
                <p class="page-subtitle">PHP Core Diagnostic Engine • HTML/CSS Layout Debugger • SQL Optimizer</p>
            </div>
            <button class="btn-action">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                Run System Audit
            </button>
        </header>

        <!-- System Status Bar -->
        <section class="metrics-grid">
            <div class="metric-card">
                <div class="metric-label">Environment</div>
                <div class="metric-value"><?php echo $system_status['environment']; ?></div>
            </div>
            <div class="metric-card">
                <div class="metric-label">Database Status</div>
                <div class="metric-value" style="color: #059669;"><?php echo $system_status['database']; ?></div>
            </div>
            <div class="metric-card">
                <div class="metric-label">Session Handler</div>
                <div class="metric-value"><?php echo $system_status['active_session']; ?></div>
            </div>
            <div class="metric-card">
                <div class="metric-label">Server Latency</div>
                <div class="metric-value" style="color: #0284c7;"><?php echo $system_status['response_time']; ?></div>
            </div>
        </section>

        <!-- Bug Resolution Table -->
        <div class="table-card">
            <div class="table-title">
                <span>Recent Bug Fixes & Code Optimizations</span>
                <span style="font-size: 0.8rem; font-weight: 600; color: #059669; background: #d1fae5; padding: 4px 10px; border-radius: 20px;">All Systems Operational</span>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>Log Ref</th>
                        <th>Issue Description</th>
                        <th>Target Tech Stack</th>
                        <th>Priority</th>
                        <th>Resolution Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($bug_logs as $log): ?>
                        <tr>
                            <td class="code-tag"><?php echo $log['issue_id']; ?></td>
                            <td><strong><?php echo $log['description']; ?></strong></td>
                            <td><span class="severity-tag"><?php echo $log['component']; ?></span></td>
                            <td><span style="font-weight: 700; font-size: 0.85rem; color: #475569;"><?php echo $log['severity']; ?></span></td>
                            <td>
                                <span class="status-pill status-<?php echo $log['badge']; ?>">
                                    ✓ <?php echo $log['status']; ?>
                                </span>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </main>

</body>
</html>