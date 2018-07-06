<?php
/**
 * Video Post Format
 *
 * @package marketing
 * @since 1.0
 */
?>
<?php 
  $video_url = marketing_get_post_opt('post-video-url');
  if(has_post_thumbnail() && !empty($video_url)): 
?>
<a class="tt-post-3-img tt-open-video custom-hover" href="#" data-video="<?php echo esc_url($video_url); ?>?autoplay=1">
  <?php the_post_thumbnail('marketing-medium', array('class' => 'img-responsive')); ?>
</a>
<?php endif; ?>


