<?php get_header(); ?>
    <div class="container-top">
        <div class="row top">
            <div class="col-md-12 container-fluid top">
                <img id="fundo_principal" class="img-responsive" src="<?php bloginfo('template_url')?>/assets/images/fundo_principal.png">
                <?php
                $cont_top = 0;
                while ( have_posts() ) : the_post();
                    $cont_top ++;
                    if($cont_top == 1):
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
                        <?php
                    else:
                    endif;
                endwhile;	?>
            </div>
        </div>
    </div>

<?php

$args = array('post_type'=>'homeempresa', 'showposts'=>-1);
$my_homeempresa = get_posts( $args );
if($my_homeempresa) : foreach($my_homeempresa as $post) : setup_postdata( $post );
    ?>
    <div class="row big-space-top-bottom">
        <div class="col-md-4 col-md-offset-2 strategos">
            <div class="row">
                <h1 class=""><?php the_title(); ?></h1>
            </div>
            <div class="row">
                <p><?php the_content();?></p>
            </div>
        </div>
        <div class="col-md-4">
            <?php the_post_thumbnail(false, array('class'=>'img-responsive'));?>
        </div>
    </div>
    <?php
endforeach;
endif;?>


<?php get_footer(); ?>