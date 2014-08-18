<?php //the_content(); ?>
<section id="skills" role="content">
    <div class="container sixteen columns">
        <?php 
            // Show off those skills
            $args = array('post_type' => 'skill', 'posts_per_page' => 4, 'order' => 'ASC' );
            $mad_skills = new WP_Query($args);
            while( $mad_skills->have_posts()) :
            $mad_skills->the_post();

            $svg_name = get_post_meta($post->ID, '_dka_svg', true);
  
        ?>
        <div class="skill four columns">
            <div class="icon-wrap"><?php echo get_template_part('inline/icon', $svg_name.'.svg'); ?></div>
            <h2><?php the_title(); ?></h2>
            <p><?php echo get_the_content(); ?></p>
        </div>
        <?php endwhile; ?>

    </div>
</section>
