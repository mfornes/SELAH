<?php
/*  Template Name: Page Faculty 
    Template Post Type: page
*/
?>
<?php get_header('page');?>
<section class="content">
      <h1>Faculty Information</h1>
      <div class="content-page">
        <img src="<?php echo get_template_directory_uri() . '/assets/images/images/charles-deloye-660433-unsplash.jpg'; ?>" alt="" height="400" width="550">
        
        <?php while ( have_posts() ) : the_post();?>
            <p> <?php the_content()?></p>
      <?php  endwhile; ?>
       
</div>     
    </section>
<?php get_footer();?>