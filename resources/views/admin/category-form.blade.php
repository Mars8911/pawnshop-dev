<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ isset($category) ? '編輯分類' : '新增分類' }} - 後台管理系統</title>
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
        .form-group input[type="number"],
        .form-group textarea {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 14px;
            transition: border-color 0.3s;
        }

        .form-group input[type="text"]:focus,
        .form-group input[type="number"]:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: #007bff;
        }

        .form-group textarea {
            resize: vertical;
            min-height: 100px;
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
    </style>
</head>
<body>
    <div class="header">
        <h1>後台管理系統</h1>
        <div class="header-nav">
            <a href="{{ route('admin.dashboard') }}">儀表板</a>
            <a href="{{ route('admin.categories') }}">分類管理</a>
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
                <h2>{{ isset($category) ? '編輯分類' : '新增分類' }}</h2>
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

            <form method="POST" action="{{ isset($category) ? route('admin.categories.update', $category->id) : route('admin.categories.store') }}">
                @csrf
                @if(isset($category))
                    @method('PUT')
                @endif

                <div class="form-group">
                    <label for="name">分類名稱 <span style="color: red;">*</span></label>
                    <input type="text" id="name" name="name" value="{{ old('name', $category->name ?? '') }}" required>
                    @error('name')
                        <div class="error-message">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="slug">分類代碼 <span style="color: red;">*</span></label>
                    <input type="text" id="slug" name="slug" value="{{ old('slug', $category->slug ?? '') }}" required>
                    <div class="help-text">用於 URL 的唯一識別碼，建議使用英文小寫和連字號（例如：keelung, hsinchu）</div>
                    @error('slug')
                        <div class="error-message">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="description">分類描述</label>
                    <textarea id="description" name="description">{{ old('description', $category->description ?? '') }}</textarea>
                    @error('description')
                        <div class="error-message">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="sort_order">排序順序</label>
                    <input type="number" id="sort_order" name="sort_order" value="{{ old('sort_order', $category->sort_order ?? 0) }}" min="0">
                    <div class="help-text">數字越小越前面，預設為 0</div>
                    @error('sort_order')
                        <div class="error-message">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <div class="checkbox-group">
                        <input type="checkbox" id="is_active" name="is_active" value="1" {{ old('is_active', isset($category) && $category->is_active ? 'checked' : '') ? 'checked' : '' }}>
                        <label for="is_active" style="margin: 0; font-weight: normal;">啟用此分類</label>
                    </div>
                    @error('is_active')
                        <div class="error-message">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">{{ isset($category) ? '更新分類' : '建立分類' }}</button>
                    <a href="{{ route('admin.categories') }}" class="btn btn-secondary">取消</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
