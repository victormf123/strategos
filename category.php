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
    $categoria = get_the_category();
    $nomeCategoria = $categoria[0]->cat_name;

    switch ($nomeCategoria) {
        case 'serviços':?>
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
                    <div class="col-md-12 clientes">
                        <h2 class="text-center">Alguns de nossos </h2>
                        <h2 class="text-center"><a id="lista-de-baixo-clientes">clientes</a></h2>
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
            <?php break;?>

        <?php	case 'sobre': ?>
            <div class="row">
                <div class="col-md-offset-3 space-top">
                <?php
                $cont_sobreempresa = 0;
                $args = array('post_type'=>'sobreempresa', 'showposts'=>-1);
                $my_sobreempresa = get_posts( $args );
                if($my_sobreempresa) : foreach($my_sobreempresa as $post) : setup_postdata( $post );
                    $cont_sobreempresa++;
                    if($cont_sobreempresa != 4):
                    ?>
                    <div class="col-md-4 sobre">
                            <a id="a<?php echo $cont_sobreempresa?>"><?php the_title();?></a>
                    </div>
                    <?php
                    endif;
                endforeach;
                endif;
                ?>
                    <?php
                    $cont_sobreempresa = 0;
                    $args = array('post_type'=>'sobreempresa', 'showposts'=>-1);
                    $my_sobreempresa = get_posts( $args );
                    if($my_sobreempresa) : foreach($my_sobreempresa as $post) : setup_postdata( $post );
                        $cont_sobreempresa++;
                        if($cont_sobreempresa != 4):
                        ?>
                        <div id="row<?php echo $cont_sobreempresa?>" class="row" >
                            <div class="col-md-8 description-sobre">
                                <p><?php the_excerpt();?></p>
                            </div>
                        </div>

                        <?php
                        endif;
                    endforeach;
                    endif;
                    ?>
                    <?php
                    $cont_sobreempresa = 0;
                    $args = array('post_type'=>'sobreempresa', 'showposts'=>-1);
                    $my_sobreempresa = get_posts( $args );
                    if($my_sobreempresa) : foreach($my_sobreempresa as $post) : setup_postdata( $post );
                        $cont_sobreempresa++;
                        if($cont_sobreempresa == 4):
                            ?>
                            <div class="col-md-4 mej">
                                <h2><?php the_title();?></h2>
                            </div>

                            <div class="row" >
                                <div class="col-md-8 description-sobre space-bottom">
                                    <p><?php the_content();?></p>
                                </div>
                            </div>

                            <div class="row" >
                                <div class="col-md-4 col-md-offset-2 space-bottom-mej">
                                    <div><?php the_post_thumbnail(false, array('class'=>'img-responsive'));?></div>
                                </div>
                            </div>

                            <?php
                        endif;
                    endforeach;
                    endif;
                    ?>
                </div>
            </div>
        <?php		break ;?>
    <?php	case 'home':?>
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
        <?php		break;

    }
?>



<?php get_footer(); ?>