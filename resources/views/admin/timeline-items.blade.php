<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>網站記事管理 - 後台管理系統</title>
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

        .header-nav {
            display: flex;
            gap: 20px;
            align-items: center;
        }

        .header-nav a {
            color: #666;
            text-decoration: none;
            font-size: 14px;
            transition: color 0.3s;
        }

        .header-nav a:hover {
            color: #333;
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

        .btn {
            padding: 8px 20px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 14px;
            text-decoration: none;
            display: inline-block;
            transition: background 0.3s;
        }

        .btn-primary {
            background: #007bff;
            color: white;
        }

        .btn-primary:hover {
            background: #0056b3;
        }

        .btn-danger {
            background: #dc3545;
            color: white;
        }

        .btn-danger:hover {
            background: #c82333;
        }

        .btn-secondary {
            background: #6c757d;
            color: white;
        }

        .btn-secondary:hover {
            background: #5a6268;
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
            padding: 0 40px;
        }

        .card {
            background: white;
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }

        .card-header h2 {
            color: #333;
            font-size: 24px;
        }

        .alert {
            padding: 12px 20px;
            border-radius: 6px;
            margin-bottom: 20px;
        }

        .alert-success {
            background: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
        }

        .table th,
        .table td {
            padding: 12px 16px;
            text-align: left;
            border-bottom: 1px solid #e0e0e0;
        }

        .table th {
            background: #f8f9fa;
            font-weight: 600;
            color: #333;
        }

        .table tr:hover {
            background: #f8f9fa;
        }

        .badge {
            padding: 4px 12px;
            border-radius: 12px;
            font-size: 12px;
            font-weight: 500;
        }

        .badge-success {
            background: #d4edda;
            color: #155724;
        }

        .badge-danger {
            background: #f8d7da;
            color: #721c24;
        }

        .action-buttons {
            display: flex;
            gap: 8px;
        }

        .btn-sm {
            padding: 6px 12px;
            font-size: 12px;
        }

        .empty-state {
            text-align: center;
            padding: 60px 20px;
            color: #666;
        }

        .empty-state p {
            font-size: 16px;
            margin-bottom: 20px;
        }

        .text-cell {
            max-width: 400px;
            word-break: break-word;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>後台管理系統</h1>
        <div class="header-nav">
            <a href="{{ route('admin.dashboard') }}">儀表板</a>
            <a href="{{ route('admin.categories') }}">分類管理</a>
            <a href="{{ route('admin.ads') }}">廣告管理</a>
            <a href="{{ route('admin.alliance-ads') }}">聯盟廣告管理</a>
            <a href="{{ route('admin.timeline-items') }}" style="color: #007bff; font-weight: 600;">網站記事管理</a>
        </div>
        <div class="user-info">
            <span>歡迎，{{ Auth::user()->name }}</span>
            <form method="POST" action="{{ route('admin.logout') }}" style="display: inline;">
                @csrf
                <button type="submit" class="btn-logout">登出</button>
            </form>
        </div>
    </div>

    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2>網站記事管理</h2>
                <a href="{{ route('admin.timeline-items.create') }}" class="btn btn-primary">新增網站記事</a>
            </div>

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if($timelineItems->count() > 0)
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>日期</th>
                            <th>文字內容</th>
                            <th>排序</th>
                            <th>狀態</th>
                            <th>建立時間</th>
                            <th>操作</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($timelineItems as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->date }}</td>
                                <td class="text-cell">{{ $item->text }}</td>
                                <td>{{ $item->sort_order }}</td>
                                <td>
                                    @if($item->is_active)
                                        <span class="badge badge-success">上架</span>
                                    @else
                                        <span class="badge badge-danger">下架</span>
                                    @endif
                                </td>
                                <td>{{ $item->created_at->format('Y-m-d H:i') }}</td>
                                <td>
                                    <div class="action-buttons">
                                        <a href="{{ route('admin.timeline-items.edit', $item->id) }}" class="btn btn-secondary btn-sm">編輯</a>
                                        <form method="POST" action="{{ route('admin.timeline-items.delete', $item->id) }}" style="display: inline;" onsubmit="return confirm('確定要刪除這個網站記事嗎？');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">刪除</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <div class="empty-state">
                    <p>目前沒有任何網站記事</p>
                    <a href="{{ route('admin.timeline-items.create') }}" class="btn btn-primary">建立第一個網站記事</a>
                </div>
            @endif
        </div>
    </div>
</body>
</html>
