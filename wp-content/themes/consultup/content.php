<?php
/**
 * The template for displaying the content.
 * @package consultup
 */
?>
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php $post_category = get_theme_mod('post_category_enable',false);
		$post_title = get_theme_mod('post_title_enable',false);
		$post_meta = get_theme_mod('post_meta_enable',false); ?>
	<div class="consultup-blog-post-box">
		<div class="consultup-blog-thumb">
			<?php 
			if(has_post_thumbnail()){
			echo '<a class="consultup-blog-thumb" href="'.esc_url(get_the_permalink()).'">';
			the_post_thumbnail( '', array( 'class'=>'img-responsive' ) );
			echo '</a>';
			?>
			<?php if($post_category !== true){ ?>
			<div class="consultup-blog-category"> 
			 
				<i class="fa fa-folder-open-o"></i> 
				<?php   $cat_list = get_the_category_list();
				if(!empty($cat_list)) { ?>
				<?php the_category(', '); ?>
				<?php } ?>
			</div>
			<?php } } else { ?>
			<?php if($post_category !== true){ ?>
				<div class="consultup-blog-category-left"> 
			 	<i class="fa fa-folder-open-o"></i> 
				<?php   $cat_list = get_the_category_list();
				if(!empty($cat_list)) { ?>
				<?php the_category(', '); ?>
				<?php } ?>
			</div>

			<?php } } ?>
		</div>


		<article class="small"> 
		<?php if($post_title !== true){ ?>
			<h4 class="title"> <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute( array('before' => 'Permalink to: ','after'  => '') ); ?>">
			<?php the_title(); ?></a>
			</h4>	
			<?php } if($post_meta !== true) { ?>
			<div class="consultup-blog-meta">
				<span class="consultup-blog-date"><i class="fas fa-clock"></i><a href="<?php echo esc_url(get_month_link(get_post_time('Y'),get_post_time('m'))); ?>">
			<?php echo esc_html(get_the_date('M j, Y')); ?></a></span>
			<?php $tags = get_the_tags();
			if($tags){  ?>
				<span class="consultup-tags"><i class="fa fa-tag"></i>
				<?php
                  $keys = array_keys($tags);
                    foreach ($tags as $key => $tag) {
                      $tag_link = get_tag_link($tag->term_id);
                      if ($key === end($keys)) {
                        echo '<a href="'.esc_url($tag_link).'">#'.esc_html($tag->name).'</a>';
                      } else {
                        echo ' <a href="'.esc_url($tag_link).'">#'.esc_html($tag->name).'</a>, ';
                      }
                    } ?>
				</span>
			<?php } ?>
			<a class="consultup-icon" href="<?php echo esc_url(get_author_posts_url( get_the_author_meta( 'ID' ) ));?>"><i class="far fa-newspaper"></i> <?php esc_html_e('by','consultup'); ?>
				<?php the_author(); ?>
				</a>
			<?php consultup_edit_link(); ?>	
			</div>	
    		<?php } the_content(__('Read More','consultup'));
				wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'consultup' ), 'after' => '</div>' ) ); ?>
		</article>
	</div>
</div>