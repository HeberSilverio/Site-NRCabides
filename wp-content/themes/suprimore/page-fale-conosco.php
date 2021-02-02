<?php
get_header();      
$dados_empresa = pods('dados_da_empresa', array('limit'=>0));
?>

<section class="topo-page">
    <div class="topo-bg" style="background: url('<?=get_template_directory_uri()?>/img/bg-contato-page.jpg')
    no-repeat center; background-size: cover;">
        <div class="topo-table">
            <div class="topo-content">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-5">
                            <a href="<?=home_url('/')?>">Página inicial</a> > Contato
                            <br><br>
                            <h2>Entre em contato e solicite informações. Estaremos prontos para lhe atender.</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="seta"><i class="fas fa-angle-down"></i></div>
</section>

<section class="pos-topo">
    <svg version="1.1" id="Camada_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	viewBox="0 0 1140 141" style="enable-background:new 0 0 1140 141;" xml:space="preserve">
        <defs>   
            <clipPath id="theClippingPath" > 
                <path class="st0" d="M1139.5,14.5v112H0.5V16.4h346.72c34.19,1.54,86.63,7.89,131.34,30.24c0,0,57.84,35.45,91.44,34.67
                c33.6,0.78,91.44-34.67,91.44-34.67c44.71-22.35,97.15-28.7,131.34-30.24H1140v-1.9H1139.5z"/>
            </clipPath> 
        </defs>
        <image xlink:href="<?=get_template_directory_uri()?>/img/bg-contato-conteudo.jpg" width="100%"
        x="0" y="0" clip-path="url(#theClippingPath)"></image>
    </svg>
</section>

<section class="page-content" style="background: url('<?=get_template_directory_uri()?>/img/bg-contato-conteudo-2.jpg')
no-repeat top; background-size: 100%;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-10 text-center">
                <h2>PREENCHA O FORMULÁRIO ABAIXO. RESPONDEREMOS SUA MENSAGEM O MAIS RÁPIDO POSSÍVEL!</h2><br>
            </div>
            <div class="col-sm-7">
                <?php
                $form_orcamento = get_page_by_title('Formulário Orçamento', OBJECT, 'page');
                
                $content = $form_orcamento->post_content;
                $content = apply_filters('the_content', $content);
                $content = str_replace(']]>', ']]&gt;', $content);
                echo $content;
                ?>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 text-center d-none d-sm-block">
                <img class="img-fluid" src="<?=get_template_directory_uri()?>/img/img-contato.jpg" alt="Contato Suprimore">
            </div>
            <div class="col-sm-6 links-contato">
                <i class="fab fa-whatsapp"></i>&nbsp;&nbsp;
                <a href="https://api.whatsapp.com/send?phone=<?=$wp1?>"><?=$dados_empresa->display('whatsapp_1')?></a>
                <!-- <a href="https://api.whatsapp.com/send?phone=<?=$wp2?>"><?=$dados_empresa->display('whatsapp_2')?></a> -->
                <br>
                <i class="far fa-envelope"></i>&nbsp;&nbsp;
                <a href="mailto:<?=$dados_empresa->display('email')?>"><?=$dados_empresa->display('email')?></a>
                <br>
                <i class="fab fa-instagram"></i>&nbsp;&nbsp;
                <a href="https://instagram.com/<?=$dados_empresa->display('instagram')?>"><?=$dados_empresa->display('instagram')?></a>
                <br>
                <i class="fas fa-map-marker-alt"></i>&nbsp;&nbsp;
                <?=$dados_empresa->display('endereco')?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>