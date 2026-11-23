<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Biodata Diri')</title>
    <style>
        :root { color-scheme: light; font-family: Inter, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif; color: #172033; background: #f3f6fb; }
        * { box-sizing: border-box; }
        body { margin: 0; min-height: 100vh; background: radial-gradient(circle at top left, #e0eaff, transparent 35%), #f3f6fb; }
        a { color: inherit; }
        .topbar { display: flex; justify-content: space-between; align-items: center; gap: 16px; max-width: 1000px; margin: auto; padding: 26px 24px; }
        .brand { color: #3349a8; font-weight: 800; letter-spacing: -.03em; text-decoration: none; }
        .nav-link { color: #53617a; font-size: .92rem; font-weight: 650; text-decoration: none; }
        .nav-link:hover { color: #3349a8; }
        main { width: min(100% - 32px, 760px); margin: 36px auto 72px; }
        .card { padding: clamp(24px, 5vw, 48px); border: 1px solid #e6eaf2; border-radius: 24px; background: rgba(255,255,255,.94); box-shadow: 0 20px 60px rgba(37, 54, 91, .08); }
        .eyebrow { margin: 0 0 12px; color: #536cc5; font-size: .78rem; font-weight: 800; letter-spacing: .14em; text-transform: uppercase; }
        h1 { margin: 0; color: #172033; font-size: clamp(2rem, 7vw, 3.4rem); line-height: 1.08; letter-spacing: -.055em; }
        .welcome { margin: 14px 0 30px; color: #69758b; font-size: 1.05rem; line-height: 1.7; }
        .details { display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 14px; margin: 30px 0; }
        .detail { min-width: 0; padding: 16px; border: 1px solid #edf0f6; border-radius: 14px; background: #fafbfe; }
        .detail-label { display: block; margin-bottom: 7px; color: #8791a5; font-size: .75rem; font-weight: 750; letter-spacing: .08em; text-transform: uppercase; }
        .detail-value { overflow-wrap: anywhere; color: #29344a; font-weight: 600; line-height: 1.5; }
        .about { margin-top: 28px; padding-top: 24px; border-top: 1px solid #edf0f6; }
        .about h2 { margin: 0 0 10px; font-size: 1.1rem; }
        .about p { margin: 0; color: #69758b; line-height: 1.8; white-space: pre-line; }
        .form-grid { display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 18px; margin-top: 28px; }
        .field { display: flex; flex-direction: column; gap: 7px; }
        .field.full { grid-column: 1 / -1; }
        label { color: #46536b; font-size: .88rem; font-weight: 700; }
        input, textarea { width: 100%; padding: 12px 13px; border: 1px solid #dce2ed; border-radius: 10px; color: #172033; background: #fff; font: inherit; }
        input:focus, textarea:focus { border-color: #667eea; outline: 3px solid #667eea22; }
        textarea { min-height: 110px; resize: vertical; }
        .button { display: inline-flex; align-items: center; justify-content: center; padding: 12px 18px; border: 0; border-radius: 10px; background: #4358c5; color: #fff; cursor: pointer; font: inherit; font-weight: 750; text-decoration: none; }
        .button:hover { background: #3448ad; }
        .actions { display: flex; flex-wrap: wrap; gap: 12px; margin-top: 24px; }
        .notice { margin: 20px 0 0; padding: 12px 14px; border-radius: 10px; background: #e9f8ef; color: #216b3b; }
        .errors { margin: 20px 0 0; padding: 14px 18px; border-radius: 10px; background: #fff0ef; color: #a52c26; }
        @media (max-width: 560px) { .topbar { padding: 20px 18px; } main { margin-top: 18px; } .details, .form-grid { grid-template-columns: 1fr; } }
    </style>
</head>
<body>
    <header class="topbar">
        <a class="brand" href="{{ route('home') }}">Biodata Diri</a>
        <a class="nav-link" href="{{ route('admin.biodata.edit') }}">Kelola Biodata</a>
    </header>
    <main>
        @yield('content')
    </main>
</body>
</html>
