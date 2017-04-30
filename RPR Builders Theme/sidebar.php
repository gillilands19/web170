<?php $page_for_posts = get_option( 'page_for_posts' ); ?>

<aside class="sidebar col span_1_of_3">
	
	<div class="sidebar-content-wrapper">
		
		<?php if (is_page()) : ?>
		<div class="widget">
    	<h2><?php echo get_the_title($post->post_parent);?></h2>
		<ul class="sub-nav-items">
    		<?php if ($post->post_parent) {
				wp_list_pages(array('child_of' => $post->post_parent, 'title_li' => __('')));
			} else {
				wp_list_pages(array('child_of' => $post->ID, 'title_li' => __('')));
			}
			?>
    	</ul>
		</div>
		<?php endif; ?>
		
		<?php if (get_post_meta($page_for_posts, 'Quote', true) && is_home()) : ?>
		<div class="widget quote">
		<blockquote><?php echo get_post_meta($page_for_posts, 'Quote', true); ?></blockquote>
		</div>
		<? endif; ?>
		
		<?php if (get_post_meta($post->ID, 'Quote', true)) : ?>
		<div class="widget quote">
		<blockquote><?php echo get_post_meta($post->ID, 'Quote', true); ?></blockquote>
		</div>
		<? endif; ?>
		
		<?php if (!(is_page())) : ?>
		
		<div id="side-nav" class="widget">
		<h2>Categories</h2>
		<ul class="sub-nav-items"><?php wp_list_categories(array('title_li' => __(''))); ?></ul>
		</div>
		<?php endif; ?>
			
		<?php dynamic_sidebar(1); ?>
		
		</div>
	
</aside>