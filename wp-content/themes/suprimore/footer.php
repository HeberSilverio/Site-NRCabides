        <?php
        $dados_empresa = pods('dados_da_empresa', array('limit'=>0));
        $wp1 = str_replace('(', '', $dados_empresa->display('whatsapp_1'));
        $wp1 = str_replace(')', '', $wp1);
        $wp1 = str_replace(' ', '', $wp1);
        $wp1 = str_replace('-', '', $wp1);
        $wp1 = str_replace('+', '', $wp1);
        $wp2 = str_replace('(', '', $dados_empresa->display('whatsapp_2'));
        $wp2 = str_replace(')', '', $wp2);
        $wp2 = str_replace(' ', '', $wp2);
        $wp2 = str_replace('-', '', $wp2);
        $wp2 = str_replace('+', '', $wp2);
        ?>

        <footer>
            <div class="container links">
                <div class="row justify-content-center">
                    <div class="col-sm-4">
                        <div class="w-100 text-center">
                            <a href="<?=home_url('/');?>">
                                <img class="img-fluid" src="<?=get_template_directory_uri()?>/img/logo-nrc.jpg" alt="Suprimore">
                            </a>
                        </div>
                        <br>
                        <?=$dados_empresa->display('desc_curta')?>
                        <div class="links-contato">
                            <i class="fab fa-whatsapp"></i>&nbsp;&nbsp;
                            <a href="https://api.whatsapp.com/send?phone=<?=$wp1?>"><?=$dados_empresa->display('whatsapp_1')?></a> /
                            <a href="https://api.whatsapp.com/send?phone=<?=$wp2?>"><?=$dados_empresa->display('whatsapp_2')?></a>
                            <br>
                            <i class="far fa-envelope"></i>&nbsp;&nbsp;
                            <a href="mailto:<?=$dados_empresa->display('email')?>"><?=$dados_empresa->display('email')?></a>
                            <br>
                            <i class="fab fa-instagram"></i>&nbsp;&nbsp;
                            <a href="https://instagram.com/<?=$dados_empresa->display('instagram')?>"><?=$dados_empresa->display('instagram')?></a>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <h2>Links úteis</h2>
                        <ul>
                        <?php
                        $itens_menu = wp_get_nav_menu_items('Menu Esquerda');
                        foreach($itens_menu as $menu_item) { ?>
                            <li><a href="<?=$menu_item->url?>"><?=$menu_item->title?></a></li>
                        <?php } ?>

                        <?php
                        $itens_menu = wp_get_nav_menu_items('Menu Direita');
                        foreach($itens_menu as $menu_item) { ?>
                            <li><a href="<?=$menu_item->url?>"><?=$menu_item->title?></a></li>
                        <?php } ?>

                        <?php
                        $itens_menu = wp_get_nav_menu_items('Links Extra Rodapé');
                        foreach($itens_menu as $menu_item) { ?>
                            <li><a href="<?=$menu_item->url?>"><?=$menu_item->title?></a></li>
                        <?php } ?>
                        </ul>
                    </div>
                    <div class="col-sm-4">
                        <h2>Onde estamos?</h2>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3670.326552261412!2d-47.21890248503108!3d-23.085138884921463!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c8b359b557a4c1%3A0x3d02d0f8b8fb7e16!2sRua%20Onze%20de%20Junho%2C%20677%20-%20Centro%2C%20Indaiatuba%20-%20SP%2C%2013330-050!5e0!3m2!1spt-BR!2sbr!4v1596037571982!5m2!1spt-BR!2sbr"
                        width="100%" height="220" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
            </div>
            <section class="copy">
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center">
                            <p>Suprimore Suprimentos - Todos os Direitos Reservados &copy; <?=date('Y')?></p>
                        </div>
                    </div>
                </div>
            </section>
        </footer>
        
        <!-- <a target="_blank" class="whatsapp_plug_icon" href="https://api.whatsapp.com/send?phone=<?=$link_whatsapp?>"></a> -->

        <?php wp_footer(); ?>

        <script>
            jQuery(document).ready(function() {
                jQuery('#carousel-banners').carousel({
                    interval: 4000,
                    touch: true
                });
                
                jQuery('.slick-produtos-home').slick({
                    slidesToShow: 4,
                    slidesToScroll: 1,
                    arrows: true,
                    prevArrow: '<button class="slick-prev type="button"><i class="fas fa-angle-left"></i></button>',
                    nextArrow: '<button class="slick-next type="button"><i class="fas fa-angle-right"></i></button>',
                    responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 4,
                            slidesToScroll: 1
                        }
                    }, {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1
                        }
                    }, {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1
                        }
                    }, {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            autoplay: true,
                            autoplaySpeed: 2500,
                        }
                    }]
                });

                jQuery('.slick-clientes-home').slick({
                    slidesToShow: 5,
                    slidesToScroll: 1,
                    arrows: true,
                    prevArrow: '<button class="slick-prev type="button"><i class="fas fa-angle-left"></i></button>',
                    nextArrow: '<button class="slick-next type="button"><i class="fas fa-angle-right"></i></button>',
                    responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 5,
                            slidesToScroll: 1
                        }
                    }, {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1
                        }
                    }, {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1
                        }
                    }, {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            autoplay: true,
                            autoplaySpeed: 2500,
                        }
                    }]
                });
            });
        </script>

    </body>
</html>