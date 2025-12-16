<!DOCTYPE html>
<html lang="zh-Hant">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap 5 -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    >
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <title>{{ $ad ? $ad->name : '小額借款，雲嘉南地區 就找我' }}</title>
</head>

<body>
    @include('partials.header')
    @php
        // 依照後台分類，為各城市小導航找到對應的分類（名稱包含該城市字樣即可）
        $keelungCategory   = \App\Models\Category::where('name', 'like', '%基隆%')->first();
        $taipeiCategory    = \App\Models\Category::where('name', 'like', '%台北%')->first();
        $newtaipeiCategory = \App\Models\Category::where('name', 'like', '%新北%')->first();
        $taoyuanCategory   = \App\Models\Category::where('name', 'like', '%桃園%')->first();
        $hsinchuCategory   = \App\Models\Category::where('name', 'like', '%新竹%')->first();
        $miaoliCategory    = \App\Models\Category::where('name', 'like', '%苗栗%')->first();
        $taichungCategory  = \App\Models\Category::where('name', 'like', '%台中%')->first();
        $changhuaCategory  = \App\Models\Category::where('name', 'like', '%彰化%')->first();
        $nantouCategory    = \App\Models\Category::where('name', 'like', '%南投%')->first();
        $yunlinCategory    = \App\Models\Category::where('name', 'like', '%雲林%')->first();
        $chiayiCategory    = \App\Models\Category::where('name', 'like', '%嘉義%')->first();
        $tainanCategory    = \App\Models\Category::where('name', 'like', '%台南%')->first();
        $kaohsiungCategory = \App\Models\Category::where('name', 'like', '%高雄%')->first();
        $pingtungCategory  = \App\Models\Category::where('name', 'like', '%屏東%')->first();
        $yilanCategory     = \App\Models\Category::where('name', 'like', '%宜蘭%')->first();
        $hualienCategory   = \App\Models\Category::where('name', 'like', '%花蓮%')->first();
        $taitungCategory   = \App\Models\Category::where('name', 'like', '%台東%')->first();

        // 目前這則廣告所屬的分類（用來在小 nav 上標示 active 紅底）
        $currentCategoryId = $ad->category_id ?? null;
    @endphp
    <!-- 小nav -->
    <nav class="c-small-nav">
        <div class="c-small-nav__container">
            <ul class="c-small-nav__list">
                <li class="c-small-nav__item">
                    <a
                      href="{{ $keelungCategory ? route('category.show', $keelungCategory->id) : '#' }}"
                      class="c-small-nav__link {{ isset($currentCategoryId, $keelungCategory) && $currentCategoryId === $keelungCategory->id ? 'c-small-nav__link--active' : '' }}"
                    >基隆</a>
                    <span class="c-small-nav__dot">·</span>
                </li>
                <li class="c-small-nav__item">
                    <a
                      href="{{ $taipeiCategory ? route('category.show', $taipeiCategory->id) : '#' }}"
                      class="c-small-nav__link {{ isset($currentCategoryId, $taipeiCategory) && $currentCategoryId === $taipeiCategory->id ? 'c-small-nav__link--active' : '' }}"
                    >台北</a>
                    <span class="c-small-nav__dot">·</span>
                </li>
                <li class="c-small-nav__item">
                    <a
                      href="{{ $newtaipeiCategory ? route('category.show', $newtaipeiCategory->id) : '#' }}"
                      class="c-small-nav__link {{ isset($currentCategoryId, $newtaipeiCategory) && $currentCategoryId === $newtaipeiCategory->id ? 'c-small-nav__link--active' : '' }}"
                    >新北</a>
                    <span class="c-small-nav__divider">|</span>
                </li>
                <li class="c-small-nav__item">
                    <a
                      href="{{ $taoyuanCategory ? route('category.show', $taoyuanCategory->id) : '#' }}"
                      class="c-small-nav__link {{ isset($currentCategoryId, $taoyuanCategory) && $currentCategoryId === $taoyuanCategory->id ? 'c-small-nav__link--active' : '' }}"
                    >桃園</a>
                    <span class="c-small-nav__dot">·</span>
                </li>
                <li class="c-small-nav__item">
                    <a
                      href="{{ $hsinchuCategory ? route('category.show', $hsinchuCategory->id) : '#' }}"
                      class="c-small-nav__link {{ isset($currentCategoryId, $hsinchuCategory) && $currentCategoryId === $hsinchuCategory->id ? 'c-small-nav__link--active' : '' }}"
                    >新竹</a>
                    <span class="c-small-nav__dot">·</span>
                </li>
                <li class="c-small-nav__item">
                    <a
                      href="{{ $miaoliCategory ? route('category.show', $miaoliCategory->id) : '#' }}"
                      class="c-small-nav__link {{ isset($currentCategoryId, $miaoliCategory) && $currentCategoryId === $miaoliCategory->id ? 'c-small-nav__link--active' : '' }}"
                    >苗栗</a>
                    <span class="c-small-nav__divider">|</span>
                </li>
                <li class="c-small-nav__item">
                    <a
                      href="{{ $taichungCategory ? route('category.show', $taichungCategory->id) : '#' }}"
                      class="c-small-nav__link {{ isset($currentCategoryId, $taichungCategory) && $currentCategoryId === $taichungCategory->id ? 'c-small-nav__link--active' : '' }}"
                    >台中</a>
                    <span class="c-small-nav__dot">·</span>
                </li>
                <li class="c-small-nav__item">
                    <a
                      href="{{ $changhuaCategory ? route('category.show', $changhuaCategory->id) : '#' }}"
                      class="c-small-nav__link {{ isset($currentCategoryId, $changhuaCategory) && $currentCategoryId === $changhuaCategory->id ? 'c-small-nav__link--active' : '' }}"
                    >彰化</a>
                    <span class="c-small-nav__dot">·</span>
                </li>
                <li class="c-small-nav__item">
                    <a
                      href="{{ $nantouCategory ? route('category.show', $nantouCategory->id) : '#' }}"
                      class="c-small-nav__link {{ isset($currentCategoryId, $nantouCategory) && $currentCategoryId === $nantouCategory->id ? 'c-small-nav__link--active' : '' }}"
                    >南投</a>
                    <span class="c-small-nav__divider">|</span>
                </li>
                <li class="c-small-nav__item">
                    <a
                      href="{{ $yunlinCategory ? route('category.show', $yunlinCategory->id) : '#' }}"
                      class="c-small-nav__link {{ isset($currentCategoryId, $yunlinCategory) && $currentCategoryId === $yunlinCategory->id ? 'c-small-nav__link--active' : '' }}"
                    >雲林</a>
                    <span class="c-small-nav__dot">·</span>
                </li>
                <li class="c-small-nav__item">
                    <a
                      href="{{ $chiayiCategory ? route('category.show', $chiayiCategory->id) : '#' }}"
                      class="c-small-nav__link {{ isset($currentCategoryId, $chiayiCategory) && $currentCategoryId === $chiayiCategory->id ? 'c-small-nav__link--active' : '' }}"
                    >嘉義</a>
                    <span class="c-small-nav__dot">·</span>
                </li>
                <li class="c-small-nav__item">
                    <a
                      href="{{ $tainanCategory ? route('category.show', $tainanCategory->id) : '#' }}"
                      class="c-small-nav__link {{ isset($currentCategoryId, $tainanCategory) && $currentCategoryId === $tainanCategory->id ? 'c-small-nav__link--active' : '' }}"
                    >台南</a>
                    <span class="c-small-nav__divider">|</span>
                </li>
                <li class="c-small-nav__item">
                    <a
                      href="{{ $kaohsiungCategory ? route('category.show', $kaohsiungCategory->id) : '#' }}"
                      class="c-small-nav__link {{ isset($currentCategoryId, $kaohsiungCategory) && $currentCategoryId === $kaohsiungCategory->id ? 'c-small-nav__link--active' : '' }}"
                    >高雄</a>
                    <span class="c-small-nav__dot">·</span>
                </li>
                <li class="c-small-nav__item">
                    <a
                      href="{{ $pingtungCategory ? route('category.show', $pingtungCategory->id) : '#' }}"
                      class="c-small-nav__link {{ isset($currentCategoryId, $pingtungCategory) && $currentCategoryId === $pingtungCategory->id ? 'c-small-nav__link--active' : '' }}"
                    >屏東</a>
                    <span class="c-small-nav__divider">|</span>
                </li>
                <li class="c-small-nav__item">
                    <a
                      href="{{ $yilanCategory ? route('category.show', $yilanCategory->id) : '#' }}"
                      class="c-small-nav__link {{ isset($currentCategoryId, $yilanCategory) && $currentCategoryId === $yilanCategory->id ? 'c-small-nav__link--active' : '' }}"
                    >宜蘭</a>
                    <span class="c-small-nav__dot">·</span>
                </li>
                <li class="c-small-nav__item">
                    <a
                      href="{{ $hualienCategory ? route('category.show', $hualienCategory->id) : '#' }}"
                      class="c-small-nav__link {{ isset($currentCategoryId, $hualienCategory) && $currentCategoryId === $hualienCategory->id ? 'c-small-nav__link--active' : '' }}"
                    >花蓮</a>
                    <span class="c-small-nav__dot">·</span>
                </li>
                <li class="c-small-nav__item">
                    <a
                      href="{{ $taitungCategory ? route('category.show', $taitungCategory->id) : '#' }}"
                      class="c-small-nav__link {{ isset($currentCategoryId, $taitungCategory) && $currentCategoryId === $taitungCategory->id ? 'c-small-nav__link--active' : '' }}"
                    >台東</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- 廣告內容 -->
    <div class="c-ad-wrapper">
        <div class="c-ad-wrapper__container">
            <div class="c-ad-content">
                <h2 class="c-ad-wrapper__title bg-green">{{ $ad ? $ad->name : '小額借款，雲嘉南地區 就找我' }}</h2>
               <div class="adbox">
                @if($ad && $ad->image)
                    <img src="{{ asset('storage/' . $ad->image) }}" alt="{{ $ad->name }}" class="c-ad-content__main-image">
                @else
                    <img src="{{ asset('img/105408451.jpg.thumb.jpg') }}" alt="小額借款廣告" class="c-ad-content__main-image">
                @endif
                 <p>{{ $ad ? $ad->description : '小額借款，臨時周轉，免押證件，息低保密，手續簡便，借錢不求人，還款好輕鬆。' }}</p>
               </div>

            </div>
        </div>
             <div class="c-ad-wrapper__container">
            <div class="c-ad-content">

               <div class="adbox">
                <img src="{{ asset('img/ 6957tw-safety-01.gif') }}" alt="小額借款廣告" class="c-ad-content__main-image">
                <img src="{{ asset('img/ 6957tw-safety-02.gif') }}" alt="小額借款廣告" class="c-ad-content__main-image">
                <img src="{{ asset('img/ 6957tw-safety-03.gif') }}" alt="小額借款廣告" class="c-ad-content__main-image">
                <!-- 文字區塊 -->
                <div class="c-safety-notice">
                    <h3 class="c-safety-notice__title">安全借錢,三不守則</h3>
                    <p class="c-safety-notice__warning text-danger pb-3">※ 請嚴格遵守,避免借錢不成~~反受騙!</p>
                    <div class="c-safety-notice__rules">
                        <div class="c-safety-notice__rule">
                            <h4 class="c-safety-notice__rule-title">借錢不郵寄</h4>
                            <p class="c-safety-notice__rule-text">郵寄存摺/金融卡,只會變成警示戶,並無法借到錢!</p>
                        </div>
                        <div class="c-safety-notice__rule">
                            <h4 class="c-safety-notice__rule-title">借錢不預付</h4>
                            <p class="c-safety-notice__rule-text">事先預付轉帳/儲值,只會有去無回,並無法借到錢!</p>
                        </div>
                        <div class="c-safety-notice__rule">
                            <h4 class="c-safety-notice__rule-title">借錢不認證</h4>
                            <p class="c-safety-notice__rule-text">提供驗證簡訊/信箱,只會協助詐騙,並無法借到錢!</p>
                        </div>
                    </div>
                </div>

                <!-- 底部聯繫 -->
                <div class="c-contact-info pb-3">
                    <h3 class="c-contact-info__main-title">{{ $ad ? $ad->subtitle : '北部首選,免留證,小額借款,雲嘉南地區 就找我' }}</h3>

                    @if($ad && $ad->content)
                        <div class="c-contact-info__content">
                            {!! $ad->content !!}
                        </div>
                    @else
                        <div class="c-contact-info__section">
                            <h4 class="c-contact-info__section-title">台南歡喜貸,免留證</h4>
                            <p class="c-contact-info__text">有收入就借,10分鐘馬上知道額度,每日前20名免息,機車貸款是什麼,只要您有缺錢,我來幫您處理</p>
                            <p class="c-contact-info__text">北部首選,免留證,台南別客氣問看看,借的到</p>
                            <p class="c-contact-info__text">職業軍人/學生/,拿手機,鈔好借,24小時,簡單借,輕鬆還,日繳500分60天結清</p>
                            <p class="c-contact-info__text">快速周轉,輕鬆繳,台南專業值得信賴,快速撥款,來就借</p>
                            <p class="c-contact-info__text">首月優惠,助您渡難關</p>
                        </div>

                        <div class="c-contact-info__section">
                            <h4 class="c-contact-info__section-title">快速周轉,台南拿手機</h4>
                            <p class="c-contact-info__text">手續簡便,當日撥款,日日會,小額借款,免押免保,房貸二胎</p>
                            <p class="c-contact-info__text">利息低,好商量保證借,來電即刻放款,台南借錢,便利週轉金,北區救急</p>
                        </div>

                        <div class="c-contact-info__section">
                            <h4 class="c-contact-info__section-title">小額證件借款</h4>
                            <p class="c-contact-info__text">小額證件借款,分期攤還,家庭借款,沒工作也可借,小額借款,頭期免息,即刻撥款,小額紓困簡單借,輕鬆還</p>
                            <p class="c-contact-info__text">借錢免留件,利息我最低,有工作、信用瑕疵、債務過高均可貸,台南缺錢不求人,簡單借款,輕鬆週轉</p>
                            <p class="c-contact-info__text">金主請來電,頭胎、二胎均可</p>
                        </div>
                    @endif
                </div>
                <img src="{{ asset('img/safety3.gif') }}" alt="小額借款廣告" class="c-ad-content__main-image">
            </div>

            </div>


        </div>
    </div>
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

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    /* 富文本内容样式 */
    .c-contact-info__content {
      margin-top: 20px;
    }

    .c-contact-info__content h4 {
      font-size: 18px;
      font-weight: 600;
      margin-top: 20px;
      margin-bottom: 10px;
      color: #333;
    }

    .c-contact-info__content h4:first-child {
      margin-top: 0;
    }

    .c-contact-info__content p {
      margin-bottom: 10px;
      line-height: 1.6;
      color: #555;
    }

    .c-contact-info__content img {
      max-width: 100%;
      height: auto;
      margin: 15px 0;
      border-radius: 4px;
    }

    .c-contact-info__content ul,
    .c-contact-info__content ol {
      margin: 15px 0;
      padding-left: 30px;
    }

    .c-contact-info__content li {
      margin-bottom: 8px;
      line-height: 1.6;
    }

    .c-contact-info__content table {
      width: 100%;
      border-collapse: collapse;
      margin: 15px 0;
    }

    .c-contact-info__content table td,
    .c-contact-info__content table th {
      padding: 8px;
      border: 1px solid #ddd;
    }

    .c-contact-info__content blockquote {
      border-left: 4px solid #007bff;
      padding-left: 15px;
      margin: 15px 0;
      color: #666;
      font-style: italic;
    }
  </style>
</body>

</html>
