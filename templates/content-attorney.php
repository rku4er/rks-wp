<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <header class="page-header">
      <h1 class="entry-title"><?php the_title(); ?></h1>
    </header>
    <div class="entry-content row">
      <div class="col-sm-3">
        <?php
          if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
            the_post_thumbnail('custom');
          }
        ?>
        <p class="position bg-info">Attorney</p>
        <?php if(get_field('contacts')): ?>
          <div class="contacts"><?php the_field('contacts'); ?></div>
        <?php endif; ?>
      </div>
      <div class="col-sm-9">
        <?php the_content(); ?>
      </div>
    </div>
    <footer>
      <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
    </footer>
    <?php comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>
