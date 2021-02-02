<?php
get_header();      
$dados_empresa = pods('dados_da_empresa', array('limit'=>0));
?>

<section class="topo-page">
    <div class="topo-bg" style="background: url('<?=get_template_directory_uri()?>/img/bg-produtos-page.jpg')
    no-repeat top center; background-size: cover;">
        <div class="topo-table">
            <div class="topo-content">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-5">
                            <a href="<?=home_url('/')?>">Página inicial</a> > Produtos
                            <br><br>
                            <h2>As melhores soluções em suprimentos para sua empresa</h2>
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
        <image xlink:href="<?=get_template_directory_uri()?>/img/bg-produtos-conteudo.jpg" width="100%"
        x="0" y="0" clip-path="url(#theClippingPath)"></image>
    </svg>
</section>

<section id="page-produtos" class="page-content" style="background: url('<?=get_template_directory_uri()?>/img/bg-produtos-conteudo-2.jpg')
no-repeat top; background-size: 100%;">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2>CONFIRA ABAIXO NOSSAS CATEGORIAS DE PRODUTOS</h2>
            </div>
            <?php
            $categ_produtos = pods('categoria_produtos', array('limit' => 0));
            while ($categ_produtos->fetch()) {
                $imagem = $categ_produtos->field('imagem');
            ?>
            <div class="col-sm-4 mb-4 text-center">
                <div class="produto">
                    <a href="<?=get_category_link($categ_produtos->display('ID'))?>">
                        <div class="img-produto">
                            <img class="img-fluid" src="<?=$imagem['guid']?>" alt="<?=$categ_produtos->display('post_title')?>">
                        </div>
                        <h3><?=$categ_produtos->display('name')?></h3>
                    </a>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>

<section style="position: relative; top: -56px">
<?php include('form-orcamento.php'); ?>
</section>

<?php get_footer(); ?>