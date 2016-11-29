<?php get_header(); ?>

<div class="slider conteiner-top">
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
	  <!-- Indicators -->
	  <ol class="carousel-indicators">
	  	<?php 
			$args = array('post_type'=>'slider', 'showposts'=>5);
			$my_slider = get_posts( $args );
			$count = 0 ; 
			if($my_slider) : foreach($my_slider as $post) : setup_postdata( $post );
		 ?>
	    	<li data-target="#carousel-example-generic" data-slide-to="<?php echo $count; ?>" <?php if($count == 0): ?> class="active"<?php endif; ?>></li>
		<?php
			$count ++ ;
	    	endforeach;
	    	endif;
	     ?>
	  </ol>

	  <!-- Wrapper for slides -->
	  <div class="carousel-inner" role="listbox">
		<?php 
			$cont = 0 ; 
			if($my_slider) : foreach($my_slider as $post) : setup_postdata( $post );
		 ?>
		    <div class="item text-center <?php if($cont == 0) echo "active"; ?>">
		      <?php the_post_thumbnail('full'); ?>
		      <div class="caption carousel-caption">
				<h2><?php the_title(); ?></h2>
				<p><?php the_excerpt();?></p>
		      </div>
		    </div>
	    <?php
	    	$cont ++ ;
	    	endforeach;
	    	endif;
	     ?>

	  </div>

	  <!-- Controls -->
	  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
	    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
	    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>
</div>

<div class="blog">
	<div class="container">
		<div class="row">
			<?php 
				$index = 1;
				$cont = 1;
				/*$args = array('post_type'=>'post', 'showposts'=>-1);
				$my_post = get_posts( $args );
				if($my_post) : foreach($my_post as $post) : setup_postdata( $post ); */
				if(have_posts()) : while(have_posts()): the_post();
		 	?>
		 		<div class="col-md-12 col-lg-12">

		 		<!-- Novo Código  -->

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
							<a href="<?php the_permalink(); ?>"> 
								<?php the_post_thumbnail(false, array('class'=>'img-responsive'));?>
							</a>
						</div>
					</div>
			<?php
				$cont++;
				$index++;
	    		endwhile;
	    		endif;
	     	?>
	     	<div class="col-md-12 col-lg-12 text-center paginator"><!-- paginator	 -->
	     			<?php wp_pagenavi(); ?>
			</div>
		</div>
	</div>
</div> 

<!--<div class="servicos">
	<div class="container">
		<div class="row">
			<?php 
				$args = array('post_type'=>'servicos', 'showposts'=>3);
				$my_servicos = get_posts( $args );
				if($my_servicos) : foreach($my_servicos as $post) : setup_postdata( $post );
		 	?>
			<div class="col-md-4 col-lg-4">
				<i class="<?php  the_field('icones');?>"></i>
				<h2><?php the_title();?></h2>
				<p><?php the_excerpt();?></p>
			</div>
			<?php
	    		endforeach;
	    		endif;
	     	?>
		</div>
	</div>
</div>-->

<div class="mais-populares">
	<div class="container">
		<div class="row ">
			<div class="col-md-12 col-lg-12 text-center title-populares">
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
      							<h2  style='display:inline;'><?php the_title(); ?></h2>
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
<div class="sobre">
	<div class="container">
		<div class="row">
			<?php 
				$args = array('post_type'=>'page', 'pagename'=>'sobre');
				$my_sobre = get_posts( $args );
				if($my_sobre) : foreach($my_sobre as $post) : setup_postdata( $post );
		 	?>
			<div class="col-md-12 col-lg-12">
				<?php 
				the_title();
				the_excerpt();?>
			</div>
			<?php
	    		endforeach;
	    		endif;
	     	?>
		</div>
	</div>
</div>


<?php get_footer(); ?>