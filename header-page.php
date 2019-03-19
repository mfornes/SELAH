<!DOCTYPE HTML>
<html <?php language_attributes();?>>
	<head>
	<meta charset="<?php bloginfo('charset');?>"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
		
    <title><?php wp_title();?></title>
    <?php wp_head();?>

	</head>
	<body <?php body_class();?>>
		<div class="container">
  			<header>
				<nav class="menu">
				<?php 

					$custom_logo_id = get_theme_mod( 'custom_logo' );
					$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
					if ( has_custom_logo() ) {
						echo '<a href="'. esc_url( home_url( '/' ) ) .'" class="logo "><img class="" src="'. esc_url( $logo[0] ) .'" alt="Home"  width="165" height="50"/></a>';
					} else {
						echo '<a href="'. esc_url( home_url( '/' ) ) .'" class="logo"><h1>'. get_bloginfo( 'name' ) .'</h1></a>';
					}
				?> 			
					<?php 
						wp_nav_menu( 
							array( 'theme_location' => 'header-menu',
									'container_class' => 'text-links',
									'fallback_cb' => false,
						 	) 
						);
					
					?>
					
					<ul class="icons-list">
						<li><a href="" class="icon-link"><img src="<?php echo get_template_directory_uri() . '/assets/images/Recurso 40.png'; ?>" alt="Options"/></a></li>
						<li><a href="" class="icon-link"><img src="<?php echo get_template_directory_uri() . '/assets/images/Recurso 69.png'; ?>" alt="Search"/></a></li>
					</ul>
				</nav>
                <div class="header-content" style="  background: left 0% top 80% url(<?php the_post_thumbnail_url() ?>)">
                     <h1 class="faculty"><?php the_title();?></h1>
                </div>
  			</header>
			  <main>