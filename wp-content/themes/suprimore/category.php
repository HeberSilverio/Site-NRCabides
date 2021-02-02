<?php
get_header();
$categories = get_the_category();
?>

<section class="topo-page">
    <div class="topo-bg" style="background: url('<?=get_template_directory_uri()?>/img/bg-blog-page.jpg')
    no-repeat top center; background-size: cover;">
        <div class="topo-table">
            <div class="topo-content">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <a href="<?=home_url('/')?>">Página inicial</a> > Blog
                            <br><br>
                            <h2>Novidades e tendências sobre o mundo de suprimentos corporativos</h2>
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
        <path class="st0" fill="#FFFFFF" d="M1139.5,14.5v112H0.5V16.4h346.72c34.19,1.54,86.63,7.89,131.34,30.24c0,0,57.84,35.45,91.44,34.67
        c33.6,0.78,91.44-34.67,91.44-34.67c44.71-22.35,97.15-28.7,131.34-30.24H1140v-1.9H1139.5z"/>
    </svg>
</section>

<section id="page-blog" class="page-content">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2>CONFIRA JÁ NOSSO BLOG</h2><br><br>
                <p>SELECIONE A CATEGORIA:</p>
                <a class="btn btn-branco" href="<?=home_url('/blog')?>/#page-blog">Todas</a>
                <?php
                $categorias = get_categories();
                
                foreach($categorias as $categoria) {
                    if($categoria->name!='Sem categoria') {
                ?>
                <a class="btn <?=($cat==$categoria->term_id)?'btn-verde':'btn-branco'?>"
                href="<?=get_category_link($categoria->term_id)?>/#page-blog"
                title="<?=$categoria->name?>"><?=$categoria->name?></a>
                <?php
                    } }
                ?>
            </div>
        </div>
        <div class="row mt-4 lista-blog">
        <?php
        $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
        $newQuery = new WP_Query( 
            array( 
                'posts_per_page' => 9,
                'limit' => 0,
                'cat' => $cat,
                'orderby' => 'date',
                'order'   => 'DESC',
                'paged' => $paged,
                'suppress_filters' => true,
            )
        );

        if ($newQuery->have_posts()):
            while($newQuery->have_posts()) : $newQuery->the_post(); ?>

            <div class="col-12 col-sm-4 mb-4 post">
                <a href="<?=the_permalink()?>">
                    <img src="<?=the_post_thumbnail_url()?>" alt="<?=the_title()?>">
                </a>
                <div class="post-cats">
                    Categoria:
                <?php
                $categorias = get_the_category(get_the_ID(), 'categoria');
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
                <a href="<?=the_permalink()?>"><h2><?=the_title()?></h2></a>
            </div>

            <?php endwhile; ?>

            <div class="col-12 mt-4 text-center">
            <?php 
                echo paginate_links( array(
                    'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
                    'total'        => $newQuery->max_num_pages,
                    'current'      => max( 1, get_query_var( 'paged' ) ),
                    'format'       => '?paged=%#%',
                    'show_all'     => false,
                    'type'         => 'plain',
                    'end_size'     => 2,
                    'mid_size'     => 1,
                    'prev_next'    => true,
                    'prev_text'    => sprintf( '<i class="fas fa-angle-left"></i> %1$s', __( 'Anterior', 'text-domain' ) ),
                    'next_text'    => sprintf( '%1$s <i class="fas fa-angle-right"></i>', __( 'Próximo', 'text-domain' ) ),
                    'add_args'     => false,
                    'add_fragment' => '',
                ) );
            ?>
            </div>
        <?php endif; ?>

        </div>
    </div>
</section>

<section style="position: relative; top: -56px">
<?php include('form-orcamento.php'); ?>
</section>

<?php
get_footer();
?>