<?php get_header(); ?>

    <!-- メインの写真 -->
    <div class="main-visual-container">
      <div class="main-visual">
        <img src="<?php echo get_template_directory_uri(); ?>/images/main1.jpg" alt="メイン写真">
      </div>
      <p></p>
    </div>
    <!-- メインの写真 -->

    <!-- メイン始まり -->
    <main>
    <?php if(have_posts()): while(have_posts()): the_post(); ?>
    <?php the_content(); ?>
      <!-- お知らせとブログ -->
      <div class="news-blog-container">

        <!-- お知らせの箱 -->
        <div class="news-container">

          <h2>お知らせ</h2>

          <!-- 記事 -->
          <ul class="news-content">
            <a href="/"><li>20XX.00.00</li>
            <li>あいうえおかきくけこさしすせそ</li></a>
          </ul>
          <br>
          <ul class="news-content">
            <a href="/"><li>20XX.00.00</li>
            <li>あいうえおかきくけこさしすせそ</li></a>
          </ul>
          
          <!-- 一覧へ行くボタンのこと -->
          <div class="content-btn">
            <a href="<?php echo esc_url(home_url('/news')); ?>">＝〉一覧を見る</a>
          </div>

        </div>
        <!-- お知らせの箱終わり -->

        <!-- ブログの箱 -->
        <div class="blog-container">

          <h2>ブログ</h2>

          <!-- 記事 -->
          <ul class="blog-content">
            <a href="/"><li>20XX.00.00</li>
            <li>あいうえおかきくけこさしすせそ</li></a>
          </ul>
          <br>
          <ul class="blog-content">
            <a href="/"><li>20XX.00.00</li>
            <li>あいうえおかきくけこさしすせそ</li></a>
          </ul>

          <!-- 一覧へ行くボタンのこと -->
          <div class="content-btn">
            <a href="/">＝〉一覧を見る</a>
          </div>

        </div>
        <!-- ブログの箱終わり -->

      </div>
      <!-- お知らせとブログ終わり -->

      <div class="line">
        <img src="<?php echo get_template_directory_uri(); ?>/images/sozai2.png">
      </div>

      <!-- こんな保育園です -->
      <div class="about-container">

        <h2>こんな保育園です！</h2>

        <!-- 写真と文字が入っている大きい箱 -->
        <div class="about-box">

          <!-- 写真と文字の箱 -->
          <div class="about-item">
            <img class="about-img" src="" alt="保育園1">
            <p>あいうえおかきくけこさしすせそ</p>
          </div>
          <div class="about-item">
            <img class="about-img" src="" alt="保育園2">
            <p>あいうえおかきくけこさしすせそ</p>
          </div>
          <div class="about-item">
            <img class="about-img" src="" alt="保育園3">
            <p>あいうえおかきくけこさしすせそ</p>
          </div>
          <!-- 写真と文字の箱終わり -->

        </div>
        <!-- 写真と文字が入っている大きい箱終わり -->

        <!-- 詳しく見るボタンのこと -->
        <div class="content-btn">
          <a href="/">＝〉詳しく見る</a>
        </div>

      </div>
      <!-- こんな保育園です終わり -->

      <div class="line">
        <img src="<?php echo get_template_directory_uri(); ?>/images/sozai3.png">
      </div>

      <!-- 保育園での生活 -->
      <div class="life-container">

        <h2>保育園での生活</h2>

        <!-- 写真と文字が入る大きい箱 -->
        <div class="life-box">

          <!-- 写真と文字の箱 -->
          <div class="life-item">
            <img class="life-img" src="<?php echo get_template_directory_uri(); ?>/images/walk.jpg" alt="生活1">
            <p>お散歩</p>
          </div>
          <div class="life-item">
            <img class="life-img" src="<?php echo get_template_directory_uri(); ?>/images/summer.jpg" alt="生活2">
            <p>夏祭り</p>
          </div>
          <div class="life-item">
            <img class="life-img" src="<?php echo get_template_directory_uri(); ?>/images/autumn.jpg" alt="生活3">
            <p>秋の遠足</p>
          </div>
          <div class="life-item">
            <img class="life-img" src="<?php echo get_template_directory_uri(); ?>/images/christmas.jpg" alt="生活4">
            <p>クリスマス会</p>
          </div>
          <!-- 写真と文字の箱終わり -->
          
        </div>
        <!-- 写真と文字が入る大きい箱終わり -->

        <!-- 詳しく見るボタンのこと -->
        <div class="content-btn">
          <a href="/">＝〉詳しく見る</a>
        </div>

      </div>
      <!-- 保育園での生活終わり -->

    <!-- ループ終了 -->
    <?php endwhile; else: ?>
    <!-- 投稿がないとき表示させる内容（例：お知らせはありません）があればここに書く -->
    <?php endif; ?>

    </main>
    <!-- メイン終わり -->

<?php get_footer(); ?>