@php
  // 查詢基隆分類（用於台北基隆頁面）
  $keelungCategory = \App\Models\Category::where('slug', 'keelung')
      ->orWhere('name', '基隆')
      ->first();

  // 查詢新北市分類
  $newtaipeiCategory = \App\Models\Category::where('slug', 'newtaipei')
      ->orWhere('slug', 'new-taipei')
      ->orWhere('name', 'like', '%新北市%')
      ->first();

  // 查詢桃竹苗分類（用於桃竹苗頁面，優先查詢桃園分類）
  $taozhumeiCategory = \App\Models\Category::where('name', '桃園')
      ->orWhere('slug', 'taoyuan')
      ->orWhere('name', '新竹')
      ->orWhere('slug', 'hsinchu')
      ->orWhere('name', '苗栗')
      ->orWhere('slug', 'miaoli')
      ->orWhere('name', 'like', '%桃竹苗%')
      ->first();

  // 查詢中彰投分類（用於中彰投頁面，優先查詢台中分類）
  $zhongzhangtouCategory = \App\Models\Category::where('name', '台中')
      ->orWhere('slug', 'taichung')
      ->orWhere('name', '彰化')
      ->orWhere('slug', 'changhua')
      ->orWhere('name', '南投')
      ->orWhere('slug', 'nantou')
      ->orWhere('name', 'like', '%中彰投%')
      ->first();

  // 查詢雲嘉南分類（用於雲嘉南頁面，優先查詢雲林分類）
  $yunjiananCategory = \App\Models\Category::where('name', '雲林')
      ->orWhere('slug', 'yunlin')
      ->orWhere('name', '嘉義')
      ->orWhere('slug', 'chiayi')
      ->orWhere('name', 'like', '%雲嘉南%')
      ->first();

  // 查詢高屏區分類（用於高屏區頁面，優先查詢高雄分類）
  $gaopingCategory = \App\Models\Category::where('name', '高雄')
      ->orWhere('slug', 'kaohsiung')
      ->orWhere('name', '屏東')
      ->orWhere('slug', 'pingtung')
      ->orWhere('name', 'like', '%高屏區%')
      ->orWhere('name', 'like', '%高屏%')
      ->first();

  // 查詢東部離島分類（用於東部離島頁面，優先查詢宜蘭分類）
  $dongbulidaoCategory = \App\Models\Category::where('name', '宜蘭')
      ->orWhere('slug', 'yilan')
      ->orWhere('name', '花蓮')
      ->orWhere('slug', 'hualien')
      ->orWhere('name', '台東')
      ->orWhere('slug', 'taitung')
      ->orWhere('name', '離島')
      ->orWhere('slug', 'offshore')
      ->orWhere('slug', 'offshore-islands')
      ->orWhere('name', 'like', '%東部離島%')
      ->orWhere('name', 'like', '%東部%')
      ->first();
@endphp

<!-- 頂端 Logo + 廣告橫幅 -->
<header class="c-top-header">
  <div class="c-top-header__toolbar-bar">
    <div class="c-top-header__container">
      <div class="c-top-header__toolbar">
        <a href="{{ route('ad.label') }}" class="c-top-header__toolbar-link c-top-header__toolbar-link--highlight">借錢廣告</a>
        <span class="c-top-header__toolbar-divider">|</span>
        <a href="{{ route('home') }}" class="c-top-header__toolbar-link c-top-header__toolbar-link--home">返回首頁</a>
      </div>
    </div>
  </div>
  <div class="c-top-header__container">
    <div class="row align-items-center g-3">
      <div class="col-12 col-md-auto text-center text-md-start">
        <a href="{{ route('home') }}" class="c-top-header__logo-link">
          <img
            src="{{ asset('img/logo.gif') }}"
            alt="台灣借錢網"
            class="c-top-header__logo img-fluid"
          >
        </a>
      </div>
      <div class="col-12 col-md text-center text-md-end">
        <a href="{{ route('ad.label') }}" class="c-top-header__ad-link">
          <img
            src="{{ asset('img/logor.gif') }}"
            alt="廣告刊登"
            class="c-top-header__ad-image img-fluid"
          >
        </a>
      </div>
    </div>
  </div>
</header>

<!-- 手機版導覽列 -->
<nav class="c-mobile-nav">
  <div class="c-mobile-nav__container">
    <a href="{{ route('home') }}" class="c-mobile-nav__home-icon" aria-label="返回首頁">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 16 16">
        <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z"/>
      </svg>
    </a>
    <div class="c-mobile-nav__title">台灣借錢網</div>
    <button class="c-mobile-nav__menu-toggle" type="button" aria-label="開啟選單" data-bs-toggle="collapse" data-bs-target="#mobileNavMenu" aria-expanded="false" aria-controls="mobileNavMenu">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
      </svg>
    </button>
  </div>
  <div class="collapse" id="mobileNavMenu">
    <div class="c-mobile-nav__dropdown">
      <a href="{{ $keelungCategory ? route('category.show', $keelungCategory->id) : '#' }}" class="c-mobile-nav__dropdown-link">台北基隆</a>
      <a href="{{ $newtaipeiCategory ? route('category.show', $newtaipeiCategory->id) : '#' }}" class="c-mobile-nav__dropdown-link">新北市</a>
      <a href="{{ $taozhumeiCategory ? route('category.show', $taozhumeiCategory->id) : '#' }}" class="c-mobile-nav__dropdown-link">桃竹苗</a>
      <a href="{{ $zhongzhangtouCategory ? route('category.show', $zhongzhangtouCategory->id) : '#' }}" class="c-mobile-nav__dropdown-link">中彰投</a>
      <a href="{{ $yunjiananCategory ? route('category.show', $yunjiananCategory->id) : '#' }}" class="c-mobile-nav__dropdown-link">雲嘉南</a>
      <a href="{{ $gaopingCategory ? route('category.show', $gaopingCategory->id) : '#' }}" class="c-mobile-nav__dropdown-link">高屏區</a>
      <a href="{{ $dongbulidaoCategory ? route('category.show', $dongbulidaoCategory->id) : '#' }}" class="c-mobile-nav__dropdown-link">東部離島</a>
    </div>
  </div>
</nav>

<!-- 主導覽列 -->
<nav class="main-nav">
  <div class="container-fluid">
    <ul class="nav justify-content-center d-flex align-items-center">
      <li class="nav-item">
        <a class="nav-link text-nowrap" href="{{ $keelungCategory ? route('category.show', $keelungCategory->id) : '#' }}">台北基隆</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-nowrap" href="{{ $newtaipeiCategory ? route('category.show', $newtaipeiCategory->id) : '#' }}">新北市</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-nowrap" href="{{ $taozhumeiCategory ? route('category.show', $taozhumeiCategory->id) : '#' }}">桃竹苗</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-nowrap" href="{{ $zhongzhangtouCategory ? route('category.show', $zhongzhangtouCategory->id) : '#' }}">中彰投</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-nowrap" href="{{ $yunjiananCategory ? route('category.show', $yunjiananCategory->id) : '#' }}">雲嘉南</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-nowrap" href="{{ $gaopingCategory ? route('category.show', $gaopingCategory->id) : '#' }}">高屏區</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-nowrap" href="{{ $dongbulidaoCategory ? route('category.show', $dongbulidaoCategory->id) : '#' }}">東部離島</a>
      </li>
    </ul>
  </div>
</nav>

