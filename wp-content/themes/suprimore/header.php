<!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

		<link rel="profile" href="https://gmpg.org/xfn/11">
        <link rel="shortcut icon" href="<?=get_template_directory_uri()?>/img/favicon.ico" />

		<?php wp_head(); ?>

	</head>

    <body <?php body_class(); ?>>       
        <div class="section">
            <ul>
                <li><i class="fa fa-phone" aria-hidden="true"></i><a href="">(19) 9 999-9999</a></li>
                <li><i class="fab fa-whatsapp"></i><a href="">(19) 9 999-9999</a></li>
                <li><i class="far fa-envelope"></i><a href="">cabides@cabides.cabides</a></li>
            </ul>
           
           
            
        </div>
        <section id="menu-principal">
            <div class="container">
                <div class="row">
                    <nav class="col-12 navbar navbar-expand-lg navbar-light bg-light">
                        <a class="navbar-brand d-block d-sm-none" href="<?=home_url('/');?>">
                            <img src="<?=get_template_directory_uri()?>/img/logo.jpg" class="img-fluid align-top" alt="Suprimore">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse row" id="navbarSupportedContent">
                            <ul class="navbar-nav mx-auto">
                                <li class="nav-item my-auto d-none d-sm-inline-block">
                                    <a class="nav-link" href="<?=home_url('/');?>">
                                            <img src="<?=get_template_directory_uri()?>/img/logo-nrc.jpg" class="img-fluid align-top" alt="Suprimore">
                                        </a>
                                        
                                </li>

                                <?php
                                    $itens_menu = wp_get_nav_menu_items('Menu Esquerda');
                                    $t = count($itens_menu);
                                    $i = 1;
                                    foreach($itens_menu as $menu_item) {
                                        $active = ($menu_item->object_id == get_queried_object_id()) ? 'active' : '';
                                        $active = (is_home() && $menu_item->title=='Home') ? 'active' : $active;
                                    ?>
                                   
                                    <li class="nav-item my-auto <?=$active?>">
                                        <a class="nav-link" href="<?=$menu_item->url?>"><?=$menu_item->title?>
                                        <?=($active=='active')?'<span class="sr-only">(current)</span>':''?>
                                        </a>
                                    </li>
                                <?php
                                    if($i<$t) {
                                        echo '<li class="nav-item my-auto divisor-menu d-none d-sm-inline-block">|</li>';
                                    }
                                    $i++;
                                }
                                ?>

                                

                                <?php
                                $itens_menu = wp_get_nav_menu_items('Menu Direita');
                                $t = count($itens_menu);
                                $i = 1;
                                foreach($itens_menu as $menu_item) {
                                    $active = ( $menu_item->object_id == get_queried_object_id()) ? 'active' : '';
                                    ?>
                                    <li class="nav-item my-auto <?=$active?>">
                                        <a class="nav-link" href="<?=$menu_item->url?>"><?=$menu_item->title?>
                                        <?=($active=='active')?'<span class="sr-only">(current)</span>':''?>
                                        </a>
                                    </li>
                                <?php
                                    if($i<$t) {
                                        echo '<li class="nav-item my-auto divisor-menu d-none d-sm-inline-block">/</li>';
                                    }
                                    $i++;
                                }
                                ?>
                            </ul>
                        </div>
                        <div class="social">
                            <a href=""><i class="fab fa-instagram"></i></a>
                            <a href=""><i class="fab fa-linkedin"></i></a>
                        </div>
                    </nav>
                </div>
            </div>
        </section>