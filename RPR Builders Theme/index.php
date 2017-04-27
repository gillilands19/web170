<?php

if(is_front_page()) {
	get_header('home');
} else {
	get_header();
}
    ?>
        <!-- BEGIN CONTENT -->
        <div class="content grid group">
            <section class="about-rpr col span_3_of_3">
                <br>
                <br>
                
                <article class="about-blurb" id="about">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
                <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
					
                <?php the_content(''); ?>
					
                <?php endwhile; endif; ?>
                </article>
               
                <!--<article>
                    <br>
                    <br>
                    <p class="about-blurb" id="about"><br /><br />Duo sumo facilis ocurreret ad. Modus reformidans vel eu, ne erat volumus moderatius sed, usu id nominavi quaestio. Invenire comprehensam mea in, ex semper diceret feugait sit. Has clita numquam delenit ei, id eos aeque tempor, ei mei tamquam nominati dissentias. Cu aliquid electram pri, mel argumentum accommodare ex. Est alterum deleniti ei, an ius vidit omnium, eu elitr graece corrumpit vim. In mei case ubique delicatissimi. Dicam vituperatoribus nam ex, ne quo illud fugit appellantur, honestatis instructior mei ei. Nulla civibus disputationi in pri, vel ludus efficiendi in, pri id doming efficiendi. Mel vidit brute accumsan ad, et pro elit option. In vis corpora comprehensam, soluta discere pro no. Libris graeco quaerendum cu eam.
                    </p>
                </article>-->
            
            </section>
            
        <!-- BEGIN SERVICES THUMBNAILS -->
			<div class="services-thumbnails grid group"></div>
        <a href="#">
            <div class="work-thumb-one col span_1_of_3 image-container">
                <p id="image-title-one">Custom Cabinets</p>
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
	
<?php get_footer(); ?>
	
	
	