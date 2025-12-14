<!doctype html>
<html lang="zh-Hant">
<head>
  <meta charset="utf-8">
  <title>台灣借錢網 - 借錢直達｜在地．便利．快速！</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap 5 -->
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
  >
  <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>
<body class="bg-light">

  @include('partials.header')
  <!-- 內文區 -->
  <main class="py-3">
    <div class="container-fluid">

      <!-- 小標 -->
      <div class="row mb-3">
        <div class="col-12">
          <div class="c-subhead-bar">
            <div class="c-subhead-bar__content">
              <div class="c-subhead-bar__left">
                <span class="c-subhead-bar__title">借錢直達</span>
                <span class="c-subhead-bar__divider">|</span>
                <span class="c-subhead-bar__subtitle">在地．便利．快速！</span>
              </div>
              <div class="c-subhead-bar__right">
                借錢 借款 借貸 融資 當舖 票貼 二胎 貸款
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- 大區塊：台北借錢、新北借錢… -->
      <section class="mb-3">
        <div class="c-region-grid">
          <div class="row g-2 g-md-1 justify-content-center">
          <!-- 台北借錢 -->
          <div class="col-6 col-md-4">
            <div class="region-block">
              <div class="region-title">台北借錢</div>
              <div class="region-sub">借錢<br>管道</div>
            </div>
          </div>

          <!-- 新北借錢 -->
          <div class="col-6 col-md-4">
            <div class="region-block">
              <div class="region-title">新北借錢</div>
              <div class="region-sub">借錢<br>管道</div>
            </div>
          </div>

          <!-- 桃園借錢 -->
          <div class="col-6 col-md-4">
            <div class="region-block">
              <div class="region-title">桃園借錢</div>
              <div class="region-sub">借錢<br>管道</div>
            </div>
          </div>

          <!-- 下面第二排（台中借錢、台南借錢、高雄借錢） -->
          <div class="col-6 col-md-4">
            <div class="region-block">
              <div class="region-title">台中借錢</div>
              <div class="region-sub">借錢<br>管道</div>
            </div>
          </div>

          <div class="col-6 col-md-4">
            <div class="region-block">
              <div class="region-title">台南借錢</div>
              <div class="region-sub">借錢<br>管道</div>
            </div>
          </div>

          <div class="col-6 col-md-4">
            <div class="region-block">
              <div class="region-title">高雄借錢</div>
              <div class="region-sub">借錢<br>管道</div>
            </div>
          </div>
          </div>
        </div>
      </section>

      <!-- 小城市按鈕列（藍色小格） -->
      <section class="mb-4 c-city-grid">
        <div class="row g-0 city-row">
          @forelse($categories as $category)
            <div class="col-4 col-md-2">
              <a href="{{ route('category.show', $category->id) }}" class="city-block">{{ $category->name }}</a>
            </div>
          @empty
            <div class="col-12">
              <p class="text-center text-muted">目前沒有可用的類別</p>
            </div>
          @endforelse
        </div>

        <div class="row g-1 city-row">

        </div>
      </section>

      <!-- 下方廣告列 -->
      <section class="mb-4 c-ad-strip">
        <div class="c-ad-strip__container">
          <div class="row g-3">
            <div class="col-6 col-md-4">
              <div class="c-ad-card c-ad-card--featured">
                <div class="c-ad-card__media">
                  <img
                    src="{{ asset('img/105340821.jpg') }}"
                    alt="雲嘉南小額借款廣告"
                    class="c-ad-card__img"
                  >
                </div>
                <div class="c-ad-card__content">
                  <p class="c-ad-card__text">
                    小額借款，臨時周轉，免押證件，息低保密，手續簡便，借錢不求人，還款好輕鬆。
                  </p>
                </div>
                <a href="ad01.html" class="c-ad-card__link">
                  小額借款，雲嘉南地區
                </a>
              </div>
            </div>
            <div class="col-6 col-md-4">
              <div class="c-ad-card c-ad-card--featured">
                <div class="c-ad-card__media">
                  <img
                    src="{{ asset('img/091640791.jpg') }}"
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
                    src="{{ asset('img/101340611.jpg') }}"
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
                    src="{{ asset('img/105340821.jpg') }}"
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
                    src="{{ asset('img/091640791.jpg') }}"
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
                    src="{{ asset('img/101340611.jpg') }}"
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
                    src="{{ asset('img/105340821.jpg') }}"
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
                    src="{{ asset('img/091640791.jpg') }}"
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
                    src="{{ asset('img/101340611.jpg') }}"
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
                    src="{{ asset('img/105340821.jpg') }}"
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
                    src="{{ asset('img/091640791.jpg') }}"
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
                    src="{{ asset('img/101340611.jpg') }}"
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
                    src="{{ asset('img/105340821.jpg') }}"
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
                    src="{{ asset('img/091640791.jpg') }}"
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
                    src="{{ asset('img/101340611.jpg') }}"
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
                    src="{{ asset('img/105340821.jpg') }}"
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
                    src="{{ asset('img/091640791.jpg') }}"
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
                    src="{{ asset('img/101340611.jpg') }}"
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
                    src="{{ asset('img/105340821.jpg') }}"
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
                    src="{{ asset('img/091640791.jpg') }}"
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
                    src="{{ asset('img/101340611.jpg') }}"
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
                    src="{{ asset('img/105340821.jpg') }}"
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
                    src="{{ asset('img/091640791.jpg') }}"
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
                    src="{{ asset('img/101340611.jpg') }}"
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
