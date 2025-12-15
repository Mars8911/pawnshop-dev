<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>修改密碼 - 後台管理系統</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
            background: #f5f5f5;
        }

        .header {
            background: white;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 20px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header h1 {
            color: #333;
            font-size: 24px;
        }

        .user-info {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .user-info span {
            color: #666;
            font-size: 14px;
        }

        .btn-home {
            padding: 8px 20px;
            background: #007bff;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 14px;
            text-decoration: none;
            display: inline-block;
            transition: background 0.3s;
        }

        .btn-home:hover {
            background: #0056b3;
        }

        .btn-logout {
            padding: 8px 20px;
            background: #dc3545;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 14px;
            text-decoration: none;
            display: inline-block;
            transition: background 0.3s;
        }

        .btn-logout:hover {
            background: #c82333;
        }

        .container {
            max-width: 600px;
            margin: 40px auto;
            padding: 0 20px;
        }

        .form-card {
            background: white;
            border-radius: 12px;
            padding: 40px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .form-card h2 {
            color: #333;
            font-size: 28px;
            margin-bottom: 30px;
            text-align: center;
        }

        .form-group {
            margin-bottom: 24px;
        }

        .form-group label {
            display: block;
            color: #333;
            font-weight: 500;
            margin-bottom: 8px;
            font-size: 14px;
        }

        .form-group input {
            width: 100%;
            padding: 12px 16px;
            border: 2px solid #e0e0e0;
            border-radius: 8px;
            font-size: 16px;
            transition: border-color 0.3s;
        }

        .form-group input:focus {
            outline: none;
            border-color: #007bff;
        }

        .form-group .error {
            color: #dc3545;
            font-size: 14px;
            margin-top: 6px;
        }

        .btn-submit {
            width: 100%;
            padding: 14px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: transform 0.2s, box-shadow 0.2s;
            margin-top: 10px;
        }

        .btn-submit:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(102, 126, 234, 0.4);
        }

        .btn-submit:active {
            transform: translateY(0);
        }

        .btn-cancel {
            width: 100%;
            padding: 14px;
            background: #6c757d;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.3s;
            margin-top: 10px;
            text-decoration: none;
            display: block;
            text-align: center;
        }

        .btn-cancel:hover {
            background: #5a6268;
        }

        .success-message {
            background: #d4edda;
            color: #155724;
            padding: 12px;
            border-radius: 8px;
            margin-bottom: 20px;
            font-size: 14px;
            border: 1px solid #c3e6cb;
        }

        .error-message {
            background: #fee;
            color: #c33;
            padding: 12px;
            border-radius: 8px;
            margin-bottom: 20px;
            font-size: 14px;
            border: 1px solid #fcc;
        }

        .error-message ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>後台管理系統</h1>
        <div class="user-info">
            <span>歡迎，{{ Auth::user()->name }}</span>
            <a href="{{ route('admin.dashboard') }}" class="btn-home">回到儀表板</a>
            <form method="POST" action="{{ route('admin.logout') }}" style="display: inline;">
                @csrf
                <button type="submit" class="btn-logout">登出</button>
            </form>
        </div>
    </div>

    <div class="container">
        <div class="form-card">
            <h2>修改密碼</h2>

            @if (session('success'))
                <div class="success-message">
                    {{ session('success') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="error-message">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('admin.password.update') }}">
                @csrf

                <div class="form-group">
                    <label for="current_password">目前密碼</label>
                    <input
                        type="password"
                        id="current_password"
                        name="current_password"
                        required
                        autofocus
                        placeholder="請輸入目前密碼"
                    >
                    @error('current_password')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="new_password">新密碼</label>
                    <input
                        type="password"
                        id="new_password"
                        name="new_password"
                        required
                        placeholder="請輸入新密碼（至少 6 個字元）"
                    >
                    @error('new_password')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="new_password_confirmation">確認新密碼</label>
                    <input
                        type="password"
                        id="new_password_confirmation"
                        name="new_password_confirmation"
                        required
                        placeholder="請再次輸入新密碼"
                    >
                </div>

                <button type="submit" class="btn-submit">更新密碼</button>
                <a href="{{ route('admin.dashboard') }}" class="btn-cancel">取消</a>
            </form>
        </div>
    </div>
</body>
</html>
