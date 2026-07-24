<?php
// PHP Backend Data - Formatted in NGN
$metrics = [
    "revenue"    => 18450000.00,
    "growth"     => "+22.4%",
    "orders"     => 342,
    "avg_ticket" => 53947.37
];

$transactions = [
    ["id" => "TXN-9021", "user" => "Chinedu Okonkwo",   "avatar" => "CO", "plan" => "Enterprise Suite", "amount" => 450000.00, "status" => "Completed", "badge" => "success"],
    ["id" => "TXN-9022", "user" => "Amina Bello",        "avatar" => "AB", "plan" => "Developer Pro",    "amount" => 125000.00, "status" => "Processing", "badge" => "warning"],
    ["id" => "TXN-9023", "user" => "Babajide Adeleke",  "avatar" => "BA", "plan" => "Custom Module",    "amount" => 850000.00, "status" => "Completed",  "badge" => "success"],
    ["id" => "TXN-9024", "user" => "Nneka Eze",          "avatar" => "NE", "plan" => "API Gateway Tier", "amount" => 250000.00, "status" => "Failed",     "badge" => "danger"],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vanguard Services — Management Console</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --surface-glass: rgba(255, 255, 255, 0.75);
            --border-glass: rgba(255, 255, 255, 0.9);
            --shadow-glitter: 0 20px 40px -15px rgba(100, 116, 139, 0.12), 0 0 30px rgba(255, 255, 255, 0.8);
            --text-dark: #0f172a;
            --text-muted: #64748b;
            --primary-accent: #0284c7;
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

        /* Frosted Crystal Sidebar */
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
            transition: all 0.2s ease;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .btn-action:hover {
            transform: translateY(-2px);
            box-shadow: 0 14px 24px rgba(15, 23, 42, 0.25);
        }

        /* Glittering Glass Cards */
        .metrics-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px; margin-bottom: 36px; }

        .metric-card { 
            background: var(--surface-glass); 
            backdrop-filter: blur(16px);
            border: 1.5px solid var(--border-glass); 
            border-radius: 20px; 
            padding: 24px; 
            box-shadow: var(--shadow-glitter);
            transition: transform 0.2s ease;
        }

        .metric-card:hover {
            transform: translateY(-3px);
        }

        .metric-header { display: flex; justify-content: space-between; align-items: center; }
        .metric-label { font-size: 0.8rem; color: var(--text-muted); font-weight: 700; text-transform: uppercase; letter-spacing: 0.6px; }
        .metric-pill { font-size: 0.75rem; font-weight: 700; color: #059669; background: #d1fae5; padding: 4px 10px; border-radius: 20px; }
        
        .metric-value { font-size: 1.85rem; font-weight: 800; margin-top: 12px; letter-spacing: -0.5px; color: #0f172a; }

        /* Table Glass Container */
        .table-card { 
            background: var(--surface-glass); 
            backdrop-filter: blur(16px);
            border: 1.5px solid var(--border-glass); 
            border-radius: 20px; 
            overflow: hidden; 
            box-shadow: var(--shadow-glitter);
        }

        .table-title { padding: 24px; border-bottom: 1px solid rgba(226, 232, 240, 0.8); font-size: 1rem; font-weight: 800; }

        table { width: 100%; border-collapse: collapse; text-align: left; }
        th { background: rgba(241, 245, 249, 0.5); padding: 16px 24px; color: var(--text-muted); font-size: 0.78rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.6px; }
        td { padding: 18px 24px; border-top: 1px solid rgba(226, 232, 240, 0.6); font-size: 0.9rem; }
        tr:hover td { background: rgba(255, 255, 255, 0.5); }

        /* User Avatar */
        .user-cell { display: flex; align-items: center; gap: 12px; }
        .avatar { width: 34px; height: 34px; background: #e0f2fe; border-radius: 50%; display: grid; place-items: center; font-size: 0.75rem; font-weight: 700; color: #0369a1; }

        /* Status Badges */
        .status-pill { padding: 6px 12px; border-radius: 20px; font-size: 0.75rem; font-weight: 700; display: inline-flex; align-items: center; gap: 6px; }
        
        .status-success { background: #d1fae5; color: #047857; }
        .status-warning { background: #fef3c7; color: #b45309; }
        .status-danger  { background: #fee2e2; color: #b91c1c; }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <aside class="sidebar">
        <div class="brand-container">
            <div class="brand-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2.5"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg>
            </div>
            <span class="brand-title">Vanguard Hub</span>
        </div>

        <ul class="nav-list">
            <li>
                <a href="#" class="nav-link active">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/></svg>
                    Overview
                </a>
            </li>
            <li>
                <a href="#" class="nav-link">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
                    Transactions
                </a>
            </li>
            <li>
                <a href="#" class="nav-link">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/></svg>
                    Modules
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
                <h1 class="page-title">Management Console</h1>
                <p class="page-subtitle">Production Server Environment • Real-time Monitoring</p>
            </div>
            <button class="btn-action">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
                New Entry
            </button>
        </header>

        <!-- Metric Grid -->
        <section class="metrics-grid">
            <div class="metric-card">
                <div class="metric-header">
                    <span class="metric-label">Gross Revenue</span>
                    <span class="metric-pill"><?php echo $metrics['growth']; ?></span>
                </div>
                <div class="metric-value">₦<?php echo number_format($metrics['revenue'], 2); ?></div>
            </div>

            <div class="metric-card">
                <div class="metric-header">
                    <span class="metric-label">Total Executions</span>
                </div>
                <div class="metric-value"><?php echo $metrics['orders']; ?></div>
            </div>

            <div class="metric-card">
                <div class="metric-header">
                    <span class="metric-label">Avg Ticket Size</span>
                </div>
                <div class="metric-value">₦<?php echo number_format($metrics['avg_ticket'], 2); ?></div>
            </div>
        </section>

        <!-- Data Table -->
        <div class="table-card">
            <div class="table-title">Recent System Activity</div>
            <table>
                <thead>
                    <tr>
                        <th>Transaction ID</th>
                        <th>Client Reference</th>
                        <th>Package Tier</th>
                        <th>Amount</th>
                        <th>Execution Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($transactions as $tx): ?>
                        <tr>
                            <td><strong style="color: #0284c7;"><?php echo $tx['id']; ?></strong></td>
                            <td>
                                <div class="user-cell">
                                    <div class="avatar"><?php echo $tx['avatar']; ?></div>
                                    <span><strong><?php echo $tx['user']; ?></strong></span>
                                </div>
                            </td>
                            <td><?php echo $tx['plan']; ?></td>
                            <td><strong>₦<?php echo number_format($tx['amount'], 2); ?></strong></td>
                            <td>
                                <span class="status-pill status-<?php echo $tx['badge']; ?>">
                                    <?php echo $tx['status']; ?>
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