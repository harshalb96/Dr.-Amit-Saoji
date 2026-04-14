<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | Dr. Amit Saoji</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        *{box-sizing:border-box;margin:0;padding:0}
        body{font-family:'Poppins',sans-serif;min-height:100vh;background:linear-gradient(135deg,#0b4c8c 0%,#1976d2 50%,#42a5f5 100%);display:flex;align-items:center;justify-content:center;padding:20px}
        .auth-wrap{width:100%;max-width:980px;background:#fff;border-radius:20px;box-shadow:0 25px 60px rgba(0,0,0,.25);overflow:hidden;display:grid;grid-template-columns:1fr 1.1fr;min-height:600px}
        .auth-side{background:linear-gradient(135deg,#0b4c8c,#1976d2);color:#fff;padding:50px 40px;display:flex;flex-direction:column;justify-content:space-between;position:relative;overflow:hidden}
        .auth-side::before{content:"";position:absolute;width:300px;height:300px;border-radius:50%;background:rgba(255,255,255,.08);top:-100px;right:-100px}
        .auth-side::after{content:"";position:absolute;width:200px;height:200px;border-radius:50%;background:rgba(255,255,255,.06);bottom:-60px;left:-60px}
        .brand{position:relative;z-index:1;font-size:22px;font-weight:700;display:flex;align-items:center;gap:10px}
        .brand i{background:#fff;color:#0b4c8c;width:42px;height:42px;border-radius:10px;display:grid;place-items:center;font-size:20px}
        .auth-side h2{position:relative;z-index:1;font-size:32px;font-weight:700;line-height:1.3;margin-bottom:14px}
        .auth-side p{position:relative;z-index:1;font-size:14px;opacity:.9;line-height:1.7}
        .auth-side .features{position:relative;z-index:1;list-style:none;margin-top:24px}
        .auth-side .features li{padding:8px 0;font-size:14px;display:flex;align-items:center;gap:10px}
        .auth-side .features i{color:#8bd3ff}
        .auth-form{padding:50px 50px;display:flex;flex-direction:column;justify-content:center}
        .auth-form h3{font-size:26px;font-weight:700;color:#0b4c8c;margin-bottom:6px}
        .auth-form .sub{color:#6c757d;font-size:14px;margin-bottom:24px}
        .field{margin-bottom:16px;position:relative}
        .field label{display:block;font-size:13px;font-weight:600;color:#333;margin-bottom:6px}
        .field .ico{position:absolute;left:14px;top:38px;color:#9aa0a6;font-size:14px}
        .field input{width:100%;padding:12px 14px 12px 40px;border:1.5px solid #e1e5ea;border-radius:10px;font-size:14px;font-family:inherit;transition:.2s;outline:none}
        .field input:focus{border-color:#1976d2;box-shadow:0 0 0 3px rgba(25,118,210,.15)}
        .field.err input{border-color:#e53935}
        .err-msg{color:#e53935;font-size:12px;margin-top:4px;display:block}
        .grid2{display:grid;grid-template-columns:1fr 1fr;gap:14px}
        .btn-submit{width:100%;padding:13px;background:linear-gradient(135deg,#0b4c8c,#1976d2);color:#fff;border:none;border-radius:10px;font-size:15px;font-weight:600;cursor:pointer;transition:.2s;font-family:inherit;margin-top:6px}
        .btn-submit:hover{transform:translateY(-1px);box-shadow:0 8px 20px rgba(25,118,210,.35)}
        .alt{text-align:center;margin-top:20px;font-size:14px;color:#6c757d}
        .alt a{color:#1976d2;font-weight:600;text-decoration:none}
        .back-home{position:absolute;top:20px;left:20px;color:#fff;font-size:13px;text-decoration:none;z-index:2;opacity:.9}
        .back-home:hover{opacity:1}
        @media (max-width:820px){.auth-wrap{grid-template-columns:1fr}.auth-side{display:none}.auth-form{padding:40px 28px}.grid2{grid-template-columns:1fr}}
    </style>
</head>
<body>
    <div class="auth-wrap">
        <div class="auth-side">
            <a href="{{ route('home') }}" class="back-home"><i class="fa-solid fa-arrow-left"></i> Back to Home</a>
            <div class="brand"><i class="fa-solid fa-user-doctor"></i> Dr. Amit Saoji</div>
            <div>
                <h2>Join the<br>Admin Team</h2>
                <p>Create your account to access the dashboard and manage patient appointment requests efficiently.</p>
                <ul class="features">
                    <li><i class="fa-solid fa-shield-halved"></i> Secure authentication</li>
                    <li><i class="fa-solid fa-gauge-high"></i> Real-time dashboard</li>
                    <li><i class="fa-solid fa-users"></i> Patient management</li>
                </ul>
            </div>
            <small style="position:relative;z-index:1;opacity:.7">&copy; {{ date('Y') }} Ortho Care, Nagpur</small>
        </div>
        <div class="auth-form">
            <h3>Create Account</h3>
            <p class="sub">Fill in your details to get started</p>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="field @error('name') err @enderror">
                    <label>Full Name</label>
                    <i class="fa-solid fa-user ico"></i>
                    <input type="text" name="name" value="{{ old('name') }}" placeholder="John Doe" required>
                    @error('name')<span class="err-msg">{{ $message }}</span>@enderror
                </div>
                <div class="field @error('email') err @enderror">
                    <label>Email Address</label>
                    <i class="fa-solid fa-envelope ico"></i>
                    <input type="email" name="email" value="{{ old('email') }}" placeholder="you@example.com" required>
                    @error('email')<span class="err-msg">{{ $message }}</span>@enderror
                </div>
                <div class="grid2">
                    <div class="field @error('password') err @enderror">
                        <label>Password</label>
                        <i class="fa-solid fa-lock ico"></i>
                        <input type="password" name="password" placeholder="Min 6 chars" required>
                        @error('password')<span class="err-msg">{{ $message }}</span>@enderror
                    </div>
                    <div class="field">
                        <label>Confirm Password</label>
                        <i class="fa-solid fa-lock ico"></i>
                        <input type="password" name="password_confirmation" placeholder="Repeat" required>
                    </div>
                </div>
                <button type="submit" class="btn-submit"><i class="fa-solid fa-user-plus"></i> Create Account</button>
            </form>
            <p class="alt">Already have an account? <a href="{{ route('login') }}">Sign in</a></p>
        </div>
    </div>
</body>
</html>
