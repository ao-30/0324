<?php get_header(); ?>

  <main>
  <?php if(have_posts()): while(have_posts()): the_post(); ?>

    <article class="oshirasepage-container">

      <div class="oshirase">
        <time><?php echo get_the_date(); ?></time>&emsp;&emsp;<span class="category-name"><?php echo get_the_category()[0]->name; ?></span>
        <h1><?php the_title(); ?></h1>
      </div>
      <hr>
      <div class="oshirasepage-content">
        <?php the_content(); ?>
      </div>

    </article>
    
    <div class="content-btn">
      <a href="/">一覧へ戻る</a>
    </div>

    <!-- ループ終了 -->
    <?php endwhile; else: ?>
    <!-- 投稿がないとき表示させる内容（例：お知らせはありません）があればここに書く -->
    <?php endif; ?>
  
  </main>

<?php get_footer(); ?>