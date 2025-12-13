<!doctype html>
<html lang="zh-Hant">
<head>
  <meta charset="utf-8">
  <title>台灣借錢網 - 分類頁面！</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap 5 -->
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
  >
  <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>
<body class="bg-light">

  <!-- 頂端 Logo + 廣告橫幅 -->
  <header class="c-top-header">
    <div class="c-top-header__toolbar-bar">
      <div class="c-top-header__container">
        <div class="c-top-header__toolbar">
          <a href="#" class="c-top-header__toolbar-link c-top-header__toolbar-link--highlight">借錢廣告</a>
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
          <a href="#" class="c-top-header__ad-link">
            <img
              src="/img/logor.gif"
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
        <a href="#" class="c-mobile-nav__dropdown-link">台北基隆</a>
        <a href="#" class="c-mobile-nav__dropdown-link">新北市</a>
        <a href="#" class="c-mobile-nav__dropdown-link">桃竹苗</a>
        <a href="#" class="c-mobile-nav__dropdown-link">中彰投</a>
        <a href="#" class="c-mobile-nav__dropdown-link">雲嘉南</a>
        <a href="#" class="c-mobile-nav__dropdown-link">高屏區</a>
        <a href="#" class="c-mobile-nav__dropdown-link">東部離島</a>
      </div>
    </div>
  </nav>

  <!-- 主導覽列 -->
  <nav class="main-nav">
    <div class="container-fluid">
      <ul class="nav justify-content-center d-flex align-items-center">
        <li class="nav-item">
          <a class="nav-link text-nowrap" href="#">台北基隆</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-nowrap" href="#">新北市</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-nowrap" href="#">桃竹苗</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-nowrap" href="#">中彰投</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-nowrap" href="#">雲嘉南</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-nowrap" href="#">高屏區</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-nowrap" href="#">東部離島</a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- 內文區 -->
  <main class="py-3">
    <div class="container-fluid">

      <!-- 小標 -->
      <div class="row mb-3">
        <div class="col-12">
          <div class="c-subhead-bar">
            <div class="c-subhead-bar__content">
              <div class="c-subhead-bar__left">
                目前位置: 台灣借錢網》{{ $category->name ?? '分類頁面' }}
              </div>
              <div class="c-subhead-bar__right c-subhead-bar__right--safety">
                借錢不郵寄、不預付、不認證,安全借錢免受騙!
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- 大區塊：台北借錢、新北借錢（兩個大格） -->
      <section class="mb-3">
        <div class="c-region-grid">
          <div class="row g-0 justify-content-center">
          <!-- 基隆 -->
          <div class="col-6">
            <a href="#" class="text-center text-decoration-none region-block region-block--keelung {{ (isset($category) && (stripos($category->name, '基隆') !== false || stripos($category->name, 'keelung') !== false)) ? 'region-block--active' : '' }}">
              <div class="region-title">基隆</div>
            </a>
          </div>

          <!-- 台北 -->
          <div class="col-6">
            <a href="#" class="text-center text-decoration-none region-block region-block--taipei {{ (isset($category) && (stripos($category->name, '台北') !== false || stripos($category->name, 'taipei') !== false)) ? 'region-block--active' : '' }}">
              <div class="region-title">台北</div>
            </a>
          </div>
          </div>
        </div>
      </section>

      <!-- 安全借錢圖片 -->
      <section class="mb-4">
        <div class="c-region-grid">
          <img src="{{ asset('img/safety4.gif') }}" alt="安全借錢" class="img-fluid w-100">
        </div>
      </section>

      <!-- 下方廣告列 -->
      <section class="mb-4 c-ad-strip">
        <div class="c-ad-strip__container">
          <div class="row g-3">
            @forelse($ads as $ad)
            <div class="col-6 col-md-4">
              <div class="c-ad-card c-ad-card--featured">
                <div class="c-ad-card__media">
                  <img
                    src="{{ $ad->image ? asset('storage/' . $ad->image) : asset('img/105340821.jpg') }}"
                    alt="{{ $ad->name ?? '廣告圖片' }}"
                    class="c-ad-card__img"
                  >
                </div>
                <div class="c-ad-card__content">
                  <p class="c-ad-card__text">
                    {{ $ad->description ?? $ad->subtitle ?? '小額借款，臨時周轉，免押證件，息低保密，手續簡便，借錢不求人，還款好輕鬆。' }}
                  </p>
                </div>
                <a href="{{ route('ad.page', ['id' => $ad->id]) }}" class="c-ad-card__link">
                  {{ $ad->name ?? $ad->subtitle ?? '查看詳情' }}
                </a>
              </div>
            </div>
            @empty
            <div class="col-12">
              <p class="text-center text-muted">目前此類別下沒有可用的廣告</p>
            </div>
            @endforelse
            <div class="col-6 col-md-4">
              <div class="c-ad-card c-ad-card--featured">
                <div class="c-ad-card__media">
                  <img
                    src="/img/091640791.jpg"
                    alt="雲嘉南小額借款廣告"
                    class="c-ad-card__img"
                  >
                </div>
                <div class="c-ad-card__content">
                  <p class="c-ad-card__text">
                    有工作來就借，小額借貸，現金週轉便利站，安心借輕鬆還，手續簡便，歡迎來電。
                  </p>
                </div>
                <a href="#" class="c-ad-card__link">
                  24H快速借款 好商量
                </a>
              </div>
            </div>
            <div class="col-6 col-md-4">
              <div class="c-ad-card c-ad-card--featured">
                <div class="c-ad-card__media">
                  <img
                    src="/img/101340611.jpg"
                    alt="雲嘉南小額借款廣告"
                    class="c-ad-card__img"
                  >
                </div>
                <div class="c-ad-card__content">
                  <p class="c-ad-card__text">
                    客製方案，各大行業，本利攤還，火速撥款，免證件可貸，免保人可貸，免抵押。
                  </p>
                </div>
                <a href="#" class="c-ad-card__link">
                  當日撥款 借錢首選
                </a>
              </div>
            </div>
            <div class="col-6 col-md-4">
              <div class="c-ad-card c-ad-card--featured">
                <div class="c-ad-card__media">
                  <img
                    src="/img/105340821.jpg"
                    alt="雲嘉南小額借款廣告"
                    class="c-ad-card__img"
                  >
                </div>
                <div class="c-ad-card__content">
                  <p class="c-ad-card__text">
                    小額借款，臨時周轉，免押證件，息低保密，手續簡便，借錢不求人，還款好輕鬆。
                  </p>
                </div>
                <a href="#" class="c-ad-card__link">
                  小額借款，雲嘉南地區
                </a>
              </div>
            </div>
            <div class="col-6 col-md-4">
              <div class="c-ad-card c-ad-card--featured">
                <div class="c-ad-card__media">
                  <img
                    src="/img/091640791.jpg"
                    alt="雲嘉南小額借款廣告"
                    class="c-ad-card__img"
                  >
                </div>
                <div class="c-ad-card__content">
                  <p class="c-ad-card__text">
                    有工作來就借，小額借貸，現金週轉便利站，安心借輕鬆還，手續簡便，歡迎來電。
                  </p>
                </div>
                <a href="#" class="c-ad-card__link">
                  24H快速借款 好商量
                </a>
              </div>
            </div>
            <div class="col-6 col-md-4">
              <div class="c-ad-card c-ad-card--featured">
                <div class="c-ad-card__media">
                  <img
                    src="/img/101340611.jpg"
                    alt="雲嘉南小額借款廣告"
                    class="c-ad-card__img"
                  >
                </div>
                <div class="c-ad-card__content">
                  <p class="c-ad-card__text">
                    客製方案，各大行業，本利攤還，火速撥款，免證件可貸，免保人可貸，免抵押。
                  </p>
                </div>
                <a href="#" class="c-ad-card__link">
                  當日撥款 借錢首選
                </a>
              </div>
            </div>
            <div class="col-6 col-md-4">
              <div class="c-ad-card c-ad-card--featured">
                <div class="c-ad-card__media">
                  <img
                    src="/img/105340821.jpg"
                    alt="雲嘉南小額借款廣告"
                    class="c-ad-card__img"
                  >
                </div>
                <div class="c-ad-card__content">
                  <p class="c-ad-card__text">
                    小額借款，臨時周轉，免押證件，息低保密，手續簡便，借錢不求人，還款好輕鬆。
                  </p>
                </div>
                <a href="#" class="c-ad-card__link">
                  小額借款，雲嘉南地區
                </a>
              </div>
            </div>
            <div class="col-6 col-md-4">
              <div class="c-ad-card c-ad-card--featured">
                <div class="c-ad-card__media">
                  <img
                    src="/img/091640791.jpg"
                    alt="雲嘉南小額借款廣告"
                    class="c-ad-card__img"
                  >
                </div>
                <div class="c-ad-card__content">
                  <p class="c-ad-card__text">
                    有工作來就借，小額借貸，現金週轉便利站，安心借輕鬆還，手續簡便，歡迎來電。
                  </p>
                </div>
                <a href="#" class="c-ad-card__link">
                  24H快速借款 好商量
                </a>
              </div>
            </div>
            <div class="col-6 col-md-4">
              <div class="c-ad-card c-ad-card--featured">
                <div class="c-ad-card__media">
                  <img
                    src="/img/101340611.jpg"
                    alt="雲嘉南小額借款廣告"
                    class="c-ad-card__img"
                  >
                </div>
                <div class="c-ad-card__content">
                  <p class="c-ad-card__text">
                    客製方案，各大行業，本利攤還，火速撥款，免證件可貸，免保人可貸，免抵押。
                  </p>
                </div>
                <a href="#" class="c-ad-card__link">
                  當日撥款 借錢首選
                </a>
              </div>
            </div>
            <div class="col-6 col-md-4">
              <div class="c-ad-card c-ad-card--featured">
                <div class="c-ad-card__media">
                  <img
                    src="/img/105340821.jpg"
                    alt="雲嘉南小額借款廣告"
                    class="c-ad-card__img"
                  >
                </div>
                <div class="c-ad-card__content">
                  <p class="c-ad-card__text">
                    小額借款，臨時周轉，免押證件，息低保密，手續簡便，借錢不求人，還款好輕鬆。
                  </p>
                </div>
                <a href="#" class="c-ad-card__link">
                  小額借款，雲嘉南地區
                </a>
              </div>
            </div>
            <div class="col-6 col-md-4">
              <div class="c-ad-card c-ad-card--featured">
                <div class="c-ad-card__media">
                  <img
                    src="/img/091640791.jpg"
                    alt="雲嘉南小額借款廣告"
                    class="c-ad-card__img"
                  >
                </div>
                <div class="c-ad-card__content">
                  <p class="c-ad-card__text">
                    有工作來就借，小額借貸，現金週轉便利站，安心借輕鬆還，手續簡便，歡迎來電。
                  </p>
                </div>
                <a href="#" class="c-ad-card__link">
                  24H快速借款 好商量
                </a>
              </div>
            </div>
            <div class="col-6 col-md-4">
              <div class="c-ad-card c-ad-card--featured">
                <div class="c-ad-card__media">
                  <img
                    src="/img/101340611.jpg"
                    alt="雲嘉南小額借款廣告"
                    class="c-ad-card__img"
                  >
                </div>
                <div class="c-ad-card__content">
                  <p class="c-ad-card__text">
                    客製方案，各大行業，本利攤還，火速撥款，免證件可貸，免保人可貸，免抵押。
                  </p>
                </div>
                <a href="#" class="c-ad-card__link">
                  當日撥款 借錢首選
                </a>
              </div>
            </div>
            <div class="col-6 col-md-4">
              <div class="c-ad-card c-ad-card--featured">
                <div class="c-ad-card__media">
                  <img
                    src="/img/105340821.jpg"
                    alt="雲嘉南小額借款廣告"
                    class="c-ad-card__img"
                  >
                </div>
                <div class="c-ad-card__content">
                  <p class="c-ad-card__text">
                    小額借款，臨時周轉，免押證件，息低保密，手續簡便，借錢不求人，還款好輕鬆。
                  </p>
                </div>
                <a href="#" class="c-ad-card__link">
                  小額借款，雲嘉南地區
                </a>
              </div>
            </div>
            <div class="col-6 col-md-4">
              <div class="c-ad-card c-ad-card--featured">
                <div class="c-ad-card__media">
                  <img
                    src="/img/091640791.jpg"
                    alt="雲嘉南小額借款廣告"
                    class="c-ad-card__img"
                  >
                </div>
                <div class="c-ad-card__content">
                  <p class="c-ad-card__text">
                    有工作來就借，小額借貸，現金週轉便利站，安心借輕鬆還，手續簡便，歡迎來電。
                  </p>
                </div>
                <a href="#" class="c-ad-card__link">
                  24H快速借款 好商量
                </a>
              </div>
            </div>
            <div class="col-6 col-md-4">
              <div class="c-ad-card c-ad-card--featured">
                <div class="c-ad-card__media">
                  <img
                    src="/img/101340611.jpg"
                    alt="雲嘉南小額借款廣告"
                    class="c-ad-card__img"
                  >
                </div>
                <div class="c-ad-card__content">
                  <p class="c-ad-card__text">
                    客製方案，各大行業，本利攤還，火速撥款，免證件可貸，免保人可貸，免抵押。
                  </p>
                </div>
                <a href="#" class="c-ad-card__link">
                  當日撥款 借錢首選
                </a>
              </div>
            </div>
            <div class="col-6 col-md-4">
              <div class="c-ad-card c-ad-card--featured">
                <div class="c-ad-card__media">
                  <img
                    src="/img/105340821.jpg"
                    alt="雲嘉南小額借款廣告"
                    class="c-ad-card__img"
                  >
                </div>
                <div class="c-ad-card__content">
                  <p class="c-ad-card__text">
                    小額借款，臨時周轉，免押證件，息低保密，手續簡便，借錢不求人，還款好輕鬆。
                  </p>
                </div>
                <a href="#" class="c-ad-card__link">
                  小額借款，雲嘉南地區
                </a>
              </div>
            </div>
            <div class="col-6 col-md-4">
              <div class="c-ad-card c-ad-card--featured">
                <div class="c-ad-card__media">
                  <img
                    src="/img/091640791.jpg"
                    alt="雲嘉南小額借款廣告"
                    class="c-ad-card__img"
                  >
                </div>
                <div class="c-ad-card__content">
                  <p class="c-ad-card__text">
                    有工作來就借，小額借貸，現金週轉便利站，安心借輕鬆還，手續簡便，歡迎來電。
                  </p>
                </div>
                <a href="#" class="c-ad-card__link">
                  24H快速借款 好商量
                </a>
              </div>
            </div>
            <div class="col-6 col-md-4">
              <div class="c-ad-card c-ad-card--featured">
                <div class="c-ad-card__media">
                  <img
                    src="/img/101340611.jpg"
                    alt="雲嘉南小額借款廣告"
                    class="c-ad-card__img"
                  >
                </div>
                <div class="c-ad-card__content">
                  <p class="c-ad-card__text">
                    客製方案，各大行業，本利攤還，火速撥款，免證件可貸，免保人可貸，免抵押。
                  </p>
                </div>
                <a href="#" class="c-ad-card__link">
                  當日撥款 借錢首選
                </a>
              </div>
            </div>
            <div class="col-6 col-md-4">
              <div class="c-ad-card c-ad-card--featured">
                <div class="c-ad-card__media">
                  <img
                    src="/img/105340821.jpg"
                    alt="雲嘉南小額借款廣告"
                    class="c-ad-card__img"
                  >
                </div>
                <div class="c-ad-card__content">
                  <p class="c-ad-card__text">
                    小額借款，臨時周轉，免押證件，息低保密，手續簡便，借錢不求人，還款好輕鬆。
                  </p>
                </div>
                <a href="#" class="c-ad-card__link">
                  小額借款，雲嘉南地區
                </a>
              </div>
            </div>
            <div class="col-6 col-md-4">
              <div class="c-ad-card c-ad-card--featured">
                <div class="c-ad-card__media">
                  <img
                    src="/img/091640791.jpg"
                    alt="雲嘉南小額借款廣告"
                    class="c-ad-card__img"
                  >
                </div>
                <div class="c-ad-card__content">
                  <p class="c-ad-card__text">
                    有工作來就借，小額借貸，現金週轉便利站，安心借輕鬆還，手續簡便，歡迎來電。
                  </p>
                </div>
                <a href="#" class="c-ad-card__link">
                  24H快速借款 好商量
                </a>
              </div>
            </div>
            <div class="col-6 col-md-4">
              <div class="c-ad-card c-ad-card--featured">
                <div class="c-ad-card__media">
                  <img
                    src="/img/101340611.jpg"
                    alt="雲嘉南小額借款廣告"
                    class="c-ad-card__img"
                  >
                </div>
                <div class="c-ad-card__content">
                  <p class="c-ad-card__text">
                    客製方案，各大行業，本利攤還，火速撥款，免證件可貸，免保人可貸，免抵押。
                  </p>
                </div>
                <a href="#" class="c-ad-card__link">
                  當日撥款 借錢首選
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- 注意事項 -->
      <section class="c-notice">
        <div class="c-notice__container">
          <div class="c-notice__header-line-top"></div>
          <div class="c-notice__header">
            <h4 class="c-notice__title">借貸款 注意事項</h4>
          </div>
          <div class="c-notice__header-line-bottom"></div>

          <ol class="c-notice__list">
            <li class="c-notice__item">
              <span class="c-notice__item-title">年齡要求</span>
              <span class="c-notice__item-text">各類借款皆需滿20歲以上。</span>
            </li>
            <li class="c-notice__item">
              <span class="c-notice__item-title">貸款利率</span>
              <span class="c-notice__item-text">貸款年利率2%-18%,依照借款人提供的自身條件不同而異,再由借貸雙方協議後訂定最終利率。</span>
            </li>
            <li class="c-notice__item">
              <span class="c-notice__item-title">還款期限</span>
              <span class="c-notice__item-text">最低3個月,最長180個月,依照借貸雙方協議而訂。</span>
            </li>
            <li class="c-notice__item">
              <span class="c-notice__item-title">借款案例</span>
              <span class="c-notice__item-text">A君急需現金30萬元,經多方比較利率後選定金主,雙方簽定於36個月內須還清借款,年利率6%計算,手續費:3000元,每期還款金額9127元,最後一期9111元,總還款金額新台幣328,556元。</span>
            </li>
          </ol>
        </div>
      </section>

      <!-- 下方訊息 -->
      <section class="c-bottom-info">
        <div class="c-bottom-info__container">
          <!-- 導航連結 -->
          <nav class="c-bottom-info__nav">
            <a href="#" class="c-bottom-info__nav-link">關於本站</a>
            <span class="c-bottom-info__nav-divider">|</span>
            <a href="#" class="c-bottom-info__nav-link">免責聲明</a>
            <span class="c-bottom-info__nav-divider">|</span>
            <a href="#" class="c-bottom-info__nav-link">交換連結</a>
            <span class="c-bottom-info__nav-divider">|</span>
            <a href="#" class="c-bottom-info__nav-link">廣告刊登</a>
            <span class="c-bottom-info__nav-divider">|</span>
            <a href="#" class="c-bottom-info__nav-link">看稿區</a>
          </nav>

          <!-- 橙色警告橫幅 -->
          <div class="c-bottom-info__warning">
            台灣借錢網 提醒您:借錢救急不要急,請勿依照他人指示操作ATM、或匯款、或交付個人存摺與提款卡,避免受騙!
          </div>

          <!-- 版權資訊 -->
          <div class="c-bottom-info__copyright">
            2014-2025 © Tw97 台灣借錢網-小額借款、融資借貸、快速借錢網! All Rights Reserved.
          </div>

          <!-- 公司名稱 -->
          <div class="c-bottom-info__company">
             6597tw.com 有限公司
          </div>
        </div>
      </section>

    </div>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
