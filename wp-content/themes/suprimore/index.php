<?php
get_header();      
$dados_empresa = pods('dados_da_empresa', array('limit'=>0));
?>

<section id="banners">
    <div id="carousel-banners" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
        <?php
        $banner = pods('banner', array('limit' => 0, 'sort_order' => 'ASC'));
        $i = 0;
        while ($banner->fetch()) {
            $imagem = $banner->display('imagem');
            $has_link = ($banner->display('link')!=null && $banner->display('link')!='') ? true : false;
        ?>
            <li data-target="#carousel-banners" data-slide-to="<?=$i?>" class="<?=($i==0)?'active':''?>"></li>
        <?php $i++; } ?>
        </ol>
        <div class="carousel-inner">
        <?php
        $banner = pods('banner', array('limit' => 0, 'sort_order' => 'ASC'));
        $i = 0;
        while ($banner->fetch()) {
            $imagem = $banner->display('imagem');
            $tem_botao = ($banner->display('texto_botao')!=null && $banner->display('texto_botao')!='') ? true : false;
        ?>
            <div class="carousel-item <?=($i==0)?'active':''?>">
                
                <div class="banner"
                style="background: url('<?=$imagem?>') no-repeat center;
                background-size: cover;">
                    <div class="banner-table">
                        <div class="banner-content">                    
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-6 my-auto">
                                        <h2><?=$banner->display('post_title')?></h2>
                                        <?=$banner->display('subtitulo')?>
                                        <?php if($tem_botao) { ?>
                                        <a class="btn btn-verde" href="<?=$banner->display('link')?>">
                                            <i class="fas fa-angle-right"></i>&nbsp;&nbsp;<?=$banner->display('texto_botao')?>
                                        </a> 
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php $i++; } ?>
        </div>
    </div>
    <div class="seta"><i class="fas fa-angle-down"></i></div>
</section>

<section id="produtos-home-topo">
    <svg version="1.1" id="Camada_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	viewBox="0 0 1140 141" style="enable-background:new 0 0 1140 141;" xml:space="preserve">
        <defs>   
            <clipPath id="theClippingPath" > 
                <path class="st0" d="M1139.5,14.5v112H0.5V16.4h346.72c34.19,1.54,86.63,7.89,131.34,30.24c0,0,57.84,35.45,91.44,34.67
                c33.6,0.78,91.44-34.67,91.44-34.67c44.71-22.35,97.15-28.7,131.34-30.24H1140v-1.9H1139.5z"/>
            </clipPath> 
        </defs>
        <image xlink:href="<?=get_template_directory_uri()?>/img/bg-produt-home.jpg" width="100%" 
        x="0" y="0" clip-path="url(#theClippingPath)"></image>
    </svg>
</section>

<section id="produtos-home">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2>QUAIS PRODUTOS VOCÊ ENCONTRA AQUI?</h2>

                <div class="slick-produtos-home">
                <?php
                $categ_produtos = pods('categoria_produtos', array('limit' => 0));
                while ($categ_produtos->fetch()) {
                    $imagem = $categ_produtos->field('imagem');
                ?>
                    <div class="produto">
                        <a href="<?=get_category_link($categ_produtos->display('ID'))?>">
                            <div class="img-produto">
                                <img class="img-fluid" src="<?=$imagem['guid']?>" alt="<?=$categ_produtos->display('post_title')?>">
                            </div>
                            <h3><?=$categ_produtos->display('name')?></h3>
                        </a>
                    </div>
                <?php } ?>
                </div>

                <a class="btn btn-verde" href="<?=home_url('/produtos')?>">
                <i class="fas fa-angle-right"></i>&nbsp;&nbsp;Conheça a linha completa</a>
            </div>
        </div>
    </div>
</section>

<section id="sobre-nos-home">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 mb-4">
                <h2>SOBRE NÓS</h2>
                <?=$dados_empresa->display('sobre_nos')?><br>
                <a class="btn btn-verde" href="<?=home_url('/sobre-nos')?>">
                <i class="fas fa-angle-right"></i>&nbsp;&nbsp;Leia mais sobre nós</a>
            </div>
            <div class="col-sm-6 mb-4 text-center">
                <img class="img-fluid" src="<?=get_template_directory_uri()?>/img/img-sobre-nos.png" alt="Suprimore">
            </div>
        </div>
    </div>
</section>

<?php include('form-orcamento.php'); ?>

<?php
$posts = get_posts(array('numberposts' => 3));

if(count($posts) > 0) { ?>

<section id="novidades-home">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2>NOVIDADES E TENDÊNCIAS</h2>
            </div>
            <?php
            foreach($posts as $post) {
            ?>
            <div class="col-sm-4 post">
                <a href="<?=get_permalink($post->id)?>">
                    <img src="<?=the_post_thumbnail_url()?>" alt="<?=$post->post_title?>">
                </a>
                <div class="post-cats">
                    Categoria: 
                <?php
                $categorias = get_the_category($post->id, 'categoria');
                $c = count($categorias);
                $j = 1;
                foreach($categorias as $categoria) { ?>
                    <a class="tit-cat-post" href="<?=get_category_link($categoria->term_id)?>"><?=$categoria->name?></a>
                    <?php
                    if($j < $c) { echo ' / '; };
                    $j++;
                }
                ?>
                </div>
                <a href="<?=get_permalink($post->id)?>"><h2><?=$post->post_title?></h2></a>
            </div>
            <?php } ?>
        </div>
    </div>
</section>

<?php } ?>

<?php
$clientes = pods('cliente', array('limit' => 0, 'orderby' => 't.id DESC'));

if($clientes->total() > 0) { ?>

<section id="clientes-home">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2>EMPRESAS QUE CONFIAM EM NOSSO TRABALHO</h2>

                <div class="slick-clientes-home">
                    <?php
                    while ($clientes->fetch()) {
                        $imagem = $clientes->display('imagem');
                    ?>
                    
                    <div class="img-cliente text-center">
                        <img class="img-fluid" src="<?=$imagem?>" alt="<?=$clientes->display('post_title')?>">
                    </div>
                    
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php } ?>

<?php get_footer(); ?>
