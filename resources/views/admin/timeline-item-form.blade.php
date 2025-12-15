<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ isset($timelineItem) ? '編輯網站記事' : '新增網站記事' }} - 後台管理系統</title>
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
            padding: 10px 24px;
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
            max-width: 800px;
            margin: 40px auto;
            padding: 0 20px;
        }

        .card {
            background: white;
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            margin-bottom: 30px;
        }

        .card-header h2 {
            color: #333;
            font-size: 24px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: #333;
            font-weight: 500;
            font-size: 14px;
        }

        .form-group input[type="text"],
        .form-group input[type="number"] {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 14px;
            transition: border-color 0.3s;
        }

        .form-group input[type="text"]:focus,
        .form-group input[type="number"]:focus {
            outline: none;
            border-color: #007bff;
        }

        .form-group .help-text {
            margin-top: 6px;
            font-size: 12px;
            color: #666;
        }

        .form-group .checkbox-group {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .form-group input[type="checkbox"] {
            width: 18px;
            height: 18px;
            cursor: pointer;
        }

        .form-actions {
            display: flex;
            gap: 12px;
            margin-top: 30px;
        }

        .alert {
            padding: 12px 20px;
            border-radius: 6px;
            margin-bottom: 20px;
        }

        .alert-danger {
            background: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }

        .error-message {
            color: #dc3545;
            font-size: 12px;
            margin-top: 6px;
        }

        .char-count {
            font-size: 12px;
            color: #666;
            margin-top: 6px;
        }

        .char-count.warning {
            color: #ff9800;
        }

        .char-count.error {
            color: #dc3545;
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
            <a href="{{ route('admin.timeline-items') }}">網站記事管理</a>
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
                <h2>{{ isset($timelineItem) ? '編輯網站記事' : '新增網站記事' }}</h2>
            </div>

            @if($errors->any())
                <div class="alert alert-danger">
                    <ul style="margin: 0; padding-left: 20px;">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ isset($timelineItem) ? route('admin.timeline-items.update', $timelineItem->id) : route('admin.timeline-items.store') }}">
                @csrf
                @if(isset($timelineItem))
                    @method('PUT')
                @endif

                <div class="form-group">
                    <label for="date">日期 <span style="color: red;">*</span></label>
                    <input type="text" id="date" name="date" value="{{ old('date', $timelineItem->date ?? '') }}" placeholder="例如：2014/09" required>
                    <div class="help-text">格式：YYYY/MM（例如：2014/09）</div>
                    @error('date')
                        <div class="error-message">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="text">文字內容 <span style="color: red;">*</span></label>
                    <input type="text" id="text" name="text" value="{{ old('text', $timelineItem->text ?? '') }}" maxlength="30" oninput="updateCharCount(this)" required>
                    <div class="help-text">不超過30個字元</div>
                    <div class="char-count" id="char-count">0 / 30 字元</div>
                    @error('text')
                        <div class="error-message">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="sort_order">排序順序</label>
                    <input type="number" id="sort_order" name="sort_order" value="{{ old('sort_order', $timelineItem->sort_order ?? 0) }}" min="0">
                    <div class="help-text">數字越小越前面，預設為 0</div>
                    @error('sort_order')
                        <div class="error-message">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <div class="checkbox-group">
                        <input type="checkbox" id="is_active" name="is_active" value="1" {{ old('is_active', isset($timelineItem) && $timelineItem->is_active ? 'checked' : '') ? 'checked' : '' }}>
                        <label for="is_active" style="margin: 0; font-weight: normal;">上架此網站記事</label>
                    </div>
                    @error('is_active')
                        <div class="error-message">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">{{ isset($timelineItem) ? '更新網站記事' : '建立網站記事' }}</button>
                    <a href="{{ route('admin.timeline-items') }}" class="btn btn-secondary">取消</a>
                </div>
            </form>
        </div>
    </div>

    <script>
        function updateCharCount(input) {
            const charCount = document.getElementById('char-count');
            const length = input.value.length;
            const maxLength = 30;

            charCount.textContent = length + ' / ' + maxLength + ' 字元';

            charCount.className = 'char-count';
            if (length > maxLength * 0.8) {
                charCount.className += ' warning';
            }
            if (length > maxLength) {
                charCount.className += ' error';
            }
        }

        // 初始化字符計數
        document.addEventListener('DOMContentLoaded', function() {
            const textInput = document.getElementById('text');
            if (textInput) {
                updateCharCount(textInput);
            }
        });
    </script>
</body>
</html>
