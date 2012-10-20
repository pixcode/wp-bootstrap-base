<?php

$slidesNumber = 4; //TODO: make an option

$sliderPosts = new WP_Query();
$sliderPosts->query( 'showposts=' . $slidesNumber ); //TODO: more options
$counter = 0;
?>
<div id="myCarousel" class="carousel slide">
	<div class="carousel-inner">
	<?php while($sliderPosts->have_posts( ) ) : $sliderPosts->the_post();?>
	<?php if( $counter == 0 ) $ljplIsActive = 'active '; else $ljplIsActive = ''; ?>
	<div class="<?php echo $ljplIsActive;?>item">
		<div class="carousel-caption">
		<h2 class="article-title"><a href="<?php the_permalink();?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
		<p><?php the_excerpt();?>
	</div>
	<?php the_post_thumbnail( 'image-posttype', array( 'class' => 'alignleft') ); ?> 

<?php endwhile;?>
  <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
  <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
</div>

