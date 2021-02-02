<?php

add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );
add_theme_support('menus');


require get_template_directory()."/includes/enqueue.php";


function custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
register_sidebar( array(
    'name'          => esc_html__( 'Sidebar', 'quantum' ),
    'id'            => 'sidebar-1',
    'description'   => esc_html__( 'Add widgets here.', 'quantum' ),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
) );


remove_action('wp_head', 'wp_generator');
remove_action ('wp_head', 'rsd_link');
remove_action( 'wp_head', 'wlwmanifest_link');
remove_action( 'wp_head', 'wp_shortlink_wp_head');
remove_action( 'wp_head', 'feed_links', 2 );
remove_action('wp_head', 'feed_links_extra', 3 );
remove_action('wp_head', 'adjacent_posts_rel_link');


function my_related_posts() {
   $args = array('posts_per_page' => 4, 'post_in'  => get_the_tag_list());
   $the_query = new WP_Query( $args );
   echo '<hr/><div class="container" id="related_posts">';
   echo '<h2 class="titulo-sessao text-center">Artigos Relacionados</h2><div class="row">';
   while ( $the_query->have_posts() ) : $the_query->the_post();
       ?>
       <section class="item col-md-3">
          <?php if ( has_post_thumbnail() ) { ?>
              <section class="related_post_thumb">
                 <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                     <?php the_post_thumbnail( 'related-post',array('class'=>'img-fluid') ); ?>
                 </a>                       </section>
             <?php } else { ?>
              <section class="related_post_thumb">
                 <a href="<?php the_permalink(); ?>">
                    <img src="<?php bloginfo('template_directory')?>/lib/images/thumb.png" />
                </a>
            </section>
        <?php } ?>
        <h4>
          <?php the_title(); ?>
      </h4>
      <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="btn btn-outline-secondary">
        Continue lendo...
    </a>
</section>
<?php
endwhile;
echo '<div class="clear"></div></div></div>';
wp_reset_postdata();
}


function Ferramentadominio() {


return '<br><form class="dominio-js" method="POST">

    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text" id="">www.</span>
    </div>
    <input type="text" name="dominio" placeholder="Nome da empresa" class="form-control">
    <select class="drlist" name="tld">
        <option>.com</option>
        <option>.com.br</option>
        <option>.site</option>
        <option>.net</option>
        <option>.org</option>
        <option>.net.br</option>
        <option>.in</option>
        <option>.me</option>
        <option>.info</option>
        <option>.biz</option>
        <option>.us</option>
        <option>.name</option>
        <option>.cc</option>
        <option>.ws</option>
        <option>.mobi</option>
        <option>.tv</option>
        <option>.co</option>
        <option>.br.com</option>
        <option>.xxx</option>
        <option>.sc</option>
        <option>.audio</option>
        <option>.bar</option>
        <option>.beer</option>
        <option>.bio</option>
        <option>.bike</option>
        <option>.blog</option>
        <option>.boutique</option>
        <option>.business</option>
        <option>.cafe</option>
        <option>.camera</option>
        <option>.casa</option>
        <option>.chat</option>
        <option>.click</option>
        <option>.cloud</option>
        <option>.club</option>
        <option>.capital</option>
        <option>.cool</option>
        <option>.company</option>
        <option>.dance</option>
        <option>.delivery</option>
        <option>.design</option>
        <option>.digital</option>
        <option>.diet</option>
        <option>.dog</option>
        <option>.download</option>
        <option>.email</option>
        <option>.fashion</option>
        <option>.fit</option>
        <option>.fitness</option>
        <option>.fm</option>
        <option>.fun</option>
        <option>.games</option>
        <option>.garden</option>
        <option>.global</option>
        <option>.gratis</option>
        <option>.guru</option>
        <option>.help</option>
        <option>.host</option>
        <option>.hospital</option>
        <option>.legal</option>
        <option>.link</option>
        <option>.live</option>
        <option>.love</option>
        <option>.ltda</option>
        <option>.marketing</option>
        <option>.men</option>
        <option>.moda</option>
        <option>.news</option>
        <option>.ninja</option>
        <option>.online</option>
        <option>.party</option>
        <option>.pet</option>
        <option>.pizza</option>
        <option>.photos</option>
        <option>.plus</option>
        <option>.poker</option>
        <option>.porn</option>
        <option>.promo</option>
        <option>.pub</option>
        <option>.pro</option>
        <option>.review</option>
        <option>.run</option>
        <option>.sale</option>
        <option>.sex</option>
        <option>.sexy</option>
        <option>.shoes</option>
        <option>.shopping</option>
        <option>.shop</option>
        <option>.show</option>
        <option>.social</option>
        <option>.software</option>
        <option>.store</option>
        <option>.studio</option>
        <option>.style</option>
        <option>.surf</option>
        <option>.taxi</option>
        <option>.tattoo</option>
        <option>.tech</option>
        <option>.top</option>
        <option>.trade</option>
        <option>.webcam</option>
        <option>.website</option>
        <option>.wiki</option>
        <option>.work</option>
        <option>.video</option>
        <option>.vip</option>
        <option>.vodka</option>
        <option>.vc</option>
        <option>.adm.br</option>
        <option>.adv.br</option>
        <option>.arq.br</option>
        <option>.ato.br</option>
        <option>.bio.br</option>
        <option>.bmd.br</option>
        <option>.cim.br</option>
        <option>.cng.br</option>
        <option>.cnt.br</option>
        <option>.ecn.br</option>
        <option>.eng.br</option>
        <option>.eti.br</option>
        <option>.fnd.br</option>
        <option>.fot.br</option>
        <option>.fst.br</option>
        <option>.ggf.br</option>
        <option>.jor.br</option>
        <option>.lel.br</option>
        <option>.mat.br</option>
        <option>.med.br</option>
        <option>.mus.br</option>
        <option>.not.br</option>
        <option>.ntr.br</option>
        <option>.odo.br</option>
        <option>.ppg.br</option>
        <option>.pro.br</option>
        <option>.psc.br</option>
        <option>.qsl.br</option>
        <option>.slg.br</option>
        <option>.taxi.br</option>
        <option>.teo.br</option>
        <option>.trd.br</option>
        <option>.vet.br</option>
        <option>.zlg.br</option>
        <option>.blog.br</option>
        <option>.flog.br</option>
        <option>.nom.br</option>
        <option>.vlog.br</option>
        <option>.wiki.br</option>
        <option>.eco.br</option>
        <option>.tv.br</option>
        <option>.radio.br</option>
    </select>
    <input type="submit" class="btn btn-primary" value="Enviar" style="border-radius: 0px;">
</div>

</form>
<br>
<div class="result-js" style="font-size: 14px"></div>

';


?>



<?php }
add_shortcode('ferramenta_dominio', 'Ferramentadominio');

add_action( 'wp_footer', 'eventos_analytics' );

function eventos_analytics() {
    ?>

<!-- Event snippet for Pedido de Orçamento conversion page
    In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
    <script>
        function gtag_report_conversion(url) {
          var callback = function () {
            if (typeof(url) != 'undefined') {
              window.location = url;
          }
      };
      gtag('event', 'conversion', {
          'send_to': 'AW-1000558189/a4wVCLLW25kBEO2cjd0D',
          'event_callback': callback
      });




      return false;
  }
</script>

<script type="text/javascript">
    document.addEventListener( 'wpcf7mailsent', function( event ) {
        if ( '116' == event.detail.contactFormId ) {
            gtag('event', 'contato', { 'event_category': 'lead', 'event_label': 'Entrou em Contato'});
            fbq('track', 'Lead');
            gtag_report_conversion();
        }
    }, false );
</script>

<?php
}

?>