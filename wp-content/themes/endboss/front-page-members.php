    <?php
        $args = array( 'post_type' => 'endboss_member', 'posts_per_page' =>  4);
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post();?>

        <div class="post">
            <div><?php the_post_thumbnail('member-section') ?></div>
            <h3><?php the_title(); ?></h3>
           <?php the_content(); ?>
        </div>


        <?php endwhile; ?>



