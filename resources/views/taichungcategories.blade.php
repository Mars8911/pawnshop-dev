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

      <!-- 大區塊：台中、彰化、南投類別 -->
      <section class="mb-3">
        <div class="c-region-grid">
          <div class="row g-0 justify-content-center">
          <!-- 台中 -->
          <div class="col-4">
            <a href="#"
               class="text-center text-decoration-none region-block region-block--taipei category-tab {{ (isset($taichungCategory) && isset($category) && $category->id == $taichungCategory->id) ? 'region-block--active' : '' }}"
               data-category="taichung"
               onclick="event.preventDefault(); switchCategory('taichung');">
              <div class="region-title">台中</div>
            </a>
          </div>
          <!-- 彰化 -->
          <div class="col-4">
            <a href="#"
               class="text-center text-decoration-none region-block region-block--taipei category-tab {{ (isset($changhuaCategory) && isset($category) && $category->id == $changhuaCategory->id) ? 'region-block--active' : '' }}"
               data-category="changhua"
               onclick="event.preventDefault(); switchCategory('changhua');">
              <div class="region-title">彰化</div>
            </a>
          </div>
          <!-- 南投 -->
          <div class="col-4">
            <a href="#"
               class="text-center text-decoration-none region-block region-block--taipei category-tab {{ (isset($nantouCategory) && isset($category) && $category->id == $nantouCategory->id) ? 'region-block--active' : '' }}"
               data-category="nantou"
               onclick="event.preventDefault(); switchCategory('nantou');">
              <div class="region-title">南投</div>
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
          <!-- 台中類別廣告 -->
          <div class="category-ads" id="ads-taichung" style="display: {{ (isset($taichungCategory) && isset($category) && $category->id == $taichungCategory->id) ? 'block' : 'none' }};">
            <div class="row g-3">
              @if(isset($taichungAds) && $taichungAds->count() > 0)
                @foreach($taichungAds as $ad)
                <div class="col-6 col-md-4">
                  <a href="{{ route('ad.page', ['id' => $ad->id]) }}" class="text-decoration-none">
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
                      <div class="c-ad-card__link">
                        {{ $ad->name ?? $ad->subtitle ?? '查看詳情' }}
                      </div>
                    </div>
                  </a>
                </div>
                @endforeach
              @else
                <div class="col-12">
                  <p class="text-center text-muted">尚無廣告刊登</p>
                </div>
              @endif
            </div>
          </div>

          <!-- 彰化類別廣告 -->
          <div class="category-ads" id="ads-changhua" style="display: {{ (isset($changhuaCategory) && isset($category) && $category->id == $changhuaCategory->id) ? 'block' : 'none' }};">
            <div class="row g-3">
              @if(isset($changhuaAds) && $changhuaAds->count() > 0)
                @foreach($changhuaAds as $ad)
                <div class="col-6 col-md-4">
                  <a href="{{ route('ad.page', ['id' => $ad->id]) }}" class="text-decoration-none">
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
                      <div class="c-ad-card__link">
                        {{ $ad->name ?? $ad->subtitle ?? '查看詳情' }}
                      </div>
                    </div>
                  </a>
                </div>
                @endforeach
              @else
                <div class="col-12">
                  <p class="text-center text-muted">尚無廣告刊登</p>
                </div>
              @endif
            </div>
          </div>

          <!-- 南投類別廣告 -->
          <div class="category-ads" id="ads-nantou" style="display: {{ (isset($nantouCategory) && isset($category) && $category->id == $nantouCategory->id) ? 'block' : 'none' }};">
            <div class="row g-3">
              @if(isset($nantouAds) && $nantouAds->count() > 0)
                @foreach($nantouAds as $ad)
                <div class="col-6 col-md-4">
                  <a href="{{ route('ad.page', ['id' => $ad->id]) }}" class="text-decoration-none">
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
                      <div class="c-ad-card__link">
                        {{ $ad->name ?? $ad->subtitle ?? '查看詳情' }}
                      </div>
                    </div>
                  </a>
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
      @include('partials.bottom-info')

    </div>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    function switchCategory(category) {
      // 隱藏所有廣告容器
      document.querySelectorAll('.category-ads').forEach(function(container) {
        container.style.display = 'none';
      });

      // 移除所有 tab 的 active 狀態
      document.querySelectorAll('.category-tab').forEach(function(tab) {
        tab.classList.remove('region-block--active');
      });

      // 顯示選中的類別廣告
      const adsContainer = document.getElementById('ads-' + category);
      if (adsContainer) {
        adsContainer.style.display = 'block';
      }

      // 添加選中 tab 的 active 狀態
      const activeTab = document.querySelector('.category-tab[data-category="' + category + '"]');
      if (activeTab) {
        activeTab.classList.add('region-block--active');
      }
    }

    // 頁面載入時，如果沒有預設顯示的類別，則顯示第一個有廣告的類別
    document.addEventListener('DOMContentLoaded', function() {
      const taichungAds = document.getElementById('ads-taichung');
      const changhuaAds = document.getElementById('ads-changhua');
      const nantouAds = document.getElementById('ads-nantou');

      // 檢查當前是否有顯示的廣告容器
      const visibleContainer = document.querySelector('.category-ads[style*="block"]');

      // 如果沒有顯示的容器，則顯示第一個有內容的類別
      if (!visibleContainer) {
        if (taichungAds && taichungAds.querySelector('.col-6')) {
          switchCategory('taichung');
        } else if (changhuaAds && changhuaAds.querySelector('.col-6')) {
          switchCategory('changhua');
        } else if (nantouAds && nantouAds.querySelector('.col-6')) {
          switchCategory('nantou');
        }
      }
    });
  </script>
</body>
</html>
