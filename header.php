<!DOCTYPE html>
<html>
  
  <!-- 見えないところ始まり -->
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
  </head>
  <!-- 見えないところ終わり -->

  <!-- 見えるところ始まり -->
  <body>

    <!-- ヘッダー始まり -->
    <header>
      <div class="header-container">

        <h1><a href="<?php echo esc_url(home_url()); ?>">まんまる保育園</a></h1>

        <nav>
          <!-- モバイル用ナビゲーション始まり -->
          <div class="navbtn">
            <span></span>
            <span></span>
            <span></span>
          </div>
          <!-- モバイル用ナビゲーション終わり -->

          <!-- ヘッダー項目 -->
          <ul class="nav-menu">
            <li><a href="/">保育園のこと</a></li>
            <li><a href="/">入園案内</a></li>
            <li><a href="/">保育園での生活</a></li>
            <li><a href="/">給食について</a></li>
            <li><a href="/">求人情報</a></li>
            <li><a href="/">お問い合わせ</a></li>
          </ul>
          <!-- ヘッダー項目 -->
        </nav>
      
      </div>
    </header>
    <!-- ヘッダー終わり -->