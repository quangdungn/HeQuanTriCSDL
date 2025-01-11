<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập - MichelinDogs</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f36f22;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            text-align: center;
            background-color: #ffffff;
            color: #333;
            padding: 40px 30px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
            width: 90%;
            max-width: 400px;
        }

        .container h1 {
            font-size: 26px;
            margin-bottom: 20px;
            color: #f36f22;
            font-weight: bold;
        }

        form {
            margin-bottom: 20px;
        }

        form input {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 14px;
            box-sizing: border-box;
        }

        form input:focus {
            border-color: #f36f22;
            outline: none;
            box-shadow: 0 0 5px rgba(243, 111, 34, 0.5);
        }

        form button {
            background-color: #f36f22;
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 6px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
            font-weight: bold;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        form button:hover {
            background-color: #d55c1c;
        }

        form button:active {
            transform: scale(0.98);
        }

        .social-login {
            display: flex;
            justify-content: space-between;
            margin: 20px 0;
        }

        .social-login button {
            background-color: #ddd;
            border: none;
            padding: 10px 15px;
            border-radius: 6px;
            font-size: 14px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .social-login button:hover {
            background-color: #ccc;
        }

        .social-login button:active {
            transform: scale(0.98);
        }

        .back-link {
            margin-top: 20px;
            font-size: 14px;
        }

        .back-link a {
            color: #f36f22;
            text-decoration: none;
        }

        .back-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Đăng nhập</h1>
        <form id="loginForm">
            <input type="text" placeholder="Email" required>
            <input type="password" placeholder="Mật khẩu" required>
            {{-- <button type="submit">ĐĂNG NHẬP</button> --}}
            <button onclick=" window.location.href='{{ route('home') }}'">Đăng nhập</button>
            {{-- <a href="{{ route('home') }}">Đăng nhập</a> --}}
        </form>

        <div>Hoặc đăng nhập nhanh bằng:</div>
        <div class="social-login">
            <button>Facebook</button>
            <button>Google</button>
        </div>

        <div class="back-link">
            <a href="#">Quên mật khẩu?</a><br>
            Bạn chưa có tài khoản? <a href="{{ route('signup') }}">Đăng ký</a>
        </div>
    </div>
</body>
</html>
