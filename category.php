<?php get_header(); ?>
<div class="container-top">
	<div class="row top">
		<div class="col-md-12 container-fluid top">
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
				<?php endwhile;	?>
		</div>
	</div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="container">
                <div class="row">
                    <?php
                    $cont;
                    $args = array('post_type'=>'servicos', 'showposts'=>-1);
                    $my_servicos = get_posts( $args );
                    if($my_servicos) : foreach($my_servicos as $post) : setup_postdata( $post );
                        $cont++;
                        if ($cont < 2):
                            ?>
                            <div class="servicos">
                                <div class="col-md-1 ">
                                    <?php the_post_thumbnail(false, array('class'=>'img-responsive'));?>
                                </div>
                                <div class="col-md-3 servicos-post">
                                    <p><?php the_title();?></p>
                                </div>
                            </div>
                        <?php else:
                            $cont = 0;
                            ?>
                            <div class="row servicos">
                                <div class="col-md-1">
                                    <?php the_post_thumbnail(false, array('class'=>'img-responsive'));?>
                                </div>
                                <div class="col-md-3 servicos-post">
                                    <p><?php the_title();?></p>
                                </div>
                            </div>
                        <?php endif;?>

                        <?php
                    endforeach;
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid space-top">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center">Alguns de nossos </h2>
                <h2 class="text-center">clientes</h2>
                <div id="lista-de-baixo"></div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-1">
            <div class="container ">
                <div class="row">
                    <?php
                    $cont_clientes;
                    $args = array('post_type'=>'clientes', 'showposts'=>-1);
                    $my_clientes = get_posts( $args );
                    if($my_clientes) : foreach($my_clientes as $post) : setup_postdata( $post );
                        $cont_clientes++;

                            ?>
                                <div class="col-md-3 space-top block-quard-clientes">
                                    <!--<?php the_post_thumbnail(false, array('class'=>'img-responsive'));?>-->
                                    <svg id="svgelem" height="100" xmlns="http://www.w3.org/2000/svg">
                                        <rect id="redrect" width="150" height="150" fill="green" />
                                    </svg>
                                </div>

                        <?php
                    endforeach;
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>