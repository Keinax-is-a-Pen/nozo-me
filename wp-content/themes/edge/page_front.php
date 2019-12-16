<?php
/**
 * Template Name: Frontpage Template
 *
 * @package Theme Freesia
 * @subpackage Edge
 * @since Edge 1.0
 */

get_header(); ?>

  <main role="main">

    <div class="wrapper">
      <section class="intro">
        <figure class="intro__img"><img src="/wp-content/uploads/2019/09/KV.jpg" alt="KV"></figure>
      </section><!--  /.intro -->
    </div><!-- /.wrapper --> 

    <div class="wrapper">
      <section class="works">
        <h2 class="works__title">Works</h2>
        <?php
          $args = [
            'category_name' => 'work',
            'numberposts' => 6,
            'order' => 'DESC'
          ];
        ?>
        <ul class="workList">
          <?php $custom_posts = get_posts($args);
            foreach ( $custom_posts as $post ): setup_postdata($post); ?>
              <li class="workList__item">
                <a href="<?php the_permalink(); ?>">
                <?php if (has_post_thumbnail()) : ?>
                  <figure class="workList__item-thumb"><img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"></figure>
                <?php else : ?>
                  <figure class="workList__item-thumb"><img src="<?php echo catch_that_image(); ?>" alt="<?php the_title(); ?>"></figure>
                <?php endif ; ?>
                  <h3 class="workList__item-title"><?php the_title(); ?></h3>
                </a>
              </li><!-- /.workList__item --> 
            <?php endforeach; ?>
        </ul><!-- /.workList -->
        <div class="works__moreBtn"><a href="/category/work/">MORE</a></div>
      </section><!-- /.works --> 

      <section class="blog">
        <h2 class="blog__title">Blog</h2>
        <?php
          $args02 = [
            'category_name' => 'blog',
            'numberposts' => 6,
            'order' => 'DESC'
          ];
        ?>
        <ul class="blogList">
          <?php $custom_posts02 = get_posts($args02);
            foreach ( $custom_posts02 as $post ): setup_postdata($post); ?>
              <li class="blogList__item">
                <figure class="blogList__item-thumb"><img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"></figure>
                <p class="blogList__item-desc"><?php the_excerpt(); ?></p>
                <div class="blogList__item-moreBtn"><a href="<?php the_permalink(); ?>">続きを読む</a></div>
              </li><!-- /.blogList__item --> 
            <?php endforeach; ?>
        </ul><!-- /.workList --> 
      </section><!-- /.works --> 
    </div><!--  /.wrapper -->

  </main>

<?php get_sidebar();
get_footer(); 