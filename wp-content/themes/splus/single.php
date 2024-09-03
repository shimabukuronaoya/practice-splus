<?php

get_header();
?>

<!-- pageTtl -->
<div class="pageTtlArea">
<img src="<?php echo get_template_directory_uri(); ?>/assets/img/kv.jpg" alt="" class="topKvImg">
<!-- <video src="/assets/img/blog/bg_blog-ttl.mp4" playsinline muted loop class="pageTtl__bgImg" id="blogVideo"></video> -->
  <h1 class="pageTtl">
    <span class="pageTtl__en chiaro">Blog</span>
    <span class="pageTtl__ja chiaro">ブログ</span>
  </h1>
</div>

<script>
  // videoの取得
  var video = document.getElementById('blogVideo');
  video.play();
  </script>
<!-- /pageTtl -->

<!-- メインコンテンツ -->
<main class="pageContainer">

  <?php
  //カテゴリ
  $cat = get_the_category(); //カテゴリを配列で取得
  $cat_name = $cat[0]->name; //カテゴリ名取得
  $cat_id = $cat[0]->term_id; //カテゴリidを取得
  $cat_link = get_category_link($cat_id); //カテゴリidから、リンクを取得

  //タグ
  $tags = get_the_tags();
  ?>
  <section class="l-section blogArticleArea">
    <div class="l-content">
      <div class="blogArtcleBox">
        <div class="ttlBox">
          <div class="meta">
            <div class="left">
              <p class="cat"><a href="<?php echo esc_url($cat_link); ?>" class="btn"><?php echo $cat_name ?></a></p>

              <?php if ($tags) : ?>
              <ul class="tagList">
                <?php foreach ($tags as $tag) : ?>
                <li><a href="<?php echo get_tag_link($tag->term_id) ?>"><?php echo $tag->name; ?></a></li>
                <?php endforeach; ?>
              </ul>
              <?php endif; ?>
            </div>
            <div class="right">
              <p class="date"><?php echo get_the_date(); ?></p>
            </div>
          </div>
          <h1 class="blogTtl chiaro"><?php the_title(); ?></h1>
        </div>
        <figure class="wp-block-image">
          <?php if (has_post_thumbnail()) : ?>
          <?php the_post_thumbnail('thumb-blog-eyecatch'); ?>
          <?php endif; ?>
        </figure>
        <?php the_content(); ?>
        <?php the_field('temp'); ?>
      </div>
    </div>
  </section>

  <script>
    jQuery(function($){
      $('.blogArticleArea h3').wrapInner("<span></span>");
    });
  </script>

  <?php
  $args = array(
    'post_type' => 'post',
    'post__not_in' => array($post->ID),
    'cat' => $cat_id,
    'posts_per_page' => 4,
    'orderby' => 'rand'
  );
  $the_query = new WP_Query($args);

  if (!$the_query->have_posts()) {
    wp_reset_postdata();

    $args = array(
      'post_type' => 'post',
      'post__not_in' => array($post->ID),
      'posts_per_page' => 4,
      'orderby' => 'rand'
    );
    $the_query = new WP_Query($args);
  }
  ?>

  <section class="l-section blogrelatedArea">
    <div class="l-content">
      <h2 class="ttl-style02">
        <span class="ttl-style02__txt chiaro">関連記事</span>
      </h2>
      <ul class="blogRelatedList">
        <?php
        if ($the_query->have_posts()) :
          while ($the_query->have_posts()) : $the_query->the_post();

            $categories = get_the_category();
            $cat_name = $categories[0]->name;
        ?>
        <li><a href="<?php the_permalink(); ?>">
            <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('thumb-blog-list'); ?>
                                <?php else : ?>
                                    <div class="blogList__imgBox">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog/img_dummy01.jpg" alt="" class="blogList__img">
                                    </div>
                                <?php endif; ?>
            </p>
            <p class="cat"><?php echo $cat_name ?></p>
            <div class="txtBox">
              <h3 class="ttl"><?php echo get_the_title(); ?><span class="date"><?php echo get_the_date(); ?></span></h3>
            </div>
          </a></li>
        <?php endwhile;
        endif; ?>
        <?php wp_reset_postdata(); ?>
      </ul>
      <p class="btnBox"><a href="/blog/" class="btn">一覧へ戻る</a></p>
    </div>
  </section>
</main>
<!-- /メインコンテンツ -->

<!-- bread -->
<section class="sec breadArea">
  <nav class="breadNav">
    <ul class="breadNavList">
      <li class="breadNavList__item"><a href="/" class="breadNavList__link">TOP</a></li>
      <li class="breadNavList__item"><a href="/blog/" class="breadNavList__link">ブログ</a></li>
      <li class="breadNavList__item"><?php the_title(); ?></li>
    </ul>
  </nav>
</section>
<!-- /bread -->

<?php
get_footer();
