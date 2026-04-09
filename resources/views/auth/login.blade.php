<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk – Skillio</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: 'Inter', system-ui, -apple-system, BlinkMacSystemFont, sans-serif;
            background: #f1f5f9;
            color: #0f172a;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        /* Wrapper full screen */
        .page-wrapper {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 24px 16px;
        }

        /* Logo mini di atas card */
        .logo-mini {
            font-size: 26px;
            font-weight: 800;
            color: #2563eb;
            margin-bottom: 18px;
            text-align: center;
        }

        /* Card login */
        .login-card {
            width: 100%;
            max-width: 420px;
            background: #ffffff;
            border-radius: 18px;
            padding: 28px 26px 26px;
            box-shadow: 0 10px 30px rgba(15, 23, 42, 0.12);
        }

        .login-title {
            font-size: 24px;
            font-weight: 800;
            margin-bottom: 6px;
            text-align: left;
        }

        .login-sub {
            font-size: 14px;
            color: #64748b;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 16px;
        }

        .label {
            display: block;
            font-size: 13px;
            font-weight: 600;
            color: #475569;
            margin-bottom: 6px;
        }

        .input {
            width: 100%;
            padding: 11px 12px;
            border-radius: 10px;
            border: 1px solid #cbd5e1;
            font-size: 14px;
            outline: none;
        }

        .input:focus {
            border-color: #2563eb;
            box-shadow: 0 0 0 1px rgba(37, 99, 235, 0.25);
        }

        .text-right {
            text-align: right;
            font-size: 13px;
            margin-top: 4px;
        }

        .link-small {
            color: #2563eb;
            font-weight: 600;
        }

        .login-button {
            width: 100%;
            margin-top: 12px;
            padding: 11px 14px;
            border-radius: 10px;
            border: none;
            background: #2563eb;
            color: #ffffff;
            font-size: 15px;
            font-weight: 700;
            cursor: pointer;
        }

        .login-button:hover {
            background: #1d4ed8;
        }

        .login-footer {
            margin-top: 18px;
            font-size: 14px;
            text-align: center;
            color: #64748b;
        }

        .login-footer a {
            color: #2563eb;
            font-weight: 700;
        }

        /* Kecilkan padding di HP */
        @media (max-width: 480px) {
            .login-card {
                padding: 22px 18px 20px;
                border-radius: 16px;
            }

            .login-title {
                font-size: 22px;
            }

            .logo-mini {
                font-size: 24px;
                margin-bottom: 14px;
            }
        }
    </style>
</head>
<body>

<div class="page-wrapper">

    <div class="logo-mini">
        <a href="{{ url('/') }}">Skillio</a>
    </div>

    <div class="login-card">
        <h1 class="login-title">Masuk ke akunmu</h1>
        <p class="login-sub">Akses kelas, simpan progres belajar, dan lanjutkan perjalanan kariermu.</p>

        <form action="#" method="POST">
            @csrf

            <div class="form-group">
                <label class="label" for="email">Email</label>
                <input id="email" type="email" name="email" class="input" placeholder="nama@email.com">
            </div>

            <div class="form-group">
                <label class="label" for="password">Kata sandi</label>
                <input id="password" type="password" name="password" class="input" placeholder="••••••••">
            </div>

            <div class="text-right">
                <a href="#" class="link-small">Lupa kata sandi?</a>
            </div>

            <button type="submit" class="login-button">
                Masuk
            </button>
        </form>

        <div class="login-footer">
            Belum punya akun? <a href="{{ url('/register') }}">Daftar gratis</a>
        </div>
    </div>

</div>

</body>
</html>
