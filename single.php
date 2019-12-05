<?php get_header(); ?>

<?php 
if ( have_posts() ) {
	while ( have_posts() ) {
        the_post(); 
        
		//
        // Post Content here
        //
        
?>
        <h2>標題:</h2>
        <a href="<?php echo get_post_permalink();?>">
        <?php the_title(); ?>
        </a>

<?php 
        echo "<h3>內容:</h3>";
        the_content();

	} // end while
} // end if
?>


<?php get_footer(); ?>