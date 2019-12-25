<?php
/*
*
* Template Name: Home
*
*
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Accueil</title>
    <?php wp_head(); ?>
</head>
<body>
    <?php get_header(); ?>
    
    <div class="first section">
        <div class="fond">
            <div class="text">
                <h2><?php the_field('titre_sur_image'); ?></h2>
                <p><?php the_field('paragraphe_sur_image'); ?></p>
                <?php 
                    $link = get_field('bouton_sur_limage');
                    if( $link ): ?>
                        <a class="button" href="<?php echo esc_url( $link ); ?>">Découvrir</a>
                <?php endif; ?>    
            </div>
            <?php 
                $image = get_field('image_de_fond');
                if( !empty( $image ) ): ?>
                    <img class="background" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>   
        </div>
    </div>



<!-- Old collection -->

    <div class="dernieresCollectionTitle">
        <h2>Précédente collection</h2>
    </div>
    <div class="oldCollections">
        <div class="collection">
            <div class="collectionTextFirst">
                <h3><?php the_field('dernieres_collections_titre_1'); ?></h3>
                <p><?php the_field('dernieres_collections_text_1'); ?></p>
                <div class="dernieresCollectionBouton">
                    <?php 
                        $link = get_field('dernieres_collections_bouton_1');
                        if( $link ): ?>
                            <a class="button " href="<?php echo esc_url( $link ); ?>">Découvrir</a>
                    <?php endif; ?>
                </div>
            </div>
            <?php 
                $image = get_field('dernieres_collections_image_1');
                if( !empty( $image ) ): ?>
                    <img class="collectionBackground" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?> 
        </div>
        <div class="collection">
            <div class="collectionTextSecond">
                <h3><?php the_field('dernieres_collections_titre_2'); ?></h3>
                <p><?php the_field('dernieres_collections_text_2'); ?></p>
                <div class="dernieresCollectionBouton">
                    <?php 
                        $link = get_field('dernieres_collections_bouton_2');
                        if( $link ): ?>
                            <a class="button " href="<?php echo esc_url( $link ); ?>">Découvrir</a>
                    <?php endif; ?>
                </div>
            </div>
            <?php 
                $image = get_field('dernieres_collections_image_2');
                if( !empty( $image ) ): ?>
                    <img class="collectionBackground" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?> 
        </div>
        <div class="collection">
            <div class="collectionTextThird">
                <h3><?php the_field('dernieres_collections_titre_3'); ?></h3>
                <p><?php the_field('dernieres_collections_text_3'); ?></p>
                <div class="dernieresCollectionBouton">
                    <?php 
                        $link = get_field('dernieres_collections_bouton_3');
                        if( $link ): ?>
                            <a class="button " href="<?php echo esc_url( $link ); ?>">Découvrir</a>
                    <?php endif; ?>
                </div>
            </div>
            <?php 
                $image = get_field('dernieres_collections_image_3');
                if( !empty( $image ) ): ?>
                    <img class="collectionBackground" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?> 
        </div>
    </div>
    <?php get_footer(); ?>
</body>
<link href="https://fonts.googleapis.com/css?family=Alegreya+Sans:100,100i,300,300i,400&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i&display=swap" rel="stylesheet">

</html>