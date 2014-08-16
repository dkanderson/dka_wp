<?php while (have_posts()) : the_post(); 
	$project_url = get_post_meta($post->ID, '_dka_project_url', true);
	$screenshot1 = get_post_meta($post->ID, '_dka_ss1', true);
	$screenshot2 = get_post_meta($post->ID, '_dka_ss2', true);
	$screenshot3 = get_post_meta($post->ID, '_dka_ss3', true);


	$bg_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID));
?>
<section id="client-banner" style="background-image:url(<?php echo $bg_image; ?>);">
	<a class="project-link" href="http://soleillaurent.com">S</a>
	<div class="project-nav"><a class="prev-project" href="<?php echo $project_url; ?>"><svg class="icon icon-arrow-left" viewBox="0 0 32 32"><use xlink:href="#icon-arrow-left"></use></svg></a><a class="next-project" href="#"><svg class="icon icon-arrow-left2" viewBox="0 0 32 32"><use xlink:href="#icon-arrow-left2"></use></svg></a></div>
</section>
<section id="soleil_laurent">
	<div class="container sixteen columns clearfix">
		<div class="container eight columns">
			<div class="fold "><img src="<?php echo $screenshot1; ?>" alt="Soleil Laurent Home Page Screenshot"></div>
		</div>
		<div class="container eight columns">
			<div class="client-meta">
				<h1><?php echo get_the_title(); ?></h1>
				<dl>
					<dt>url</dt>
						<dd><a title="Soleil Laurent" href="<?php echo $project_url; ?>"><?php echo $project_url; ?></a></dd>
					<dt>tech</dt>
						<dd>
							<?php
								$tech_list = get_terms('tech');
								$count = count($tech_list);

								$prefix = '';
								foreach ($tech_list as $tech) {
									if($count > 0){
										echo $prefix.$tech->name;
										$prefix = ', ';
									}

								}
							?>
						</dd>
					<dt>description</dt>	
						<dd><?php echo get_the_content(); ?></dd>
				</dl>
			</div>
		</div>
	</div>
</section>
<?php endwhile; ?>
