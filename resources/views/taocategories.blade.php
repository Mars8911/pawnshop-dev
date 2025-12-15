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

      <!-- 大區塊：桃園、新竹、苗栗類別 -->
      <section class="mb-3">
        <div class="c-region-grid">
          <div class="row g-0 justify-content-center">
          <!-- 桃園 -->
          <div class="col-4">
            <a href="#"
               class="text-center text-decoration-none region-block region-block--taipei category-tab {{ (isset($taoyuanCategory) && isset($category) && $category->id == $taoyuanCategory->id) ? 'region-block--active' : '' }}"
               data-category="taoyuan"
               onclick="event.preventDefault(); switchCategory('taoyuan');">
              <div class="region-title">桃園</div>
            </a>
          </div>
          <!-- 新竹 -->
          <div class="col-4">
            <a href="#"
               class="text-center text-decoration-none region-block region-block--taipei category-tab {{ (isset($hsinchuCategory) && isset($category) && $category->id == $hsinchuCategory->id) ? 'region-block--active' : '' }}"
               data-category="hsinchu"
               onclick="event.preventDefault(); switchCategory('hsinchu');">
              <div class="region-title">新竹</div>
            </a>
          </div>
          <!-- 苗栗 -->
          <div class="col-4">
            <a href="#"
               class="text-center text-decoration-none region-block region-block--taipei category-tab {{ (isset($miaoliCategory) && isset($category) && $category->id == $miaoliCategory->id) ? 'region-block--active' : '' }}"
               data-category="miaoli"
               onclick="event.preventDefault(); switchCategory('miaoli');">
              <div class="region-title">苗栗</div>
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
          <!-- 桃園類別廣告 -->
          <div class="category-ads" id="ads-taoyuan" style="display: {{ (isset($taoyuanCategory) && isset($category) && $category->id == $taoyuanCategory->id) ? 'block' : 'none' }};">
            <div class="row g-3">
              @if(isset($taoyuanAds) && $taoyuanAds->count() > 0)
                @foreach($taoyuanAds as $ad)
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

          <!-- 新竹類別廣告 -->
          <div class="category-ads" id="ads-hsinchu" style="display: {{ (isset($hsinchuCategory) && isset($category) && $category->id == $hsinchuCategory->id) ? 'block' : 'none' }};">
            <div class="row g-3">
              @if(isset($hsinchuAds) && $hsinchuAds->count() > 0)
                @foreach($hsinchuAds as $ad)
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

          <!-- 苗栗類別廣告 -->
          <div class="category-ads" id="ads-miaoli" style="display: {{ (isset($miaoliCategory) && isset($category) && $category->id == $miaoliCategory->id) ? 'block' : 'none' }};">
            <div class="row g-3">
              @if(isset($miaoliAds) && $miaoliAds->count() > 0)
                @foreach($miaoliAds as $ad)
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
      const taoyuanAds = document.getElementById('ads-taoyuan');
      const hsinchuAds = document.getElementById('ads-hsinchu');
      const miaoliAds = document.getElementById('ads-miaoli');

      // 檢查當前是否有顯示的廣告容器
      const visibleContainer = document.querySelector('.category-ads[style*="block"]');

      // 如果沒有顯示的容器，則顯示第一個有內容的類別
      if (!visibleContainer) {
        if (taoyuanAds && taoyuanAds.querySelector('.col-6')) {
          switchCategory('taoyuan');
        } else if (hsinchuAds && hsinchuAds.querySelector('.col-6')) {
          switchCategory('hsinchu');
        } else if (miaoliAds && miaoliAds.querySelector('.col-6')) {
          switchCategory('miaoli');
        }
      }
    });
  </script>
</body>
</html>
