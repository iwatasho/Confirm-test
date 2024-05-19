<!-- resources/views/auth/login.blade.php -->
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }
        .container h1 {
            margin-bottom: 20px;
        }
        .container input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .container button {
            width: 100%;
            padding: 10px;
            background-color: #8b6d5a;
            border: none;
            color: #fff;
            border-radius: 4px;
            cursor: pointer;
        }
        .container button:hover {
            background-color: #7a5c4a;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: #f5f5f5;
            border-bottom: 1px solid #ddd;
        }
        .header a {
            text-decoration: none;
            color: #8b6d5a;
            border: 1px solid #8b6d5a;
            padding: 5px 10px;
            border-radius: 4px;
        }
        .header a:hover {
            background-color: #8b6d5a;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>FashionablyLate</h1>
        <a href="{{ route('register') }}">register</a>
    </div>
    <div class="container">
        <h1>Login</h1>
        <form method="POST" action="{{
            <form method="POST" action="{{ route('login') }}">
            @csrf
            <input type="email" name="email" placeholder="メールアドレス" required autofocus>
            <input type="password" name="password" placeholder="パスワード" required>
            <button type="submit">ログイン</button>
        </form>
        @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors-all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>
</body>
</html>