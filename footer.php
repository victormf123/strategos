
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
					<section class="map">
									<div class="mapWrapper">
										<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3839.8640600655776!2d-47.871766085343836!3d-15.758329026266567!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935a3bb883ff2933%3A0x7c1e4f52a81f06ae!2sInstituto+de+Ci%C3%AAncia+Pol%C3%ADtica+(IPOL)!5e0!3m2!1spt-BR!2sbr!4v1487087543596" width="450" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
									</div>	
								</section>
						
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