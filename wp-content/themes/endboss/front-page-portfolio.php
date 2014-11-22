<?php $posts = get_posts( "category=3&numberposts=3" ); ?>
<?php if( $posts ) : ?>
<?php foreach( $posts as $post ) : setup_postdata( $post ); ?>

    <div class="post">
      <?php the_post_thumbnail(); ?>
      <div class="post-content">
        <h3><a href="<?php echo get_permalink($post->ID); ?>" ><?php echo $post->post_title; ?></a></h3>
        <?php the_excerpt(); ?>
      </div>
    </div>

<?php endforeach; ?>
<?php endif; ?>
