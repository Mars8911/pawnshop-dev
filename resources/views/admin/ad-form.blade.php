<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ isset($ad) ? '編輯廣告' : '新增廣告' }} - 後台管理系統</title>
    <!-- CKEditor 5 -->
    <script src="https://cdn.ckeditor.com/ckeditor5/41.0.0/classic/ckeditor.js"></script>
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
        .form-group input[type="file"],
        .form-group select,
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
        .form-group select:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: #007bff;
        }

        .form-group textarea {
            resize: vertical;
            min-height: 100px;
        }

        /* CKEditor 样式 */
        .ck-editor__editable {
            min-height: 300px;
        }

        .ck-content {
            min-height: 300px;
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
                <h2>{{ isset($ad) ? '編輯廣告' : '新增廣告' }}</h2>
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

            <form method="POST" action="{{ isset($ad) ? route('admin.ads.update', $ad->id) : route('admin.ads.store') }}" enctype="multipart/form-data">
                @csrf
                @if(isset($ad))
                    @method('PUT')
                @endif

                <div class="form-group">
                    <label for="name">名稱 <span style="color: red;">*</span></label>
                    <input type="text" id="name" name="name" value="{{ old('name', $ad->name ?? '') }}" required>
                    <div class="help-text">顯示在廣告頁面的標題位置</div>
                    @error('name')
                        <div class="error-message">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="category_id">分類</label>
                    <select id="category_id" name="category_id">
                        <option value="">請選擇分類（可選）</option>
                        @if(isset($categories))
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}" {{ old('category_id', $ad->category_id ?? '') == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        @endif
                    </select>
                    <div class="help-text">選擇此廣告所屬的分類</div>
                    @error('category_id')
                        <div class="error-message">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="subtitle">副標題 <span style="color: red;">*</span></label>
                    <input type="text" id="subtitle" name="subtitle" value="{{ old('subtitle', $ad->subtitle ?? '') }}" required>
                    <div class="help-text">顯示在聯繫資訊區塊的標題位置</div>
                    @error('subtitle')
                        <div class="error-message">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="image">圖片上傳</label>
                    <input type="file" id="image" name="image" accept="image/*" onchange="previewImage(this)">
                    <div class="help-text">支援格式：JPEG, PNG, JPG, GIF，最大 2MB</div>
                    @if(isset($ad) && $ad->image)
                        <div class="image-preview">
                            <p style="margin-bottom: 8px; font-size: 12px; color: #666;">目前圖片：</p>
                            <img src="{{ asset('storage/' . $ad->image) }}" alt="{{ $ad->name }}" id="current-image">
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
                    <label for="description">描述文字</label>
                    <textarea id="description" name="description" maxlength="105" oninput="updateCharCount(this)">{{ old('description', $ad->description ?? '') }}</textarea>
                    <div class="help-text">中文不超過35個字（約105個字符）</div>
                    <div class="char-count" id="char-count">0 / 105 字符</div>
                    @error('description')
                        <div class="error-message">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="content">詳細內容</label>
                    <textarea id="content" name="content">{{ old('content', $ad->content ?? '') }}</textarea>
                    <div class="help-text">使用富文本編輯器編輯詳細內容，支援文字、圖片等格式</div>
                    @error('content')
                        <div class="error-message">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="sort_order">排序順序</label>
                    <input type="number" id="sort_order" name="sort_order" value="{{ old('sort_order', $ad->sort_order ?? 0) }}" min="0">
                    <div class="help-text">數字越小越前面，預設為 0</div>
                    @error('sort_order')
                        <div class="error-message">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <div class="checkbox-group">
                        <input type="checkbox" id="is_active" name="is_active" value="1" {{ old('is_active', isset($ad) && $ad->is_active ? 'checked' : '') ? 'checked' : '' }}>
                        <label for="is_active" style="margin: 0; font-weight: normal;">上架此廣告</label>
                    </div>
                    @error('is_active')
                        <div class="error-message">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">{{ isset($ad) ? '更新廣告' : '建立廣告' }}</button>
                    <a href="{{ route('admin.ads') }}" class="btn btn-secondary">取消</a>
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

        function updateCharCount(textarea) {
            const charCount = document.getElementById('char-count');
            const length = textarea.value.length;
            const maxLength = 105;

            charCount.textContent = length + ' / ' + maxLength + ' 字符';

            // 計算中文字數（粗略估算：中文字約佔3個字符）
            const chineseChars = (length - textarea.value.replace(/[\u4e00-\u9fa5]/g, '').length) / 2;
            const estimatedChineseChars = Math.ceil(chineseChars);

            charCount.className = 'char-count';
            if (length > maxLength * 0.9) {
                charCount.className += ' warning';
            }
            if (length > maxLength) {
                charCount.className += ' error';
            }
        }

        // 初始化字符計數
        document.addEventListener('DOMContentLoaded', function() {
            const description = document.getElementById('description');
            if (description) {
                updateCharCount(description);
            }

            // 初始化 CKEditor 5
            ClassicEditor
                .create(document.querySelector('#content'), {
                    toolbar: {
                        items: [
                            'heading',
                            '|',
                            'bold',
                            'italic',
                            'underline',
                            'strikethrough',
                            '|',
                            'fontSize',
                            'fontColor',
                            'fontBackgroundColor',
                            '|',
                            'link',
                            'bulletedList',
                            'numberedList',
                            '|',
                            'alignment',
                            'outdent',
                            'indent',
                            '|',
                            'blockQuote',
                            'insertTable',
                            '|',
                            'imageUpload',
                            'mediaEmbed',
                            '|',
                            'horizontalLine',
                            'specialCharacters',
                            '|',
                            'undo',
                            'redo'
                        ]
                    },
                    language: 'zh',
                    fontSize: {
                        options: [9, 11, 13, 'default', 17, 19, 21, 27, 35]
                    },
                    image: {
                        toolbar: [
                            'imageTextAlternative',
                            'toggleImageCaption',
                            'imageStyle:inline',
                            'imageStyle:block',
                            'imageStyle:side'
                        ],
                        upload: {
                            types: ['png', 'jpg', 'jpeg', 'gif']
                        }
                    },
                    table: {
                        contentToolbar: [
                            'tableColumn',
                            'tableRow',
                            'mergeTableCells',
                            'tableCellProperties',
                            'tableProperties'
                        ]
                    },
                    link: {
                        decorators: {
                            openInNewTab: {
                                mode: 'manual',
                                label: '在新分頁開啟',
                                attributes: {
                                    target: '_blank',
                                    rel: 'noopener noreferrer'
                                }
                            }
                        }
                    }
                })
                .then(editor => {
                    window.editor = editor;
                })
                .catch(error => {
                    console.error('CKEditor 初始化錯誤:', error);
                });
        });
    </script>
</body>
</html>
