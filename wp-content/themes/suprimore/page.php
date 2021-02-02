<?php
get_header();

if ( have_posts() ) :
    while ( have_posts() ) : the_post(); ?>

<section id="tit-page">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1><?=the_title()?></h1>
            </div>
        </div>
    </div>
</section>

<section id="conteudo-page">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php  echo the_content(); ?>
            </div>
        </div>
    </div>
</section>
    
<?php
    endwhile;
endif;

get_footer();
?>