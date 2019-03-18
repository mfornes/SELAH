<?php get_header( 'post' )?>
<section class="content">
      <h1>Post Information</h1>
      <span>19 Marzo, 2019</span>
      
      <div class="content-page">

      <?php while ( have_posts() ) : the_post();?>
            <p> <?php the_content()?></p>
      <?php  endwhile; ?>
      </div>      
      
    </section> 
<?php get_footer();?>