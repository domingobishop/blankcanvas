<?php get_header(); ?>

    <?php while (have_posts()) : the_post();

    global $post;



    $meta =  get_post_meta($post->ID, '_wpsc_product_metadata' , true);

    var_export( $meta['table_rate_price'] );

    $i = 0;
    foreach ( $meta['table_rate_price']['quantity'] as $item ) {
        echo '<br>';
        echo $meta['table_rate_price']['quantity'][$i];
        echo ' : ';
        echo $meta['table_rate_price']['table_price'][$i];
        echo '<br>';
        $i++;
    }


    ?>

    <main id="main" class="main" role="main">
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                <div class="entry-header">
                                    <h1>
                                        <?php the_title(); ?>
                                    </h1>
                                </div>
                                <div class="entry-content">
                                    <?php the_content(); ?>
                                </div>
                            </article>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </div>
    </main>

<?php get_footer(); ?>