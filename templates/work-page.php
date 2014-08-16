        <div class="intro">
            <div class="container">
                <h1>Recent Projects</h1>
                <p><?php echo get_the_content(); ?></p>
            </div>
        </div>
        <section id="folio" class="cf">
            <?php 
                $args = array('post_type' => 'project');
                $projects = new WP_Query($args);
                while( $projects->have_posts() ) : 
                $projects->the_post();

                $project_url = get_post_meta($post->ID, '_dka_project_url', true);
                $project_img = get_post_meta($post->ID, '_dka_project_img', true);
             ?>
            <article class="project">
                <a title="S<?php echo get_the_title(); ?>" href="<?php the_permalink(); ?>" style="background-image:url(<?php echo $project_img; ?>);">
                    <div class="description">
                        <span></span>
                        <h1><?php echo get_the_title(); ?></h1>
                    </div>
                    <div class="tech">
                        <ul>
                        <?php 
                            $terms = get_terms('tech');
                            $count = count($terms);
                            if($count > 0){
                                echo '<ul>';
                                foreach ($terms as $term) {
                                    echo '<li>'.$term->name.'</li>';
                                }
                                echo '</ul>';
                            }
                        ?>
                        </ul>
                    </div>
                </a>
            </article>
        <?php endwhile ?>
        </section>