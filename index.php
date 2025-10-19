<?php get_header(); ?>

    <section id="perfil" class="title">
        <div class="boxtitle">
            <div class="divtexto">
                <h1 class="titletext">Perfil</h1>
            </div>
        </div>
        <div class="linha-load"></div>
    </section>
    <div class="box">
        <div class="inside-box">
            <?php
            $Pagperfil = new WP_Query (array(
                'paged' => get_query_var('paged', '1'),
			    'posts_per_page' => -1,
			    'orderby'          => 'publish_date',
                'order'            => 'DESC',
                'post_type'        => 'perfl',
                'post_status'      => 'publish',
            ));
            if ($Pagperfil->have_posts() ) {
                while ( $Pagperfil->have_posts() ) {
                    $Pagperfil->the_post();?>
                    <div class="portfolio-section">
                        <div class="profile-text">
                            <h1><a title="<?php the_title_attribute();?>"><?php the_title(); ?></a></h1>
                            <p><?php echo the_content();?></p>
                        </div>
                        <div class="profile-photo">
                            <img src="<?php the_post_thumbnail_url(); ?>"/>
                        </div>
                    </div>
                    <?php 
			    } // end while
		    } // end if
		    ?>
        </div>
    </div>

<?php wp_reset_postdata(); ?>

    <section id="clientes" class="title">
        <div class="boxtitle">
            <div class="divtexto">
                <h1 class="titletext">Clientes</h1>
            </div>
        </div>
        <div class="linha-load"></div>
    </section>
    <div class="box">
        <div class="inside-box">
            <div class="image-grid">
                <?php
                $Pagcliente = new WP_Query (array(
			        'paged' => get_query_var('paged', '1'),
			        'posts_per_page' => -1,
			        'orderby'          => 'publish_date',
			        'order'            => 'DESC',
			        'post_type'        => 'clietes',
			        'post_status'      => 'publish',
                ));
                if ($Pagcliente->have_posts() ) {
                    while ( $Pagcliente->have_posts() ) {
                        $Pagcliente->the_post();
                        /* Campos Personalizados */
                        $id_post = get_the_ID();
                        $urlcliente = get_field('url_do_cliente', $id_post);
                ?>
                <a href="<?php echo $urlcliente; ?>" target="_blank">
                    <img src="<?php the_post_thumbnail_url(); ?>"/>
                </a>
                <?php
                    } // end while
                } // end if
                ?>
            </div>
        </div>
    </div>

<?php wp_reset_postdata(); ?>

    <section id="contatos" class="title">
        <div class="boxtitle">
            <div class="divtexto">
                <h1 class="titletext">Contatos</h1>
            </div>
        </div>
        <div class="linha-load"></div>
    </section>
    <div class="box">
        <div class="inside-box">
            <?php echo do_shortcode('[contact-form-7 id="d7a4cc5" title="Formulario_Contato_Config"]'); ?>
        </div>
    </div>

<?php get_footer(); ?>   