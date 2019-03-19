<?php get_header( 'post' )?>
<section class="content">
      <h1><?php the_title();?></h1>
      <span>19 Marzo, 2019</span>
      
      <div class="content-page">

      <?php while ( have_posts() ) : the_post();?>
            <p> <?php the_content()?></p>
      <?php  endwhile; ?>
        <div style="clear: both"></div>
      </div>      
      
    </section> 
<?php get_footer();?>