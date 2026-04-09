<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar – Skillio</title>

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

        .page-wrapper {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 24px 16px;
        }

        .logo-mini {
            font-size: 26px;
            font-weight: 800;
            color: #2563eb;
            margin-bottom: 18px;
            text-align: center;
        }

        .logo-mini a {
            color: inherit;
        }

        .register-card {
            width: 100%;
            max-width: 440px;
            background: #ffffff;
            border-radius: 18px;
            padding: 28px 26px 26px;
            box-shadow: 0 10px 30px rgba(15, 23, 42, 0.12);
        }

        .register-title {
            font-size: 24px;
            font-weight: 800;
            margin-bottom: 6px;
        }

        .register-sub {
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

        .register-button {
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

        .register-button:hover {
            background: #1d4ed8;
        }

        .register-footer {
            margin-top: 18px;
            font-size: 14px;
            text-align: center;
            color: #64748b;
        }

        .register-footer a {
            color: #2563eb;
            font-weight: 700;
        }

        @media (max-width: 480px) {
            .register-card {
                padding: 22px 18px 20px;
                border-radius: 16px;
            }

            .register-title {
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

    <div class="register-card">
        <h1 class="register-title">Buat akun baru</h1>
        <p class="register-sub">Daftar untuk menyimpan progres belajar dan akses semua kelas di Skillio.</p>

        <form action="{{ route('register.process') }}" method="POST">
            @csrf

            <div class="form-group">
                <label class="label" for="name">Nama lengkap</label>
                <input id="name" type="text" name="name" class="input" placeholder="Nama lengkap kamu">
            </div>

            <div class="form-group">
                <label class="label" for="email">Email</label>
                <input id="email" type="email" name="email" class="input" placeholder="nama@email.com">
            </div>

            <div class="form-group">
                <label class="label" for="password">Kata sandi</label>
                <input id="password" type="password" name="password" class="input" placeholder="Minimal 8 karakter">
            </div>

            <div class="form-group">
                <label class="label" for="password_confirmation">Konfirmasi kata sandi</label>
                <input id="password_confirmation" type="password" name="password_confirmation" class="input" placeholder="Ulangi kata sandi">
            </div>

            <button type="submit" class="register-button">
                Daftar
            </button>
        </form>

        <div class="register-footer">
            Sudah punya akun? <a href="{{ route('login') }}">Masuk</a>
        </div>
    </div>

</div>

</body>
</html>
