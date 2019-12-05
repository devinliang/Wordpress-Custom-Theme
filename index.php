<?php get_header(); ?>

<h1>Hello New</h1>
<ul>
<?php
if ( have_posts() ) {
	while ( have_posts() ) {
        the_post();

		//
        // Post Content here
        //

?>
        <li>
        <a href="<?php echo get_post_permalink();?>">
        <?php the_title(); ?>
        </a>
        </li>

<?php

	} // end while
} // end if
?>

</ul>

<?php get_footer(); ?>