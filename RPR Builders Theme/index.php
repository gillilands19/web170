<?php

if(is_front_page()) {
	get_header('home');
} else {
	get_header();
}
    ?>
        <!-- BEGIN CONTENT -->
        <div class="blog-content grid group">
            <section class="about-rpr col span_2_of_3">
                <br>
                <br>
                
                
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<article class="about-blurb" id="about">	
                <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
				<?php the_post_thumbnail('full'); ?>
					<br>
				<small>
					<?php the_time('F j, Y'); ?>
					<br>
					Posted by: <?php the_author(); ?>
					<br>
					<?php the_category(', '); ?>
				</small>	
                <?php the_excerpt(); ?>
					<a href="<?php the_permalink(); ?>"> Read More </a>
					
				</article>
                <?php endwhile; endif; ?>
				
            </section>
			
			<?php get_sidebar(); ?>
			    
        <!-- BEGIN SERVICES THUMBNAILS -->
			<div id="blog-services" class="services-thumbnails grid group"></div>
			
		<div class="thumbnail-wrapper">	
        <a href="#">
            <div class="work-thumb-one col span_1_of_3 image-container">
                <p id="image-title-one">Custom Cabinetry</p>
            </div>
        </a>
        
        <a href="#">
            <div class="work-thumb-two col span_1_of_3 image-container"> 
                <p id="image-title-two">Renovation &amp; Repair</p>
            </div>
        </a>
        <a href="#">
            <div class="work-thumb-three col span_1_of_3 image-container">
                 <p id="image-title-three">Furniture</p>
            </div>
        </a>
	</div>
	</div>
	<p>index.php</p>
	
<?php get_footer(); ?>
	
	
	