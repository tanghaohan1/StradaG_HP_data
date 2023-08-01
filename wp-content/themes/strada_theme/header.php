<!DOCTYPE html>
<html lang="ja">

<head>
  <!-- 対策系 -->
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />

  <!-- ファビコンの読み込み -->
  <link rel="icon" href="<?php echo home_url(); ?>/favicon.ico" />
  <link rel="apple-touch-icon-precomposed" href="<?php echo home_url(); ?>/apple-touch-icon-152x152.png" />

  <!-- プラグインのcssの読み込み -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/slick.min.css" />

  <!-- 書き出したcssの読み込み -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css" />

  <?php wp_head(); ?>
  <script>
    (function(i, s, o, g, r, a, m) {
      i['GoogleAnalyticsObject'] = r;
      i[r] = i[r] || function() {
        (i[r].q = i[r].q || []).push(arguments)
      }, i[r].l = 1 * new Date();
      a = s.createElement(o),
        m = s.getElementsByTagName(o)[0];
      a.async = 1;
      a.src = g;
      m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-85290322-1', 'auto');
    ga('send', 'pageview');
  </script>
</head>

<!-- .l-body | サイト全体 -->

<body <?php body_class('l-body'); ?>>
  <!-- .l-header | ヘッダー -->
  <header class="l-header">
    <div class="catch">ワンストップの集団だからこそできる部分最適ではなく全体最適な提案を。</div>
    <div class="h-btn">
      <span></span>
    </div>
    <div class="l-header__top">
      <div class="l-container_header">
        <div class="l-header__main">
          <div class="h-logo">
            <h1>
              <a href="<?php echo home_url(); ?>/">
                <img src="<?php echo get_template_directory_uri(); ?>/images/common/logo.png" alt="" />
              </a>
            </h1>
          </div>
          <div class="h-info">
            <div class="h-phone">
              <p>無料相談予約</p>
              <a href="tel:0356436431" class="time" onclick="ga('send','event','tel','sp_tap','contact');">
                <span>
                  03-5643-6431
                  <small>平日：9時~18時</small>
                </span>
              </a>
            </div>
            <div class="h-mail h-mail--1">
              <a href="<?php echo home_url('strada-otoiawase'); ?>/?post_id=<?php echo $post->ID; ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/images/common/ico-mail.svg" alt="" />
                <span>お問い合わせ</span>
              </a>
            </div>
            <div class="h-mail h-mail--4">
            </div>
            <div class="h-mail h-mail--4">
              <a href="#" target="_blank">
                <img style="width: 50px;height: auto;" src="<?php echo get_template_directory_uri(); ?>/images/common/seach_icon.png" alt="" />
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--↓other hp Lincks-->
    <div class="l-header__top2">
      <div class="h-otherhp">
        <div class="h-menum h-menum-sb">
          <div class="vertical-line">
            <p>
            <a href="<?php echo home_url('bs'); ?>">
                <span>ストラーダビジネスサポート</span>
              </a>
            </p>
          </div>
        </div>
        <div class="h-menum h-menum-sz">
          <div class="vertical-line">
            <p>
              <a href="<?php echo home_url('tax'); ?>">
                <span>ストラーダ税理士法人</span>
              </a>
            </p>
          </div>
        </div>
        <div class="h-menum h-menum-sg">
          <div class="vertical-line">
            <p>
              <a href="<?php echo home_url('admin'); ?>">
                <span>ストラーダ行政書士</span>
              </a>
            </p>
          </div>
        </div>
        <div class="h-menum h-menum-ss">
          <div class="vertical-line">
            <p>
              <a href="<?php echo home_url('sr'); ?>">
                <span>ストラーダ社会保険労務士</span>
              </a>
            </p>
          </div>
        </div>
        <div class="h-menum h-menum-ch">
          <div class="vertical-line">
            <p>
              <a href="<?php echo home_url('chushoukigyouroudou'); ?>">
                <span>中小企業労働企画開発協会</span>
              </a>
            </p>
          </div>
        </div>
        <div class="h-menum h-menum-tr">
          <div class="vertical-line">
            <p>
               <a href="<?php echo home_url('taxria'); ?>">
                <span>タックス・リアルティ</span>
              </a>
            </p>
            </div>
          </div>
      </div>
    </div>
    <!--↑other hp Lincks-->
    <div class="l-header__nav">
      <div class="l-container">
        <ul class="h-nav">
          <li><a href="<?php echo home_url('news'); ?>">
              <div class="vertical-line">ニュース</div>
            </a></li>
          <li>
            <a href="<?php echo home_url('#'); ?>">
              <div class="vertical-line">業務内容</div>
            </a>
          </li>
          <li>
            <a href="<?php echo home_url('#StradaGroup'); ?>">
              <div class="vertical-line">グループ紹介</div>
            </a>
          </li>
          <li>
            <a href="<?php echo home_url('#About'); ?>">
              <div class="vertical-line">会社概要</div>
            </a>
          </li>
          <li>
            <a href="<?php echo home_url('#menber'); ?>">
              <div class="vertical-line">メンバー紹介</div>
            </a>
          </li>
          <li>
            <a href="<?php echo home_url('access'); ?>">
              <div class="vertical-line">アクセス</div>
            </a>
          </li>
          <li>
            <a href="<?php echo home_url('#Recruit'); ?>">
              <div class="vertical-line">リクルート</div>
            </a>
          </li>
        </ul>
      </div>
      <div class="l-header_topline"></div>
    </div>

  </header>