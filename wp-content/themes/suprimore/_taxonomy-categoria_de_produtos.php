<?php
get_header();
?>

<section id="tit-page">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1><?=single_term_title()?></h1>
            </div>
        </div>
    </div>
</section>

<?php
$id = get_queried_object_id();
?>

<section id="p-servicos">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-7 mb-4 text-center">
                <?php
                $imgs = get_term_meta($id, 'imagens', true);
                
                if(count($imgs['guid'])>0 && count($imgs['guid'])==1) { ?>

                <img class="img-fluid" src="<?=$imgs['guid']?>" alt="<?=single_term_title()?>">
                    
                <?php } else if(count($imgs['guid'])>1) { ?>

                <div id="imgs-prod-<?=$id?>" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">

                    <?php $f = 0; foreach($imgs as $img) { ?>
                        <div class="carousel-item <?=($f==0)?'active':''?>">
                            <img src="<?=$img['guid']?>" class="img-fluid" alt="<?=single_term_title()?>">
                        </div>
                    <?php $f++; } ?>
                    
                    </div>
                    <a class="carousel-control-prev" href="#imgs-prod-<?=$id?>" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#imgs-prod-<?=$id?>" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <?php } ?>
            </div>
            <div class="col-12 mb-4 text-center">
                <?=term_description($id)?>
            </div>
        </div>
        
        <?php
        $slug = get_queried_object()->slug;
        $produtos = pods('produto', array('limit' => 0, 'where'=>"categoria_de_produtos.slug = '".$slug."'"));
        $i = 1;
        while ($produtos->fetch()) {
            if($i % 2 == 0){
                $order_desc = 'order-sm-1';
                $order_img = 'order-sm-2';
            } else {
                $order_img = 'order-sm-1';
                $order_desc = 'order-sm-2';
            }
        ?>
        <div class="row servico-desc">
            <div class="col-sm-6 text-center order-1 <?=$order_img?>">
                <?php
                $tem_video = ($produtos->display('codigo_video')!=null && $produtos->display('codigo_video')!='') ? true : false;
                $imgs = $produtos->field('imagens');

                if($tem_video) { ?>
                
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?=$produtos->display('codigo_video')?>?rel=0" allowfullscreen></iframe>
                </div>
                <br><br>

                <?php } else if(!$tem_video && count($imgs)>0 && count($imgs)==1) { ?>

                <img class="img-fluid" src="<?=$imgs[0]['guid']?>" alt="<?=$produtos->display('post_title')?>">
                <br><br>
                    
                <?php } else if(count($imgs)>1) { ?>

                <div id="imgs-prod-<?=$produtos->display('ID')?>" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">

                    <?php $f = 0; foreach($imgs as $img) { ?>
                        <div class="carousel-item <?=($f==0)?'active':''?>">
                            <img src="<?=$img['guid']?>" class="img-fluid" alt="<?=$produtos->display('post_title')?>">
                        </div>
                    <?php $f++; } ?>
                    
                    </div>
                    <a class="carousel-control-prev" href="#imgs-prod-<?=$produtos->display('ID')?>" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#imgs-prod-<?=$produtos->display('ID')?>" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <br><br>
                <?php } ?>
            </div>
            <div class="col-sm-6 order-2 <?=$order_desc?>">
                <h2><?=$produtos->display('post_title')?></h2>
                <?=$produtos->display('desc_curta')?>
            </div>
        </div>
        <?php $i++; } ?>
    </div>
</section>

<?php get_footer(); ?>