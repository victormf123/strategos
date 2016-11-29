<?php get_header(); ?>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<div class="single_page conteiner-top">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-lg-12 ">
				<div class="col-md-8 col-lg-8" style="border: 0px solid #00e0d0; background-color: white;">
					<h1><?php the_title(); ?></h1>
					<h3 style="font-size:18px;"><?php echo get_the_date( 'j \d\e F \d\e Y' ); ?></h3>
					<div class="single_thumbnail">
						<?php the_post_thumbnail(false, array('class'=>'img-responsive'));?>
					</div>
					<div class="paragrafo_single">
						<p><?php the_content();?></p>
					</div>
					<div class="col-md-8 col-lg-8 coments-form"><?php comments_template(); ?></div>

				</div>
				<div class="col-md-4 col-lg-4 text-center">
					<h2 class="mais">Mais</h2>

				<?php 
				$nova_consulta = new WP_Query( 
    				array(
    				    'posts_per_page'      => 4,                 // Máximo de 6 artigos
    				    'no_found_rows'       => true,              // Não conta linhas
    				    'post_status'         => 'publish',         // Somente posts publicados
    				    'ignore_sticky_posts' => true,              // Ignora posts fixos
    				    'orderby'             => 'meta_value_num',  // Ordena pelo valor da post meta
    				    'meta_key'            => 'tp_post_counter', // A nossa post meta
    				    'order'               => 'DESC'             // Ordem decrescente
    				)
				);
				if ( $nova_consulta->have_posts() ): 
        		while ( $nova_consulta->have_posts() ): 
        
            	$nova_consulta->the_post(); 
            	$tp_post_counter = get_post_meta( $post->ID, 'tp_post_counter', true );
		 			?>
					<div class="mais row">		 	
	 					<div class="container-fluid">
	 							<a href="<?php the_permalink(); ?>" class="thumbnail text-center">
	 								
      								<img class="img-responsive" src="<?php the_post_thumbnail_url();?>" alt="...">
      								<div class="caption">
      									<h2  style='display:inline;'><?php the_title(); ?></h2>
      								</div>					
          						</a>
						</div>
					</div>
					<?php
					$cont_populares++;
	    			endwhile;
	    			endif;
	    			wp_reset_postdata()
	     			?>
				</div> 
			</div>
		</div>
	</div>
</div>
<?php endwhile; ?>
<?php endif; ?>



<?php get_footer(); ?>