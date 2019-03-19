<?php
/*  Template Name: Page Faculty 
    Template Post Type: page
*/
?>
<?php get_header('page');?>
<section class="content">
      <h1><?php the_title();?></h1>
      <div class="content-page">

        <?php while ( have_posts() ) : the_post();?>
            <p> <?php the_content()?></p>
      <?php  endwhile; ?>
        
        <div style="clear: both"></div>
       
</div>     
    </section>
<?php get_footer();?>