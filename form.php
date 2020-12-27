<?php
/**
 *
 * Template Name: Anexinet Main Form
 *
 * @package      Page Template
 * @author       Luis Rosales <lrosales@anexinet.com>
 * @copyright    Copyright (c) 2016, Anexinet
 * @license      http://opensource.org/licenses/gpl-2.0.php GNU Public License
 *     
 */
    ?>
<?php // get_header(); ?>

<?php  
   $the_query = new WP_Query("page_id=1306" ); ?> 

   <?php 
    if ( $the_query->have_posts() ) : ?>  
<!-- pagination here -->   
<!-- the loop -->    
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
          <?php the_content(); ?>      
          <?php endwhile; ?>  
<!-- end of the loop -->   
<!-- pagination here -->  
        <?php wp_reset_postdata(); ?> 
        <?php else : ?>     
        <p> <?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php  endif; ?> 

<?php get_footer(); ?>