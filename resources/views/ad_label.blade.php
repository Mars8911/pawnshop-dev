<!doctype html>
<html lang="zh-Hant">
<head>
  <meta charset="utf-8">
  <title>台灣借錢網 - 廣告刊登</title>
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
  <!-- 聯盟廣告 -->
  <main class="py-3">
    <div class="container">
      <!-- 目前位置 -->
      <div class="row mb-2">
        <div class="col-12">
          <div class="c-breadcrumb">
            <span class="c-breadcrumb__text">目前位置: 首頁 > 廣告刊登</span>
          </div>
        </div>
      </div>

      <!-- 左側導航 + 右側內容區 -->
      <div class="row">
        <!-- 左側導航欄 -->
        <div class="col-12 col-md-2 mb-2 mb-md-0">
          <nav class="c-sidebar-nav">
            <a href="#" class="c-sidebar-nav__item" data-content="alliance" onclick="switchContent('alliance'); return false;">
              聯盟網站
            </a>
            <a href="#" class="c-sidebar-nav__item" data-content="advantage" onclick="switchContent('advantage'); return false;">
              廣告優勢
            </a>
            <a href="#" class="c-sidebar-nav__item c-sidebar-nav__item--active" data-content="advertise" onclick="switchContent('advertise'); return false;">
              廣告刊登
              <span class="c-sidebar-nav__arrow">→</span>
            </a>
            <a href="#" class="c-sidebar-nav__item" data-content="about" onclick="switchContent('about'); return false;">
              關於本站
            </a>
            <a href="#" class="c-sidebar-nav__item" data-content="disclaimer" onclick="switchContent('disclaimer'); return false;">
              免責聲明
            </a>
          </nav>
        </div>

        <!-- 右側內容區 -->
        <div class="col-12 col-md-10">
          <!-- 聯盟網站內容 -->
          <div id="content-alliance" class="c-content-panel" style="display: none;">
            <h2 class="c-content-panel__title">聯盟網站</h2>
            <div class="c-content-panel__body">
              <div class="c-alliance-cards">
                @forelse($allianceAds as $ad)
                  <div class="c-alliance-card">
                    <a href="{{ $ad->link }}" target="_blank" rel="noopener noreferrer" class="c-alliance-card__link">
                      <div class="c-alliance-card__image-wrapper">
                        <img
                          src="{{ asset('storage/' . $ad->image) }}"
                          alt="{{ $ad->alt ?? '聯盟網站' }}"
                          class="c-alliance-card__image"
                        >
                      </div>
                    </a>
                  </div>
                @empty
                  <p style="text-align: center; color: #666; padding: 20px;">目前沒有聯盟廣告</p>
                @endforelse
              </div>
            </div>
          </div>

          <!-- 廣告優勢內容 -->
          <div id="content-advantage" class="c-content-panel" style="display: none;">
            <h2 class="c-content-panel__title">廣告優勢</h2>
            <div class="c-content-panel__body">
              <div class="c-advantage-grid">
                <!-- 優勢1：排名領先 -->
                <div class="c-advantage-card c-advantage-card--teal">
                  <div class="c-advantage-card__header">
                    《優勢1》排名領先
                  </div>
                  <div class="c-advantage-card__body">
                    <p>熱門關鍵字搜尋，第一頁內，搶佔1~3個排名。</p>
                    <p class="c-advantage-card__footer">(排名領先、台灣第一)</p>
                  </div>
                </div>

                <!-- 優勢2：多站導流 -->
                <div class="c-advantage-card c-advantage-card--orange">
                  <div class="c-advantage-card__header">
                    《優勢2》多站導流
                  </div>
                  <div class="c-advantage-card__body">
                    <p>匯集多站流量，成就台灣最大借錢廣告聯網。</p>
                    <p class="c-advantage-card__footer">(多站導流、借客充足)</p>
                  </div>
                </div>

                <!-- 優勢3：付費行銷 -->
                <div class="c-advantage-card c-advantage-card--green">
                  <div class="c-advantage-card__header">
                    《優勢3》付費行銷
                  </div>
                  <div class="c-advantage-card__body">
                    <p>多元付費平台廣告，額外導入更多借錢客源。</p>
                    <p class="c-advantage-card__footer">(付費行銷、成效加倍)</p>
                  </div>
                </div>

                <!-- 優勢4：免費設計 -->
                <div class="c-advantage-card c-advantage-card--purple">
                  <div class="c-advantage-card__header">
                    《優勢4》免費設計
                  </div>
                  <div class="c-advantage-card__body">
                    <p>提供您的廣告文案，由美工人員為您免費設計廣告圖。</p>
                    <p class="c-advantage-card__footer">(節省廣告設計費)</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- 廣告刊登內容 -->
          <div id="content-advertise" class="c-content-panel">
            <h2 class="c-content-panel__title">廣告刊登</h2>
            <div class="c-content-panel__body">
              <!-- 黃色橫幅區塊 -->
              <div class="c-ad-banner">
                <h3 class="c-ad-banner__title"> 6957tw台灣借錢網 廣告方案</h3>
                <p class="c-ad-banner__subtitle">一站刊登,多站導流,排名領先,效益卓越</p>
              </div>

              <!-- 廣告優勢區塊 -->
              <div class="c-ad-advantage">
                <h4 class="c-ad-advantage__title">《廣告優勢》</h4>
                <ul class="c-ad-advantage__list">
                  <li class="c-ad-advantage__item">
                    <strong>《優勢1》</strong>排名領先:熱門鍵字搜尋,第一頁內,搶佔1~3個排名。(排名領先、台灣第一)
                  </li>
                  <li class="c-ad-advantage__item">
                    <strong>《優勢2》</strong>多站導流:匯集多站流量,成就台灣最大借錢廣告聯網。(多站導流、借客充足)
                  </li>
                  <li class="c-ad-advantage__item">
                    <strong>《優勢3》</strong>付費行銷:多元付費平台廣告,額外導入更多借錢客源。(付費行銷、成效加倍)
                  </li>
                </ul>
              </div>

              <!-- 紅色警告區塊 -->
              <div class="c-ad-warning">
                <h4 class="c-ad-warning__title">※※※ 本站嚴禁下列行為之廣告刊登 ※※※</h4>
                <div class="c-ad-warning__content text-center">
                  <p>自營或轉介同業,要求「存摺、金融卡、網銀帳密」郵寄抵押,</p>
                  <p>要求「超商購點加值」、要求「預先支付任何費用,轉帳匯款」;</p>
                  <p>如經借客檢舉,查證屬實,一律提前下架終止曝光,且不予退費!</p>
                  <p>(廣告電話,如失聯、或非廣告主,一律提前下架,暫停曝光)</p>
                </div>
              </div>

              <!-- 綠色價格表格區塊 -->
              <div class="c-ad-pricing">
                <!-- 第一個表格：基本曝光方案 -->
                <table class="c-ad-pricing__table c-ad-pricing__table--basic">
                  <thead>
                    <tr>
                      <th>廣告曝光方案</th>
                      <th>一個月 (30天)</th>
                      <th>三個月 (90天)</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>地區版 曝光 (1單位曝光)</td>
                      <td><span class="c-ad-pricing__disabled">停售中</span></td>
                      <td class="c-ad-pricing__price">4,800</td>
                    </tr>
                    <tr>
                      <td>全國版 曝光 (全區1則曝光)</td>
                      <td><span class="c-ad-pricing__disabled">停售中</span></td>
                      <td class="c-ad-pricing__price">32,000</td>
                    </tr>
                  </tbody>
                </table>

                <!-- 第二個表格：加值曝光方案 -->
                <table class="c-ad-pricing__table c-ad-pricing__table--premium">
                  <thead>
                    <tr>
                      <th>加值曝光方案 <span class="c-ad-pricing__subtitle">(2018/03/15, 正式上線)</span></th>
                      <th>一星期 <span class="c-ad-pricing__subtitle">(體驗方案)</span></th>
                      <th>一個月 (30天)</th>
                      <th>備註說明</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class="c-ad-pricing__plan-name">地區版 優先排序</div>
                        <div class="c-ad-pricing__plan-desc">廣告優先曝光</div>
                        <div class="c-ad-pricing__plan-desc">搶先吸引目光</div>
                      </td>
                      <td><span class="c-ad-pricing__disabled">停售中</span></td>
                      <td class="c-ad-pricing__price">12,000</td>
                      <td>限量45單位</td>
                    </tr>
                    <tr>
                      <td>
                        <div class="c-ad-pricing__plan-name">
                          地區版 置頂曝光
                          <span class="c-ad-pricing__top-badge">TOP</span>
                        </div>
                        <div class="c-ad-pricing__plan-desc">電腦版 前二排</div>
                        <div class="c-ad-pricing__plan-desc">手機版 第一頁</div>
                      </td>
                      <td><span class="c-ad-pricing__disabled">停售中</span></td>
                      <td class="c-ad-pricing__price">36,000</td>
                      <td>限量6單位</td>
                    </tr>
                  </tbody>
                </table>
        <!-- 底部說明區塊 -->
                <div class="c-ad-pricing__footer">
                  以上所有金額，均含稅、含發票。
                </div>
              </div>

                      <!-- 第三 聯繫方式 -->
                      <div class="c-ad-contact">
                  <div class="c-ad-contact__welcome">~歡迎洽詢刊登~</div>
                  <div class="c-ad-contact__hours">服務時間 : 週一~週五 09:00~18:00</div>
                  <div class="c-ad-contact__phone">
                    洽詢電話 : <span class="c-ad-contact__number">0800888888</span>
                  </div>
                  <div class="c-ad-contact__line">
                    Line-ID : <span class="c-ad-contact__number">0800888888</span>
                  </div>
                  <div class="c-ad-contact__note">
                    ※非上班時間,可先用Line傳送您的需求;待上班時間,立即回覆您。
                  </div>
                </div>

            </div>
          </div>

          <!-- 關於本站內容 -->
          <div id="content-about" class="c-content-panel" style="display: none;">
            <h2 class="c-content-panel__title c-content-panel__title--with-icon">
              <span class="c-content-panel__icon"></span>
              網站記事
            </h2>
            <div class="c-content-panel__body">
              <ul class="c-timeline">
                @forelse($timelineItems as $item)
                  <li class="c-timeline__item">
                    <span class="c-timeline__date">{{ $item->date }}</span>
                    <span class="c-timeline__text">{{ $item->text }}</span>
                  </li>
                @empty
                  <li style="text-align: center; color: #666; padding: 20px;">目前沒有網站記事</li>
                @endforelse
              </ul>
            </div>

            <!-- 網站簡介 -->
            <div class="c-about-section">
              <h3 class="c-about-section__title">
                <span class="c-about-section__bar"></span>
                網站簡介
              </h3>
              <div class="c-about-section__content">
                <p>
                6957tw.台灣借錢網於2014年9月7日正式上線營運,服務網址為 6957tw。本網站以<span class="c-about-section__highlight">專業</span>、<span class="c-about-section__highlight">優質</span>、<span class="c-about-section__highlight">創新</span>的服務理念,致力成為<span class="c-about-section__highlight">台灣最大借錢資訊平台</span>,為借貸業者增加曝光量、建立品牌形象、吸引更多借錢客源。
                </p>
              </div>
            </div>

            <!-- 站名緣由 -->
            <div id="anchor-about-name" class="c-about-section">
              <h3 class="c-about-section__title">
                <span class="c-about-section__bar"></span>
                站名緣由
              </h3>
              <div class="c-about-section__content">
                <p>因為國語諧音「<span class="c-about-section__highlight">「來救我急」</span> = 6957</p>
                <p>而且台語諧音「<span class="c-about-section__highlight">「來借有錢」  </span> = 6957</p>
                <p>所以當有人急需借錢救急時,就會馬上聯想到「台灣借錢網」,成為借錢資訊的第一品牌。</p>
              </div>
            </div>

            <!-- 服務項目 -->
            <div class="c-about-section">
              <h3 class="c-about-section__title">
                <span class="c-about-section__bar"></span>
                服務項目
              </h3>
              <div class="c-about-section__content">
                <div class="c-services-box">
                  <div class="c-services-item">
                    <div class="c-services-item__label">提供借貸業者</div>
                    <p class="c-services-item__text">專業網路行銷宣傳,增加曝光量、增加能見度、來電數、提升品牌形象。</p>
                  </div>
                  <div class="c-services-item">
                    <div class="c-services-item__label">提供借款用戶</div>
                    <p class="c-services-item__text">優質便利借貸資訊與借錢管道,讓急需借錢救急的使用者,能快速找到適合的借貸方案。</p>
                  </div>
                </div>
              </div>
            </div>

          </div>

          <!-- 免責聲明內容 -->
          <div id="content-disclaimer" class="c-content-panel" style="display: none;">
            <h2 class="c-content-panel__title c-content-panel__title--centered">免責聲明</h2>
            <div class="c-content-panel__separator"></div>
            <div class="c-content-panel__body">
              <p>本網站僅提供借貸資訊供需平台,並不涉入其中任何借貸資訊之諮詢與交易,本網站對所有借貸資訊,亦不作任何實質或形式上之審查。</p>
              <p>本網站中所載一切資訊、文字、照片、圖形、產權、廣告內容、或其他資料(以下簡稱『內容』),無論其為公開張貼或私下傳送,若有不實或違法情事,均為『內容』提供者之責任,本站概不負責也不承擔任何法律責任。</p>
              <p class="c-disclaimer__warning">提醒您:請勿依照他人指示操作ATM、或匯款、或交付個人存摺與提款卡,避免受騙!</p>
            </div>
          </div>

        </div>
      </div>

      <!-- 下方訊息 -->
      @include('partials.bottom-info')

    </div>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // 處理底部導航連結的點擊事件
    function handleBottomNavClick(event, contentId, targetId) {
      // 檢查當前是否在 ad-label 頁面
      const currentPath = window.location.pathname;
      const isAdLabelPage = currentPath.includes('/ad-label');

      if (isAdLabelPage && typeof switchContent === 'function') {
        // 如果在 ad-label 頁面，阻止預設跳轉並切換內容
        event.preventDefault();
        switchContent(contentId);

        // 滾動到目標元素
        setTimeout(function() {
          const targetElement = document.getElementById(targetId);
          if (targetElement) {
            targetElement.scrollIntoView({ behavior: 'smooth', block: 'start' });
          }
        }, 100);
      }
      // 如果不在 ad-label 頁面，允許預設跳轉（會導航到帶參數的 URL）
    }

    function switchContent(contentId) {
      // 隱藏所有內容面板
      document.querySelectorAll('.c-content-panel').forEach(function(panel) {
        panel.style.display = 'none';
      });

      // 移除所有導航項目的 active 狀態
      document.querySelectorAll('.c-sidebar-nav__item').forEach(function(item) {
        item.classList.remove('c-sidebar-nav__item--active');
        const arrow = item.querySelector('.c-sidebar-nav__arrow');
        if (arrow) {
          arrow.remove();
        }
      });

      // 顯示選中的內容面板
      const contentPanel = document.getElementById('content-' + contentId);
      if (contentPanel) {
        contentPanel.style.display = 'block';
      }

      // 添加選中導航項目的 active 狀態
      const activeItem = document.querySelector('.c-sidebar-nav__item[data-content="' + contentId + '"]');
      if (activeItem) {
        activeItem.classList.add('c-sidebar-nav__item--active');
        // 添加箭頭圖標
        if (!activeItem.querySelector('.c-sidebar-nav__arrow')) {
          const arrow = document.createElement('span');
          arrow.className = 'c-sidebar-nav__arrow';
          arrow.textContent = '→';
          activeItem.appendChild(arrow);
        }
      }
    }

    // 根據 URL 參數切換內容並滾動
    function initContentFromUrl() {
      const urlParams = new URLSearchParams(window.location.search);
      const section = urlParams.get('section');

      // 定義對應的目標元素 ID
      const sectionMap = {
        'about': 'anchor-about-name',
        'disclaimer': 'content-disclaimer',
        'alliance': 'content-alliance',
        'advertise': 'content-advertise'
      };

      if (section && sectionMap[section]) {
        // 切換到對應的內容面板
        switchContent(section);

        // 滾動到目標元素
        setTimeout(function() {
          const targetElement = document.getElementById(sectionMap[section]);
          if (targetElement) {
            targetElement.scrollIntoView({ behavior: 'smooth', block: 'start' });
          }
        }, 300);
      } else {
        // 沒有參數時，預設顯示「廣告刊登」
        switchContent('advertise');
      }
    }

    // 頁面載入時初始化
    document.addEventListener('DOMContentLoaded', function() {
      initContentFromUrl();
    });
  </script>
</body>
</html>
