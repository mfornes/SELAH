<?php get_header();?>

    <section class="first">
      <div class="text-group center-content-text">
        <h4>Preach, teach, and counsel with confidence and wisdom.</h4>
        <p>Our expert faculty will provide you with an exceptional theological education 
          so you can serve the church effectively in today's conflicted culture.</p>
      </div>
      <div class="group">         
        <video controls height="360px">
          <source src="<?php echo get_template_directory_uri() . '/assets/video/Blue-Bottle.mp4'; ?>" type="video/mp4">
          Sorry, your browser doesn't support embedded videos.
        </video>
        
        <div class="text-group side-content-text">
          <h4>Preach, teach, and counsel with confidence and wisdom.</h4>
          <p>Our expert faculty will provide you with an exceptional theological education 
            so you can serve the church effectively in today's conflicted culture.</p>
          <br>
          <button class="main-button option1">See More</button>
        </div>
      </div>
    </section>
    
    <section class="second">
      <div class="group">
        <div class="card-content text-group">
          <h4>Preach, teach, and counsel with confidence and wisdom.</h4>
          <p>Our expert faculty will provide you with an exceptional theological education 
            so you can serve the church effectively in today's conflicted culture.</p>
          <br><br>
          <div class="inline">
            <button class="red-card-btn">Read More</button>
          </div>
          
        </div>
        
      </div>
    </section>
    
    <section class="third">
      <h2 class="type1">news</h2>
      <h1 class="type1">Posts</h1>
      <div class="posts">
      <?php $args = array( 'category_name' => 'news', 'posts_per_page' => 3 );?>
      <?php $the_query = new WP_Query( $args );?>
      <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

        <div id="post-<?php the_ID(); ?>" <?php post_class("card-post"); ?>>
          <a href="<?php echo get_permalink();?>"><?php the_post_thumbnail('post-image'); ?></a>
          <a class="detail-icon" href="<?php echo get_permalink();?>"><img src="<?php echo get_template_directory_uri() . '/assets/images/detail.svg'; ?>" alt=""></a>
          <div class="text-bloq">
            <h4><?php the_title(); ?></h4>
            <p><?php the_excerpt(); ?></p>
          </div>
        </div>

      <?php endwhile; else: ?>
          <?php _e( 'Sorry, no posts matched your criteria.', 'textdomain' ); ?>
      <?php endif; ?>
      <?php wp_reset_postdata();?>  
      </div>
    </section>
    
    <section class="stadistics">
      <h1 class="type2">Stadistics</h1>
      <br>
      <br>
      <div class="trio">
        <div class="stadistic-item">
          <div class="stad_circle">
            <span>45%</span>
          </div>
          <p>Dr John Doe 
          <br>
          Our expert faculty</p>
        </div>
        
        <div class="stadistic-item">
          <div class="stad_circle">
            <span>+300</span>
          </div>
          <p>Dr John Doe 
          <br>
          Our expert faculty</p>
        </div>
        
        <div class="stadistic-item">
          <div class="stad_circle">
            <span>90%</span>
          </div>
          <p>Dr John Doe 
          <br>
          Our expert faculty</p>
        </div>
        
      </div>
      
      <div class="text-group">
        <h4>Preach, teach, and counsel with confidence and wisdom.</h4>
        <p>Our expert faculty will provide you with an exceptional theological education 
          so you can serve the church effectively in today's conflicted culture.</p>
      </div>
      <hr class="lid2">
    </section>
    
    <section class="leadership">
      <h1 class="type1">About</h1>
      <h2 class="type1">out leadership</h2>
   
      <div class="trio">
      <?php $args = array( 'category_name' => 'leadership', 'posts_per_page' => 4 );?>
      <?php $the_query = new WP_Query( $args );?>
      <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

        <div id="post-<?php the_ID(); ?>" <?php post_class("stadistic-item"); ?>>
          <?php the_post_thumbnail('post-image'); ?>
          <p> <strong><?php the_title(); ?></strong>
          <br>
          <?php the_excerpt(); ?></p>
        </div>
        
      <?php endwhile; else: ?>
          <?php _e( 'Sorry, no posts matched your criteria.', 'textdomain' ); ?>
      <?php endif; ?>
      <?php wp_reset_postdata();?>     

      </div>
      <hr class="lid1">
      <br>
      <br>
      
      <div class="text-group">
        <h4>Preach, teach, and counsel with confidence and wisdom.</h4>
        <p>Our expert faculty will provide you with an exceptional theological education 
          so you can serve the church effectively in today's conflicted culture.</p>
      </div>
      <br>
      <br>
      <hr class="lid2">
    </section>
    
    <section class="thinking">
      <h1 class="type2">WHERE NEED <br>
          MEETS OPPORTUNITY</h1>
      <hr class="lid1">
      <span>As a major city, is home to people from across the globe, 
but only a small miority identify as evangelical Christians.
 As you train for a lifetime of ministry at NOBTS, 
we encourage you to get your hands dirty in a city 
that is in desperate need of the gospel..</span>
      
    </section>
    
<?php get_footer();?>
