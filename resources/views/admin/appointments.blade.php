<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard | Dr. Amit Saoji</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        *{box-sizing:border-box;margin:0;padding:0}
        body{font-family:'Poppins',sans-serif;background:#f4f6fb;color:#222;min-height:100vh;display:flex}

        /* Sidebar */
        .sidebar{width:250px;background:linear-gradient(180deg,#0b4c8c,#1976d2);color:#fff;min-height:100vh;padding:24px 0;position:sticky;top:0;height:100vh;display:flex;flex-direction:column}
        .sidebar .brand{padding:0 24px 24px;display:flex;align-items:center;gap:12px;border-bottom:1px solid rgba(255,255,255,.12)}
        .sidebar .brand i{background:#fff;color:#0b4c8c;width:40px;height:40px;border-radius:10px;display:grid;place-items:center;font-size:18px}
        .sidebar .brand span{font-size:16px;font-weight:700;line-height:1.2}
        .sidebar .brand small{display:block;font-size:11px;opacity:.75;font-weight:400}
        .nav-menu{padding:20px 12px;flex:1}
        .nav-menu a{display:flex;align-items:center;gap:12px;padding:12px 16px;color:#e3f2fd;text-decoration:none;border-radius:10px;font-size:14px;font-weight:500;margin-bottom:4px;transition:.2s}
        .nav-menu a:hover{background:rgba(255,255,255,.1)}
        .nav-menu a.active{background:rgba(255,255,255,.18);color:#fff}
        .nav-menu a i{width:18px;text-align:center}
        .sidebar-foot{padding:16px 24px;border-top:1px solid rgba(255,255,255,.12);font-size:12px;opacity:.8}

        /* Main */
        .main{flex:1;min-width:0}
        .topbar{background:#fff;padding:18px 30px;display:flex;justify-content:space-between;align-items:center;box-shadow:0 1px 3px rgba(0,0,0,.04);position:sticky;top:0;z-index:10}
        .topbar h1{font-size:20px;font-weight:700;color:#0b4c8c}
        .topbar h1 small{display:block;font-size:12px;font-weight:400;color:#6c757d;margin-top:2px}
        .user-box{display:flex;align-items:center;gap:14px}
        .user-box .who{text-align:right;font-size:13px}
        .user-box .who strong{display:block;color:#222}
        .user-box .who span{color:#6c757d;font-size:11px}
        .user-box .avatar{width:42px;height:42px;border-radius:50%;background:linear-gradient(135deg,#0b4c8c,#42a5f5);color:#fff;display:grid;place-items:center;font-weight:700}
        .logout-btn{background:#fff;border:1.5px solid #e53935;color:#e53935;padding:8px 16px;border-radius:8px;font-size:13px;font-weight:600;cursor:pointer;font-family:inherit;transition:.2s;display:flex;align-items:center;gap:6px}
        .logout-btn:hover{background:#e53935;color:#fff}

        .content{padding:28px 30px}

        /* Stats */
        .stats{display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:18px;margin-bottom:26px}
        .stat-card{background:#fff;border-radius:14px;padding:22px;box-shadow:0 2px 10px rgba(0,0,0,.04);display:flex;align-items:center;gap:16px;border-left:4px solid #1976d2;transition:.2s}
        .stat-card:hover{transform:translateY(-2px);box-shadow:0 8px 20px rgba(0,0,0,.08)}
        .stat-card.green{border-left-color:#2e7d32}
        .stat-card.orange{border-left-color:#ef6c00}
        .stat-card.purple{border-left-color:#6a1b9a}
        .stat-card .ico{width:52px;height:52px;border-radius:12px;display:grid;place-items:center;font-size:22px;background:#e3f2fd;color:#1976d2;flex-shrink:0}
        .stat-card.green .ico{background:#e8f5e9;color:#2e7d32}
        .stat-card.orange .ico{background:#fff3e0;color:#ef6c00}
        .stat-card.purple .ico{background:#f3e5f5;color:#6a1b9a}
        .stat-card .num{font-size:24px;font-weight:700;line-height:1.2}
        .stat-card .lbl{font-size:12px;color:#6c757d;text-transform:uppercase;letter-spacing:.5px;margin-top:2px}

        /* Card */
        .card{background:#fff;border-radius:14px;box-shadow:0 2px 10px rgba(0,0,0,.04);overflow:hidden}
        .card-head{padding:20px 24px;border-bottom:1px solid #eef1f5;display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;gap:12px}
        .card-head h3{font-size:16px;font-weight:700;color:#0b4c8c}
        .search-box{position:relative}
        .search-box i{position:absolute;left:12px;top:50%;transform:translateY(-50%);color:#9aa0a6;font-size:13px}
        .search-box input{padding:9px 14px 9px 34px;border:1.5px solid #e1e5ea;border-radius:8px;font-family:inherit;font-size:13px;width:240px;outline:none;transition:.2s}
        .search-box input:focus{border-color:#1976d2;box-shadow:0 0 0 3px rgba(25,118,210,.12)}

        /* Table */
        .tbl-wrap{overflow-x:auto}
        table{width:100%;border-collapse:collapse}
        th{background:#f8f9fc;padding:14px 20px;text-align:left;font-size:11px;font-weight:700;color:#6c757d;text-transform:uppercase;letter-spacing:.6px;border-bottom:1px solid #eef1f5}
        td{padding:16px 20px;border-bottom:1px solid #f1f3f7;font-size:14px;color:#333;vertical-align:middle}
        tbody tr{transition:.15s}
        tbody tr:hover{background:#f8faff}
        tbody tr:last-child td{border-bottom:none}
        .cell-name{display:flex;align-items:center;gap:12px}
        .cell-name .av{width:38px;height:38px;border-radius:50%;background:linear-gradient(135deg,#0b4c8c,#42a5f5);color:#fff;display:grid;place-items:center;font-weight:700;font-size:13px;flex-shrink:0}
        .cell-name strong{display:block;color:#0b4c8c;font-weight:600}
        .cell-email a,.cell-phone a{color:#555;text-decoration:none;font-size:13px;display:flex;align-items:center;gap:6px}
        .cell-email a:hover,.cell-phone a:hover{color:#1976d2}
        .cell-msg{max-width:260px;color:#666;font-size:13px;line-height:1.5}
        .cell-msg.empty{color:#bbb;font-style:italic}
        .badge-date{background:#e3f2fd;color:#1976d2;padding:5px 10px;border-radius:6px;font-size:12px;font-weight:500;white-space:nowrap}
        .btn-del{background:#fff;border:1.5px solid #e53935;color:#e53935;width:34px;height:34px;border-radius:8px;cursor:pointer;font-size:13px;display:inline-grid;place-items:center;transition:.2s;font-family:inherit}
        .btn-del:hover{background:#e53935;color:#fff}
        .flash{background:#e8f5e9;border:1px solid #a5d6a7;color:#2e7d32;padding:14px 18px;border-radius:10px;margin-bottom:18px;display:flex;align-items:center;gap:10px;font-size:14px;font-weight:500}
        .empty-state{padding:60px 20px;text-align:center;color:#9aa0a6}
        .empty-state i{font-size:48px;margin-bottom:14px;color:#d1d5db}
        .empty-state p{font-size:14px}

        @media (max-width:900px){
            body{flex-direction:column}
            .sidebar{width:100%;min-height:auto;height:auto;position:static;padding:16px 0}
            .nav-menu{display:flex;gap:6px;padding:10px;overflow-x:auto}
            .nav-menu a{margin:0;white-space:nowrap}
            .sidebar-foot{display:none}
            .content{padding:20px}
            .search-box input{width:100%}
        }
    </style>
</head>
<body>
    <aside class="sidebar">
        <div class="brand">
            <i class="fa-solid fa-user-doctor"></i>
            <span>Dr. Amit Saoji<small>Admin Dashboard</small></span>
        </div>
        <nav class="nav-menu">
            <a href="{{ route('admin.appointments') }}" class="active"><i class="fa-solid fa-calendar-check"></i> Appointments</a>
            <a href="{{ route('home') }}"><i class="fa-solid fa-house"></i> View Website</a>
        </nav>
        <div class="sidebar-foot">&copy; {{ date('Y') }} Ortho Care<br>Nagpur</div>
    </aside>

    <div class="main">
        <header class="topbar">
            <h1>Appointments<small>Manage all patient booking requests</small></h1>
            <div class="user-box">
                <div class="who">
                    <strong>{{ auth()->user()->name }}</strong>
                    <span>{{ auth()->user()->email }}</span>
                </div>
                <div class="avatar">{{ strtoupper(substr(auth()->user()->name,0,1)) }}</div>
                <form method="POST" action="{{ route('logout') }}">@csrf
                    <button class="logout-btn"><i class="fa-solid fa-right-from-bracket"></i> Logout</button>
                </form>
            </div>
        </header>

        <div class="content">
            @if(session('flash'))
                <div class="flash"><i class="fa-solid fa-circle-check"></i> {{ session('flash') }}</div>
            @endif
            @php
                $total = $appointments->count();
                $today = $appointments->filter(fn($a)=>$a->created_at->isToday())->count();
                $week  = $appointments->filter(fn($a)=>$a->created_at->isCurrentWeek())->count();
                $month = $appointments->filter(fn($a)=>$a->created_at->isCurrentMonth())->count();
            @endphp

            <div class="stats">
                <div class="stat-card">
                    <div class="ico"><i class="fa-solid fa-calendar-check"></i></div>
                    <div><div class="num">{{ $total }}</div><div class="lbl">Total Appointments</div></div>
                </div>
                <div class="stat-card green">
                    <div class="ico"><i class="fa-solid fa-calendar-day"></i></div>
                    <div><div class="num">{{ $today }}</div><div class="lbl">Today</div></div>
                </div>
                <div class="stat-card orange">
                    <div class="ico"><i class="fa-solid fa-calendar-week"></i></div>
                    <div><div class="num">{{ $week }}</div><div class="lbl">This Week</div></div>
                </div>
                <div class="stat-card purple">
                    <div class="ico"><i class="fa-solid fa-chart-line"></i></div>
                    <div><div class="num">{{ $month }}</div><div class="lbl">This Month</div></div>
                </div>
            </div>

            <div class="card">
                <div class="card-head">
                    <h3><i class="fa-solid fa-list"></i> All Requests</h3>
                    <div class="search-box">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <input type="text" id="searchInput" placeholder="Search name, email, phone...">
                    </div>
                </div>
                <div class="tbl-wrap">
                    <table id="apptTable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Patient</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Message</th>
                                <th>Submitted</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($appointments as $i => $a)
                                <tr>
                                    <td>{{ $i + 1 }}</td>
                                    <td>
                                        <div class="cell-name">
                                            <div class="av">{{ strtoupper(substr($a->name,0,1)) }}</div>
                                            <div><strong>{{ $a->name }}</strong></div>
                                        </div>
                                    </td>
                                    <td class="cell-email"><a href="mailto:{{ $a->email }}"><i class="fa-solid fa-envelope"></i> {{ $a->email }}</a></td>
                                    <td class="cell-phone"><a href="tel:{{ $a->phone }}"><i class="fa-solid fa-phone"></i> {{ $a->phone }}</a></td>
                                    <td class="cell-msg {{ $a->message ? '' : 'empty' }}">{{ $a->message ?: 'No message' }}</td>
                                    <td><span class="badge-date"><i class="fa-regular fa-clock"></i> {{ $a->created_at->format('d M Y, h:i A') }}</span></td>
                                    <td>
                                        <form method="POST" action="{{ route('admin.appointments.destroy', $a) }}" onsubmit="return confirm('Delete this appointment from {{ addslashes($a->name) }}?');" style="margin:0;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn-del" title="Delete"><i class="fa-solid fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr><td colspan="7"><div class="empty-state"><i class="fa-regular fa-calendar-xmark"></i><p>No appointments yet. Submissions will appear here.</p></div></td></tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('searchInput').addEventListener('keyup', function(){
            var q = this.value.toLowerCase();
            document.querySelectorAll('#apptTable tbody tr').forEach(function(row){
                row.style.display = row.innerText.toLowerCase().indexOf(q) > -1 ? '' : 'none';
            });
        });
    </script>
</body>
</html>
