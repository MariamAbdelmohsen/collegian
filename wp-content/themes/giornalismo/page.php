<?php
/**
* Page.php
*
* Basic page template for Giornalismo
*
* @author Jacob Martella
* @package Giornalismo
* @version 1.5
*/
get_header();
?>
<main class="page-single">
	<?php while ( have_posts() ) : the_post(); ?>
		<article id="<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php if ( esc_attr( get_theme_mod( 'breadcrumbs' ) ) == 1) { echo giornalismo_breadcrumbs(); } ?>
			<h1 class="title"><?php the_title(); ?></h1>
			<?php the_content(); ?>
			<?php endwhile; ?>
		</article>
		<section id="content-area">

			<?php
			if(!is_page(array('Contact Us','Live','Archive','About','Contribute'))){?>
				
			<?php 
				$catId = get_cat_ID($pagename);

				if($catId != 0){

				$story_args = array(
					'post_type' => 'post',
					'orderby' => 'date',
					'order' => 'DESC',
					'cat' => $catId,
				);
				
				query_posts($story_args);
				
				if ( have_posts() ) : while (have_posts() ) : the_post(); //$do_not_duplicate[] = $post->ID; Eliminates duplicates from showing in multiple categories.
			?>
		<section class="top-story story-page">
			<article id="post-<?php the_ID(); ?>" <?php post_class( 'top-story-article' ); ?>>
				<?php if ( get_post_meta( $post->ID, 'giornalismo_featured_video', true ) ) { ?>
					<div class="featured-video">
						<?php echo wp_oembed_get( get_post_meta( $post->ID, 'giornalismo_featured_video', true ) ); ?>
					</div>
				<?php } elseif ( has_post_thumbnail() ) { ?>
					<div class="featured-photo">
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'giornalismo-single' ); ?></a>
					</div>
				<?php } else { } ?>

				<header class="top-story-header">
					<h3 class="headline"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
<!--					<h5 class="byline"><?php //if ( esc_attr( get_theme_mod( 'giornalismo-author-byline' ) ) == 1 ) { echo giornalismo_author_byline(); } ?><?php //the_date( get_option( 'date_format' ) );?><?php //if ( esc_attr( get_theme_mod( 'giornalismo-post-comments' ) ) == 1 ) { echo ', '; comments_popup_link( __( '0 Comments', 'giornalismo' ), __( '1 Comment', 'giornalismo' ), __( '% Comments', 'giornalismo' ),'', __( 'Comments Off', 'giornalismo' ) ); } ?></h5>-->
				</header>
				<?php //the_excerpt(); ?>
			</article>
			</section>
			<?php endwhile; endif; wp_reset_postdata(); ?>
		
		<?php
			} // end of does pagename equal category name
			else{
				// do nothing
			}// end of else
			} // end of primary if

			?>
		<?php wp_link_pages(); ?>
	
</main>
<!--Begin Mobile Sidebar-->
<section class="mobile-sidebar">
</section>
<!--End Mobile Sidebar-->

<?php get_footer(); ?>