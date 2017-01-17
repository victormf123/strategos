
	<?php wp_footer(); ?>
		<footer class="footer" id="footer">
			<div class="col-md-offset-1 space-top">
				<div class="row">
					<div class="col-md-4  space-top-bottom">
						<h2 id="contato-h2"><a id="lista-de-baixo-contato" >Mande</a> sua mensagem</h2>
						
						<form action="<?php bloginfo('template_url')?>/assets/enviar.php" name="Mande sua mensagem" method="post">	

							<div class="form-group">
								<input type="text" name="nome" class="form-control" id="exampleInputEmail1" placeholder="Nome">
							</div>
							<div class="form-group">
								<input type="email" name="email"class="form-control" id="exampleInputEmail1" placeholder="Email">
							</div>
							<div class="form-group">
								<input type="text" name="telefone" class="form-control" id="exampleInputPassword1" placeholder="Telefone">
							</div>
							<div class="form-group">
								<textarea name="mensagem" placeholder="Mensagem" class="form-control" id="exampleInputEmail1" rows="3"></textarea>
							</div>

								<button type="submit" class="btn btn-default btn-lg btn-block btn-enviar">ENVIAR</button>

									
						</form>

					</div>
					<div class="col-md-2 space-top-bottom-dados">
						<?php
						$cont_dados;
						$args = array('post_type'=>'dadosempresa', 'showposts'=>-1);
						$my_dados = get_posts( $args );
						if($my_dados) : foreach($my_dados as $post) : setup_postdata( $post );
							$cont_dados++;

							?>
							<div class="row">
								<div class="form-group">
									<label for="exampleInputPassword1"><p class="dados"><?php the_title(); ?></p></label>
								</div>
							</div>

							<?php
						endforeach;
						endif;
						?>
					</div>
					<div class="col-md-4 col-md-offset-1 space-top-bottom">
						<svg id="svgelem"  width="450" height="450" xmlns="http://www.w3.org/2000/svg">
							<rect id="redrect" width="450" height="450" fill="white" />
						</svg>
						<div class="row icons_redes">
							<div class="col-md-2 ">
								<a href="">
									<img id="" class="img-responsive" src="<?php bloginfo('template_url')?>/assets/images/ícone facebook.png">
								</a>
							</div>
							<div class="col-md-2">
								<a href="">
									<img id="" class="img-responsive" src="<?php bloginfo('template_url')?>/assets/images/ícone instagram.png">
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</body>
</html>