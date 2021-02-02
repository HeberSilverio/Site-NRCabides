<section id="contato-home">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h2>ESTÁ PRECISANDO DE UM ORÇAMENTO?</h2>
                <p>Preencha todos os campos abaixo e em breve nossos<br>especialistas entrarão em contato com você.</p>
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