<?php
get_header();
?>

<?php
if ( have_posts() ) :
	while ( have_posts() ) : the_post();
        ?>
        
        <section class="topo-page single-post">
            <div class="topo-bg" style="background: url('<?=the_post_thumbnail_url()?>')
            no-repeat top center; background-size: cover;">
                <div class="topo-table">
                    <div class="topo-content">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-8">
                                    <a href="<?=home_url('/')?>">Página inicial</a> > Blog
                                    <br><br>
                                    <h2><?=the_title()?></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="topo-mascara"></div>
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
        			<div class="col-sm-9">
        				<?=the_content()?>
        			</div>
        			<div class="col-sm-3 lista-cats">
        			    <div class="categs">
                            <h2>CATEGORIAS</h2>
                            <ul>
                            <?php
                            $categorias = get_categories();
        
                            foreach($categorias as $categoria) {
                            ?>
                                <li><a href="<?=get_category_link($categoria->term_id)?>"
                                title="<?=$categoria->name?>"><?=$categoria->name?></a></li>
                            <?php } ?>
                            </ul>
                        </div>
                        <br>
                        <div class="recentes">
                            <h2>POSTS RECENTES</h2>
                            
                            <ul>
                            <?php
                    		$posts_recentes = new WP_Query( 
                    			array(
                    				'posts_per_page' => 5,
                    				'orderby' => 'date',
                    				'order'   => 'DESC',
                    				'suppress_filters' => true,
                    			)
                            );
                            
                            $c = $posts_recentes->found_posts; ;
                            $i = 1;
                    		if ($posts_recentes->have_posts()):
                    			while($posts_recentes->have_posts()) : $posts_recentes->the_post();
                    			?>
                                <li><a href="<?=the_permalink()?>"><?=the_title()?></a></li>
                            <?php
                                if($i<$c && $i<5) {
                                    echo '<hr>';
                                }
                                $i++;
                                endwhile;
                            endif;
                            ?>
                            </ul>
                        </div>
                    </div>
        		</div>
        	</div>
        </section>

        
		<?php
		$postcat = get_the_category($post->ID);
        $postcats = array();
        foreach($postcat as $categ) {
            array_push($postcats, $categ->cat_ID);
        }

		$newQuery = new WP_Query( 
			array(
				'limit' => 3,
				'orderby' => 'date',
                'order'   => 'DESC',
                'category__in' => $postcats,
				'suppress_filters' => true,
				'post__not_in' => array($post->ID)
			)
		);

		if ($newQuery->have_posts()): ?>
		
		<section class="page-content">
            <div class="container">
                <div class="row justify-content-center mt-4 lista-blog">
                    <div class="col-12 text-center">
                        <h2>NOVIDADES RELACIONADAS</h2><br><br>
                    </div>
                    <?php
                    $i = 1;
        			while($newQuery->have_posts()) : $newQuery->the_post();
        			if($i % 2 == 0) {
                        $img_em_cima = false;
                    } else {
                        $img_em_cima = true;
                    }
        			?>
                    <div class="col-12 col-sm-4 mb-4 post">
                        <a href="<?=get_permalink($post->id)?>">
                            <img src="<?=the_post_thumbnail_url()?>" alt="<?=$post->post_title?>">
                        </a>
                        <a href="<?=get_permalink($post->id)?>"><h2><?=$post->post_title?></h2></a>
                    </div>
                    <?php $i++; endwhile; ?>
                </div>
            </div>
        </section>
        
        <?php endif; ?>
<?php
	endwhile;
endif;
?>

<section style="position: relative; top: -56px">
<?php include('form-orcamento.php'); ?>
</section>

<?php
get_footer();
?>