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
                
                <article class="about-blurb" id="about">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
                <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
					
                <?php the_content(''); ?>
					
                <?php endwhile; endif; ?>
				</article>
            </section>
			<section class="recent-posts col span_1_of_3">
				<h2>Recent Posts</h2>
				<ul>
					<?php rewind_posts(); ?>
					<?php query_posts('showposts=4'); ?>
					<?php while (have_posts()) : the_post(); ?>
					<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
					<?php endwhile; ?>
				</ul>
			</section>
            
        <!-- BEGIN SERVICES THUMBNAILS -->
			<div class="services-thumbnails grid group"></div>
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
	<p>front-page.php</p>
	
<?php get_footer(); ?>