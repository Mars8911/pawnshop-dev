<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ isset($allianceAd) ? '編輯聯盟廣告' : '新增聯盟廣告' }} - 後台管理系統</title>
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
        .form-group input[type="url"],
        .form-group input[type="number"],
        .form-group input[type="file"] {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 14px;
            transition: border-color 0.3s;
        }

        .form-group input[type="text"]:focus,
        .form-group input[type="url"]:focus,
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

        .image-preview {
            margin-top: 10px;
        }

        .image-preview img {
            max-width: 300px;
            max-height: 200px;
            border-radius: 6px;
            border: 1px solid #ddd;
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
                <h2>{{ isset($allianceAd) ? '編輯聯盟廣告' : '新增聯盟廣告' }}</h2>
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

            <form method="POST" action="{{ isset($allianceAd) ? route('admin.alliance-ads.update', $allianceAd->id) : route('admin.alliance-ads.store') }}" enctype="multipart/form-data">
                @csrf
                @if(isset($allianceAd))
                    @method('PUT')
                @endif

                <div class="form-group">
                    <label for="image">圖片 <span style="color: red;">*</span></label>
                    <input type="file" id="image" name="image" accept="image/*" onchange="previewImage(this)" {{ isset($allianceAd) ? '' : 'required' }}>
                    <div class="help-text">支援格式：JPEG, PNG, JPG, GIF，最大 2MB{{ isset($allianceAd) ? '（留空則不更新圖片）' : '' }}</div>
                    @if(isset($allianceAd) && $allianceAd->image)
                        <div class="image-preview">
                            <p style="margin-bottom: 8px; font-size: 12px; color: #666;">目前圖片：</p>
                            <img src="{{ asset('storage/' . $allianceAd->image) }}" alt="{{ $allianceAd->alt ?? '' }}" id="current-image">
                        </div>
                    @endif
                    <div class="image-preview" id="new-image-preview" style="display: none;">
                        <p style="margin-bottom: 8px; font-size: 12px; color: #666;">新圖片預覽：</p>
                        <img id="preview-img" src="" alt="預覽">
                    </div>
                    @error('image')
                        <div class="error-message">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="link">連結網址 <span style="color: red;">*</span></label>
                    <input type="url" id="link" name="link" value="{{ old('link', $allianceAd->link ?? '') }}" placeholder="https://example.com" required>
                    <div class="help-text">點擊圖片後跳轉的網址</div>
                    @error('link')
                        <div class="error-message">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="alt">圖片替代文字</label>
                    <input type="text" id="alt" name="alt" value="{{ old('alt', $allianceAd->alt ?? '') }}" placeholder="例如：台灣借錢資訊網">
                    <div class="help-text">圖片的 alt 屬性，用於 SEO 和無障礙功能</div>
                    @error('alt')
                        <div class="error-message">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="sort_order">排序順序</label>
                    <input type="number" id="sort_order" name="sort_order" value="{{ old('sort_order', $allianceAd->sort_order ?? 0) }}" min="0">
                    <div class="help-text">數字越小越前面，預設為 0</div>
                    @error('sort_order')
                        <div class="error-message">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <div class="checkbox-group">
                        <input type="checkbox" id="is_active" name="is_active" value="1" {{ old('is_active', isset($allianceAd) && $allianceAd->is_active ? 'checked' : '') ? 'checked' : '' }}>
                        <label for="is_active" style="margin: 0; font-weight: normal;">上架此聯盟廣告</label>
                    </div>
                    @error('is_active')
                        <div class="error-message">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">{{ isset($allianceAd) ? '更新聯盟廣告' : '建立聯盟廣告' }}</button>
                    <a href="{{ route('admin.alliance-ads') }}" class="btn btn-secondary">取消</a>
                </div>
            </form>
        </div>
    </div>

    <script>
        function previewImage(input) {
            const preview = document.getElementById('new-image-preview');
            const previewImg = document.getElementById('preview-img');
            const currentImg = document.getElementById('current-image');

            if (input.files && input.files[0]) {
                const reader = new FileReader();

                reader.onload = function(e) {
                    previewImg.src = e.target.result;
                    preview.style.display = 'block';
                    if (currentImg) {
                        currentImg.style.opacity = '0.5';
                    }
                }

                reader.readAsDataURL(input.files[0]);
            } else {
                preview.style.display = 'none';
                if (currentImg) {
                    currentImg.style.opacity = '1';
                }
            }
        }
    </script>
</body>
</html>
