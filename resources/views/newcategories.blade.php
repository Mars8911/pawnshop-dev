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
                目前位置: 台灣借錢網》{{ $category->name ?? '分類頁面' }}
              </div>
              <div class="c-subhead-bar__right c-subhead-bar__right--safety">
                借錢不郵寄、不預付、不認證,安全借錢免受騙!
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- 大區塊：新北市類別 -->
      <section class="mb-3">
        <div class="c-region-grid">
          <div class="row g-0 justify-content-center">
          <!-- 新北市 -->
          <div class="col-6">
            <a href="#"
               class="text-center text-decoration-none region-block region-block--taipei category-tab region-block--active"
               data-category="newtaipei">
              <div class="region-title">新北市</div>
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
          <!-- 新北市類別廣告 -->
          <div class="category-ads" id="ads-newtaipei">
            <div class="row g-3">
              @if(isset($newtaipeiAds) && $newtaipeiAds->count() > 0)
                @foreach($newtaipeiAds as $ad)
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
                @endforeach
              @else
                <div class="col-12">
                  <p class="text-center text-muted">尚無廣告刊登</p>
                </div>
              @endif
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
