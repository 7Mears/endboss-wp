    <?php
        $args = array( 'post_type' => 'endboss_member', 'posts_per_page' => 10 );
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post();?>

        <div class="post">
            <h3><?php the_title(); ?></h3>
            <p><?php the_content(); ?></p>
        </div>


    <?php endwhile; ?>




