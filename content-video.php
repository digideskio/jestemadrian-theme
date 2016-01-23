<div class="post-header">
	
    <h2 class="post-title"><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
    
    <?php if( is_sticky() ) { ?> <span class="sticky-post"><?php _e('Sticky post', 'baskerville'); ?></span> <?php } ?>
    
</div> <!-- /post-header -->

<?php

    $post_custom = get_post_custom(get_the_ID());
    $video_url = isset($post_custom['video_url'][0]) ? $post_custom['video_url'][0] : null;

?>

<?php if ($video_url): ?>

	<div class="featured-media">
	
		<?php echo wp_oembed_get($video_url); ?>
	
	</div> <!-- /featured-media -->

<?php endif; ?>

<div class="post-excerpt">

	<?php the_excerpt('100'); ?>

</div> <!-- /post-excerpt -->

<?php baskerville_meta(); ?>
            
<div class="clear"></div>