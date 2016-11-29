<?php get_header(); ?>
<div class="conteiner-top">
	<?php
		$categoria = get_the_category();
		$nomeCategoria = $categoria[0]->cat_name;
		
		switch ($nomeCategoria) {
			case 'MOCHILAGEM':?>
				<div class="col-md-12 col-lg-12" style="padding-left:0px;padding-right:0px;">
					<img class="img-r" src="<?php bloginfo('template_url')?>/assets/images/thumbnail_mochilagem.png">
					<div class="caption carousel-caption text-center categorys-text">
						<h2>MOCHILAGEM</h2>
						<p>
							Todas as dicas para quem quer ser mochileiro.
						</p>
					</div>
				</div>
		<?php break;?>
			
		<?php	case 'MINHAS VIAGENS': ?>
				<div class="col-md-12 col-lg-12" style="padding-left:0px;padding-right:0px;">
					<img class="img-r" src="<?php bloginfo('template_url')?>/assets/images/thumbnail_nossas-virgens-01.png">
					<div class="caption carousel-caption text-center categorys-text">
						<h2>MINHAS VIAGENS</h2>
						<p>
							Diário de bordo com histórias que vão te inspirar.
						</p>
					</div>
				</div>
		<?php		break ;?>
		<?php	case 'VIAJANTES':?>
				<div class="col-md-12 col-lg-12" style="padding-left:0px;padding-right:0px;">
					<img class="img-r" src="<?php bloginfo('template_url')?>/assets/images/thumbnail_foto-viajantes-01.png">
					<div class="caption carousel-caption text-center categorys-text">
						<h2>VIAJANTES</h2>
						<p>
							Histórias de pessoas que dedicam suas vidas para viajar pelo mundo.
						</p>
					</div>
				</div>
		<?php		break;

		}
	?>
</div>
<div class="blog">
	<div class="container">
		<div class="row">
			<?php 
				$index = 1;
				$cont = 1;
				wp_list_categories ();
				while ( have_posts() ) : the_post();
		 	?>
		 		<div class="col-md-12 col-lg-12">
				 			
							<div class="posts">
		 				<?php
		 				$categories = get_the_category();
		 				$seguencia_post = '';
		 				$cor = '';
		 				switch ($categories[0]->name) {
							case 'MOCHILAGEM':
								$seguencia_post = 'first-post';
								$cor = 'color-top-first';
								break;
							
							case 'MINHAS VIAGENS':
								$seguencia_post = 'second-post';
								$cor = 'color-top-second';
								break;
							case 'VIAJANTES':
								$seguencia_post = 'third-post';
								$cor = 'color-top-third';
								break;
							case 'O BARBEIRO':
								$seguencia_post = 'fourth-post';
								$cor = 'color-top-fourth';
								break;
						}

		 				?>
						<div class="col-md-6 col-lg-6 clear-padding <?php if($cont % 2){
							echo 'right-post ';} else { echo 'left-posts ';} echo $seguencia_post; ?>">
							<div class='<?php echo $cor; ?>'>	
							</div>
							<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
							<div class="paragrafo">
								<p><?php the_excerpt();?></p>
							</div>
							<h2><?php the_category();?></h2>
						</div>
					</div>
							
						<div class="col-md-6 col-lg-6 clear-padding">
							<?php the_post_thumbnail(false, array('class'=>'img-responsive'));?>
						</div>
					</div>
			<?php
				$cont++;
				$index++;
	    		endwhile;
	     	?>

	     	<div class="col-md-12 col-lg-12 text-center paginator"><!-- paginator	 -->
	     			<?php wp_pagenavi(); ?>
			</div>
		</div>
	</div>
</div>
<div class="mais-populares">
	<div class="container">
		<div class="row ">
			<div class="col-md-12 col-lg-12 title-populares">
				<h2>MAIS POULARES</h2>
			</div>
			<?php 
				$nova_consulta = new WP_Query( 
    				array(
    				    'posts_per_page'      => 6,                 // Máximo de 6 artigos
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
		 	
	 			<div class="col-md-4 col-lg-4">
	 					<a href="<?php the_permalink(); ?>" class="thumbnail text-center">
	 						
      						<img class="img-responsive" src="<?php the_post_thumbnail_url();?>" alt="...">
      						<div class="caption">
      							<h2 style='display:inline;'><?php the_title(); ?></h2>
      						</div>					
          				</a>
				</div>

			<?php
				$cont_populares++;
	    		endwhile;
	    		endif;
	    		wp_reset_postdata();
	     	?>
		</div>
	</div>
</div>
<?php get_footer(); ?>