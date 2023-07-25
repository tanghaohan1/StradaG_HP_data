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
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style_ss.css" />

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
    });//(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-85290322-1', 'auto');
    ga('send', 'pageview');
  </script>
</head>

<!-- .l-body | サイト全体 -->

<body <?php body_class('l-body'); ?>>
  <!-- .l-header | ヘッダー -->
  <header class="l-header">
    <div class="catch">ITを活用し、労務手続き・労務相談・給与計算など会社経営の労務を全面サポート!</div>
    <div class="h-btn">
      <span></span>
    </div>
    <div class="l-header__top">
      <div class="l-container">
        <div class="l-header__main">
          <div class="h-logo">
            <h1>
              <a href="<?php echo home_url(); ?>/">
                <img src="<?php echo get_template_directory_uri(); ?>/images/common_ss/logo.png" alt="" />
              </a>
            </h1>
          </div>
          <div class="h-info">
            <div class="h-phone">
              <p>無料相談予約</p>
              <a href="tel:0362311103" class="time" onclick="ga('send','event','tel','sp_tap','contact');">
                <span>
                  03-6231-1103
                  <small>平日：9時~18時</small>
                </span>
              </a>
            </div>
            <div class="h-mail h-mail--1">
              <a href="<?php echo home_url('strada-otoiawase'); ?>/?post_id=<?php echo $post->ID; ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/images/common_ss/ico-mail.svg" alt="" />
                <span>お問い合わせ</span>
              </a>
            </div>
<!--
            <div class="h-mail h-mail--2">
              <a href="https://timerex.net/s/strada.5kaigishitsu/9871b478" target="_blank">
                <img src="<?php echo get_template_directory_uri(); ?>/images/common_ss/ico-book.png" alt="" />
                <span>カレンダーから<br />無料相談を予約する</span>
              </a>
            </div>
            <div class="h-mail h-mail--3">
              <a href="https://line.me/R/ti/p/%40395gkqmy" target="_blank">
                <img src="<?php echo get_template_directory_uri(); ?>/images/common_ss/ico-line.svg" alt="" />
                <span>LINEでご相談</span>
              </a>
            </div>
  -->
            <div class="h-mail h-mail--4">
              <a href="#" target="_blank">
                <img src="<?php echo get_template_directory_uri(); ?>/images/common_ss/minilogo.png" alt="" />
              </a>
            </div>
            <div class="h-mail h-mail--4">
              <a href="#" target="_blank">
                <img style="width: 50px;height: auto;"src="<?php echo get_template_directory_uri(); ?>/images/common_ss/seach_icon.png" alt="" />
              </a>
            </div>

          </div>
        </div>
      </div>
    </div>
    <div class="l-header__nav">
      <div class="l-container">
        <ul class="h-nav">
          <li><a href="<?php echo home_url('srnewslist'); ?>"><div class="vertical-line">ニュース</div></a></li>
          <li>
            <a href="<?php echo home_url('srservice'); ?>"><div class="vertical-line">業務内容</div></a>
          </li>
          <li>
            <a href="<?php echo home_url('voice'); ?>"><div class="vertical-line">よくあるご質問</div></a>
          </li>
          <li>
            <a href="<?php echo get_permalink(134); ?>"><div class="vertical-line">事務所概要</div></a>
          </li>
          <li>
            <a href="<?php echo get_permalink(42); ?>"><div class="vertical-line">メンバー紹介</div></a>
          </li>
          <li>
            <a href="<?php echo get_post_type_archive_link('news'); ?>"><div class="vertical-line">料金表</div></a>
          </li>
          <li>
            <a href="<?php echo home_url('columns'); ?>"><div class="vertical-line">アクセス</div></a>
          </li>
          <li>
            <a href="<?php echo home_url('access'); ?>"><div class="vertical-line">リクルート</div></a>
          </li>         
        </ul>
      </div>
    </div>
  </header>