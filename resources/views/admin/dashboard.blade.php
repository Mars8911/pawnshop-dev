<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>後台管理系統</title>
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
            max-width: 1200px;
            margin: 40px auto;
            padding: 0 20px;
        }

        .welcome-card {
            background: white;
            border-radius: 12px;
            padding: 40px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .welcome-card h2 {
            color: #333;
            font-size: 32px;
            margin-bottom: 16px;
        }

        .welcome-card p {
            color: #666;
            font-size: 16px;
            line-height: 1.6;
        }

        .info-box {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 20px;
            border-radius: 8px;
            margin-top: 30px;
        }

        .info-box h3 {
            margin-bottom: 10px;
            font-size: 18px;
        }

        .info-box p {
            font-size: 14px;
            opacity: 0.9;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>後台管理系統</h1>
        <div class="user-info">
            <span>歡迎，{{ Auth::user()->name }}</span>
            <a href="{{ url('/') }}" class="btn-home">回到首頁</a>
            <form method="POST" action="{{ route('admin.logout') }}" style="display: inline;">
                @csrf
                <button type="submit" class="btn-logout">登出</button>
            </form>
        </div>
    </div>

    <div class="container">
        <div class="welcome-card">
            <h2>歡迎來到後台管理系統</h2>
            <p>您已成功登入後台管理系統</p>

            <div style="margin-top: 40px; display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px;">
                <a href="{{ route('admin.categories') }}" style="text-decoration: none; color: inherit;">
                    <div style="background: white; border: 2px solid #e0e0e0; border-radius: 12px; padding: 30px; text-align: center; transition: all 0.3s; cursor: pointer;" onmouseover="this.style.borderColor='#007bff'; this.style.boxShadow='0 4px 12px rgba(0,123,255,0.2)'" onmouseout="this.style.borderColor='#e0e0e0'; this.style.boxShadow='none'">
                        <div style="font-size: 48px; margin-bottom: 16px;">📁</div>
                        <h3 style="color: #333; margin-bottom: 8px; font-size: 20px;">分類管理</h3>
                        <p style="color: #666; font-size: 14px;">管理廣告刊登的分類類別</p>
                    </div>
                </a>
                <a href="{{ route('admin.ads') }}" style="text-decoration: none; color: inherit;">
                    <div style="background: white; border: 2px solid #e0e0e0; border-radius: 12px; padding: 30px; text-align: center; transition: all 0.3s; cursor: pointer;" onmouseover="this.style.borderColor='#007bff'; this.style.boxShadow='0 4px 12px rgba(0,123,255,0.2)'" onmouseout="this.style.borderColor='#e0e0e0'; this.style.boxShadow='none'">
                        <div style="font-size: 48px; margin-bottom: 16px;">📢</div>
                        <h3 style="color: #333; margin-bottom: 8px; font-size: 20px;">廣告管理</h3>
                        <p style="color: #666; font-size: 14px;">管理廣告內容、圖片與上架狀態</p>
                    </div>
                </a>
            </div>

            <div class="info-box" style="margin-top: 40px;">
                <h3>登入資訊</h3>
                <p>帳號：admin</p>
                <p>密碼：admin</p>
            </div>
        </div>
    </div>
</body>
</html>

