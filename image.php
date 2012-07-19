<?php
/**
 * The default template file.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 */

//LOADING header.php + actions
get_header(); 
?>
<div id="middleWrapper">
    <div id="middleContainer" class="container_16">
        <div id="middleSidebar" class="grid_5">
			<?php get_sidebar('middle'); ?>
        </div>
        <div id="contentColWide" class="grid_11 <?php echo get_post_format(); ?>">
				<?php get_template_part( 'part.media', 'image' ); ?>
        <?php if(posts_nav_link()){} else wp_link_pages(); ?>
        </div><!-- ./contentColWide -->
        <div class="clear"></div>
    </div><!-- #middleContainer -->
</div><!-- #middleWrapper -->
<?php get_footer(); ?>