<?php get_header(); ?>
<div class="container-top">
	<div class="row">
		<div class="col-md-12 container-fluid">
			<img id="fundo_principal" class="img-responsive" src="<?php bloginfo('template_url')?>/assets/images/fundo_principal.png">
			<?php
			while ( have_posts() ) : the_post();
				?>
				<div class="col-md-1"></div>
				<div id="conteiner-post" class="col-md-10 col-md-offset-2 configdiv">
					<div class="col-md-4 description">
						<div class="row">
							<div id="titulo" class="col-md-2 ">
								<h1 class="titulo"><?php the_title(); ?></h1>
							</div>
						</div>
						<div class="row">
							<div class=" col-md-2  text-left paragrafo">
								<p><?php the_excerpt();?></p>
							</div>
						</div>
					</div>
					<div class="col-md-6 thumbnail-category">
						<?php the_post_thumbnail(false, array('class'=>'img-responsive'));?>
					</div>
				</div>
				<div class="col-md-1"></div>
				<?php endwhile;	?>
		</div>
	</div>
</div>
<?php get_footer(); ?>