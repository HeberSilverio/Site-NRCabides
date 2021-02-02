<?php get_header(); ?>

<section id="tit-page">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1><?php printf( esc_html__('Resultado da pesquisa por: %s'), '<span>' . get_search_query() . '</span>' ); ?></h1>
            </div>
        </div>
    </div>
</section>

<section id="list-blog">
    <div class="container">
		<?php
		if ( have_posts() ) : ?>
		<div class="row">
		<?php while ( have_posts() ) : the_post(); ?>
        
            <div class="col-12 col-md-6">
                <a class="post-item" href="<?=the_permalink()?>">
                    <img src="<?=the_post_thumbnail_url()?>" alt="<?=the_title()?>">
                    <h2><?=the_title()?></h2>

                     <?php $resumo = mb_substr(get_the_content(), 0, 150); ?>
                    <p><?=$resumo?>...</p>
                    <small><?=__('[:en]Posted in:&nbsp;[:pb]Publicado em: '); ?><?=get_the_date('d/m/Y', get_the_ID())?></small>
                    <span>+</span>
                </a>
            </div>
            
        <?php endwhile; ?>
        </div>
        
        <?php 
		else :

			echo '<div class="row"><div class="col-12"><div class="alert alert-warning">Nenhum artigo foi encontrado</div></div></div>';

		endif; ?>
    </div>	
</section>

<?php get_footer(); ?>
