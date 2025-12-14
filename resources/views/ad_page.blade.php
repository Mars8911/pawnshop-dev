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
    <!-- 小nav -->
    <nav class="c-small-nav">
        <div class="c-small-nav__container">
            <ul class="c-small-nav__list">
                <li class="c-small-nav__item">
                    <a href="#" class="c-small-nav__link">基隆</a>
                    <span class="c-small-nav__dot">·</span>
                </li>
                <li class="c-small-nav__item">
                    <a href="#" class="c-small-nav__link">台北</a>
                    <span class="c-small-nav__dot">·</span>
                </li>
                <li class="c-small-nav__item">
                    <a href="#" class="c-small-nav__link">新北</a>
                    <span class="c-small-nav__divider">|</span>
                </li>
                <li class="c-small-nav__item">
                    <a href="#" class="c-small-nav__link">桃園</a>
                    <span class="c-small-nav__dot">·</span>
                </li>
                <li class="c-small-nav__item">
                    <a href="#" class="c-small-nav__link">新竹</a>
                    <span class="c-small-nav__dot">·</span>
                </li>
                <li class="c-small-nav__item">
                    <a href="#" class="c-small-nav__link">苗栗</a>
                    <span class="c-small-nav__divider">|</span>
                </li>
                <li class="c-small-nav__item">
                    <a href="#" class="c-small-nav__link">台中</a>
                    <span class="c-small-nav__dot">·</span>
                </li>
                <li class="c-small-nav__item">
                    <a href="#" class="c-small-nav__link">彰化</a>
                    <span class="c-small-nav__dot">·</span>
                </li>
                <li class="c-small-nav__item">
                    <a href="#" class="c-small-nav__link">南投</a>
                    <span class="c-small-nav__divider">|</span>
                </li>
                <li class="c-small-nav__item">
                    <a href="#" class="c-small-nav__link">雲林</a>
                    <span class="c-small-nav__dot">·</span>
                </li>
                <li class="c-small-nav__item">
                    <a href="#" class="c-small-nav__link">嘉義</a>
                    <span class="c-small-nav__dot">·</span>
                </li>
                <li class="c-small-nav__item">
                    <a href="#" class="c-small-nav__link">台南</a>
                    <span class="c-small-nav__divider">|</span>
                </li>
                <li class="c-small-nav__item">
                    <a href="#" class="c-small-nav__link">高雄</a>
                    <span class="c-small-nav__dot">·</span>
                </li>
                <li class="c-small-nav__item">
                    <a href="#" class="c-small-nav__link">屏東</a>
                    <span class="c-small-nav__divider">|</span>
                </li>
                <li class="c-small-nav__item">
                    <a href="#" class="c-small-nav__link">宜蘭</a>
                    <span class="c-small-nav__dot">·</span>
                </li>
                <li class="c-small-nav__item">
                    <a href="#" class="c-small-nav__link">花蓮</a>
                    <span class="c-small-nav__dot">·</span>
                </li>
                <li class="c-small-nav__item">
                    <a href="#" class="c-small-nav__link">台東</a>
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
                <img src="{{ asset('img/tw97-safety-01.gif') }}" alt="小額借款廣告" class="c-ad-content__main-image">
                <img src="{{ asset('img/tw97-safety-02.gif') }}" alt="小額借款廣告" class="c-ad-content__main-image">
                <img src="{{ asset('img/tw97-safety-03.gif') }}" alt="小額借款廣告" class="c-ad-content__main-image">
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
