<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no">
  <title>Tomonosuke Kitamura's Portfolio</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <link href='<?php echo get_stylesheet_directory_uri(); ?>/additional.css' media="all" rel="stylesheet" type="text/css">
</head>

<body>
  <div id="wrapper">
    <header id="header">
      <h1 class="title">
        <span class="logo-title">Tomonosuke's </span><span class="logo-title"> portfolio</span>
      </h1>
    </header>

    <main id="contents">

      <section class="section" id="Profile">
        <div class="inner">
          <div class="section-title-block">
            <h2 class="section-title"><span class="section-title-css">MY PROFILE</span></h2>
          </div>
          <div class="two-column-wrapper">
            <p class="text">
              　北村知之佑です。<br>
              　前職はITエンジニアで、5ヶ月程勤怠管理システムの開発部に所属していました。<br>
              　一度IT業界から離れたものの、独学を進めていく中でもう一度IT業界に戻り開発に関わりたいと思うようになりました。<br>
              　実務経験はほぼありませんがSpring Bootでの開発を主に行っています。<br>
              　よろしくお願いいたします。
            </p>
          </div>
        </div>
      </section>

      <section class="section" id="skill">
        <div class="inner">
          <div class="section-title-block">
            <h2 class="section-title"><span class="section-title-css">MY SKILL</span></h2>
          </div>
          <div class="card">
            <div class="skill-desc">
              <h3 class="skill-desc-title">フロントエンド</h3>
              <p class="skill-desc-sentence">基本的な事は一通りできます。CSSフレームワークはbootstrap使いました。</p>
              <img src='<?php echo get_stylesheet_directory_uri(); ?>/skins/skin-template/images/frontend.png' alt="表示されません">
            </div>
          </div>
          <div class="card">
            <div class="skill-desc">
              <h3 class="skill-desc-title">バックエンド</h3>
              <p class="skill-desc-sentence">基本的な事は一通りできます。CSSフレームワークはbootstrap使いました。</p>
              <img src='<?php echo get_stylesheet_directory_uri(); ?>/skins/skin-template/images/backend.png' alt="表示されません">
            </div>
          </div>
          <div class="card">
            <div class="skill-desc">
              <h3 class="skill-desc-title">インフラ</h3>
              <p class="skill-desc-sentence">基本的な事は一通りできます。CSSフレームワークはbootstrap使いました。</p>
              <img src='<?php echo get_stylesheet_directory_uri(); ?>/skins/skin-template/images/infra.png' alt="表示されません">
            </div>
          </div>
          <div class="card">
            <div class="skill-desc">
              <h3 class="skill-desc-title">その他ツール</h3>
              <p class="skill-desc-sentence">基本的な事は一通りできます。CSSフレームワークはbootstrap使いました。</p>
              <img src='<?php echo get_stylesheet_directory_uri(); ?>/skins/skin-template/images/others.png' alt="表示されません">
            </div>
          </div>
        </div>
      </section>

      <section class="section" id="works" style="padding-top: 31.5px;">
        <div class="inner">
          <div class="section-title-block">
            <h2 class="section-title"><span class="section-title-css">MY WORK</span></h2>
            <div class="section-desc"></div>
          </div>
          <div class="card-wrapper my-gallery">

            <figure class="work-card">
              <div class="work-pic">
                <img class="card-image" src='http://localhost:50001/wp-content/themes/cocoon-child-master/skins/skin-template/images/maptraveler-screenshot.png' alt="maptraveler-screenshot">
              </div>

              <figcaption class="card-caption">
                <p class="card-caption-title">ポートフォリオ</p>
                <p class="card-caption-info">自分自身のポートフォリオです。</p>
                <p class="card-caption-info">HTML/CSS/bootstrap4</p>
              </figcaption>
            </figure>
          </div>
        </div>
      </section>
      <button id="scroll-to-top"><span id="arrow"></span></button>
    </main>
    <footer id="footer">
      <div class="inner">
        <p class="copyright">Copyright©Tomonosuke Kitamura's Portfolio All Rights Reserved</p>
      </div>
    </footer>
  </div>

  <script type="text/javascript" src='<?php echo get_stylesheet_directory_uri(); ?>/javascript.js'></script>
</body>

</html>