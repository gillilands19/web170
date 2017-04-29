<aside class="sidebar col span_1_of_3">
	
	<div id="side-nav" class="widget">
		
		<?php if (is_page()) : ?>
		
    	<h2><?php echo get_the_title($post->post_parent);?></h2>
		<ul class="sub-nav-items">
    		<?php if ($post->post_parent) {
				wp_list_pages(array('child_of' => $post->post_parent, 'title_li' => __('')));
			} else {
				wp_list_pages(array('child_of' => $post->ID, 'title_li' => __('')));
			}
			?>
    	</ul>
		<?php endif; ?>
		<?php if (!(is_page())) : ?>
		<h2>Categories</h2>
		<ul class="sub-nav-items"><?php wp_list_categories(array('title_li' => __(''))); ?></ul>
		<?php endif; ?>
		<?php dynamic_sidebar(1); ?>
	</div>
	
</aside>