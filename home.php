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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans:100,100i,300,300i,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i&display=swap" rel="stylesheet">
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



<!-- Woocommerce Best -->

<div class="entry-content">
			
<div class="wp-block-group alignfull has-background" style="background-color:#f0f0f0">
    <h3>Nos meilleures ventes</h3>
    <div class="wp-block-group alignfull has-background" style="background-color:#f0f0f0"><div class="wp-block-group__inner-container"><div class="wc-block-grid wp-block-product-category wc-block-product-category has-3-columns has-multiple-rows"><ul class="wc-block-grid__products"><li class="wc-block-grid__product">
				<a href="http://localhost/PixRetail/product/casper/" class="wc-block-grid__product-link">
					<div class="wc-block-grid__product-image"><img width="324" height="324" src="http://localhost/PixRetail/wp-content/uploads/2020/01/Casper-324x324.png" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="http://localhost/PixRetail/wp-content/uploads/2020/01/Casper-324x324.png 324w, http://localhost/PixRetail/wp-content/uploads/2020/01/Casper-300x300.png 300w, http://localhost/PixRetail/wp-content/uploads/2020/01/Casper-1024x1024.png 1024w, http://localhost/PixRetail/wp-content/uploads/2020/01/Casper-150x150.png 150w, http://localhost/PixRetail/wp-content/uploads/2020/01/Casper-768x768.png 768w, http://localhost/PixRetail/wp-content/uploads/2020/01/Casper-416x416.png 416w, http://localhost/PixRetail/wp-content/uploads/2020/01/Casper-100x100.png 100w, http://localhost/PixRetail/wp-content/uploads/2020/01/Casper.png 1280w" sizes="(max-width: 324px) 100vw, 324px"></div>
					<div class="wc-block-grid__product-title">Casper</div>
				</a>
				
				<div class="wc-block-grid__product-price price"><span class="woocommerce-Price-amount amount">10,00<span class="woocommerce-Price-currencySymbol">€</span></span> – <span class="woocommerce-Price-amount amount">15,00<span class="woocommerce-Price-currencySymbol">€</span></span></div>
				
				<div class="wp-block-button wc-block-grid__product-add-to-cart"><a href="http://localhost/PixRetail/product/casper/" aria-label="Sélectionner les options pour “Casper”" data-quantity="1" data-product_id="297" data-product_sku="" rel="nofollow" class="wp-block-button__link add_to_cart_button">Choix des options</a></div>
			</li><li class="wc-block-grid__product">
				<a href="http://localhost/PixRetail/product/alexender-2/" class="wc-block-grid__product-link">
					<div class="wc-block-grid__product-image"><img width="324" height="324" src="http://localhost/PixRetail/wp-content/uploads/2020/01/Alexender-324x324.png" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="http://localhost/PixRetail/wp-content/uploads/2020/01/Alexender-324x324.png 324w, http://localhost/PixRetail/wp-content/uploads/2020/01/Alexender-300x300.png 300w, http://localhost/PixRetail/wp-content/uploads/2020/01/Alexender-1024x1024.png 1024w, http://localhost/PixRetail/wp-content/uploads/2020/01/Alexender-150x150.png 150w, http://localhost/PixRetail/wp-content/uploads/2020/01/Alexender-768x768.png 768w, http://localhost/PixRetail/wp-content/uploads/2020/01/Alexender-416x416.png 416w, http://localhost/PixRetail/wp-content/uploads/2020/01/Alexender-100x100.png 100w, http://localhost/PixRetail/wp-content/uploads/2020/01/Alexender.png 1280w" sizes="(max-width: 324px) 100vw, 324px"></div>
					<div class="wc-block-grid__product-title">Alexender</div>
				</a>
				
				<div class="wc-block-grid__product-price price"><span class="woocommerce-Price-amount amount">10,00<span class="woocommerce-Price-currencySymbol">€</span></span> – <span class="woocommerce-Price-amount amount">15,00<span class="woocommerce-Price-currencySymbol">€</span></span></div>
				
				<div class="wp-block-button wc-block-grid__product-add-to-cart"><a href="http://localhost/PixRetail/product/alexender-2/" aria-label="Sélectionner les options pour “Alexender”" data-quantity="1" data-product_id="286" data-product_sku="" rel="nofollow" class="wp-block-button__link add_to_cart_button">Choix des options</a></div>
			</li><li class="wc-block-grid__product">
				<a href="http://localhost/PixRetail/product/olenka/" class="wc-block-grid__product-link">
					<div class="wc-block-grid__product-image"><img width="324" height="324" src="http://localhost/PixRetail/wp-content/uploads/2020/01/olenka-324x324.png" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="http://localhost/PixRetail/wp-content/uploads/2020/01/olenka-324x324.png 324w, http://localhost/PixRetail/wp-content/uploads/2020/01/olenka-300x300.png 300w, http://localhost/PixRetail/wp-content/uploads/2020/01/olenka-1024x1024.png 1024w, http://localhost/PixRetail/wp-content/uploads/2020/01/olenka-150x150.png 150w, http://localhost/PixRetail/wp-content/uploads/2020/01/olenka-768x768.png 768w, http://localhost/PixRetail/wp-content/uploads/2020/01/olenka-416x416.png 416w, http://localhost/PixRetail/wp-content/uploads/2020/01/olenka-100x100.png 100w, http://localhost/PixRetail/wp-content/uploads/2020/01/olenka.png 1280w" sizes="(max-width: 324px) 100vw, 324px"></div>
					<div class="wc-block-grid__product-title">Olenka</div>
				</a>
				
				<div class="wc-block-grid__product-price price"><span class="woocommerce-Price-amount amount">10,00<span class="woocommerce-Price-currencySymbol">€</span></span> – <span class="woocommerce-Price-amount amount">15,00<span class="woocommerce-Price-currencySymbol">€</span></span></div>
				
				<div class="wp-block-button wc-block-grid__product-add-to-cart"><a href="http://localhost/PixRetail/product/olenka/" aria-label="Sélectionner les options pour “Olenka”" data-quantity="1" data-product_id="274" data-product_sku="" rel="nofollow" class="wp-block-button__link add_to_cart_button">Choix des options</a></div>
			</li><li class="wc-block-grid__product">
				<a href="http://localhost/PixRetail/product/katiu/" class="wc-block-grid__product-link">
					<div class="wc-block-grid__product-image"><img width="324" height="324" src="http://localhost/PixRetail/wp-content/uploads/2020/01/The_Mouvement.1-324x324.png" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="http://localhost/PixRetail/wp-content/uploads/2020/01/The_Mouvement.1-324x324.png 324w, http://localhost/PixRetail/wp-content/uploads/2020/01/The_Mouvement.1-300x300.png 300w, http://localhost/PixRetail/wp-content/uploads/2020/01/The_Mouvement.1-1024x1024.png 1024w, http://localhost/PixRetail/wp-content/uploads/2020/01/The_Mouvement.1-150x150.png 150w, http://localhost/PixRetail/wp-content/uploads/2020/01/The_Mouvement.1-768x768.png 768w, http://localhost/PixRetail/wp-content/uploads/2020/01/The_Mouvement.1-416x416.png 416w, http://localhost/PixRetail/wp-content/uploads/2020/01/The_Mouvement.1-100x100.png 100w, http://localhost/PixRetail/wp-content/uploads/2020/01/The_Mouvement.1.png 1280w" sizes="(max-width: 324px) 100vw, 324px"></div>
					<div class="wc-block-grid__product-title">Katiu</div>
				</a>
				
				<div class="wc-block-grid__product-price price"><span class="woocommerce-Price-amount amount">10,00<span class="woocommerce-Price-currencySymbol">€</span></span> – <span class="woocommerce-Price-amount amount">15,00<span class="woocommerce-Price-currencySymbol">€</span></span></div>
				
				<div class="wp-block-button wc-block-grid__product-add-to-cart"><a href="http://localhost/PixRetail/product/katiu/" aria-label="Sélectionner les options pour “Katiu”" data-quantity="1" data-product_id="268" data-product_sku="" rel="nofollow" class="wp-block-button__link add_to_cart_button">Choix des options</a></div>
			</li><li class="wc-block-grid__product">
				<a href="http://localhost/PixRetail/product/perchek-copie/" class="wc-block-grid__product-link">
					<div class="wc-block-grid__product-image"><img width="324" height="324" src="http://localhost/PixRetail/wp-content/uploads/2020/01/Random-324x324.png" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="http://localhost/PixRetail/wp-content/uploads/2020/01/Random-324x324.png 324w, http://localhost/PixRetail/wp-content/uploads/2020/01/Random-300x300.png 300w, http://localhost/PixRetail/wp-content/uploads/2020/01/Random-1024x1024.png 1024w, http://localhost/PixRetail/wp-content/uploads/2020/01/Random-150x150.png 150w, http://localhost/PixRetail/wp-content/uploads/2020/01/Random-768x768.png 768w, http://localhost/PixRetail/wp-content/uploads/2020/01/Random-416x416.png 416w, http://localhost/PixRetail/wp-content/uploads/2020/01/Random-100x100.png 100w, http://localhost/PixRetail/wp-content/uploads/2020/01/Random.png 1280w" sizes="(max-width: 324px) 100vw, 324px"></div>
					<div class="wc-block-grid__product-title">Random</div>
				</a>
				
				<div class="wc-block-grid__product-price price"><span class="woocommerce-Price-amount amount">10,00<span class="woocommerce-Price-currencySymbol">€</span></span> – <span class="woocommerce-Price-amount amount">15,00<span class="woocommerce-Price-currencySymbol">€</span></span></div>
				
				<div class="wp-block-button wc-block-grid__product-add-to-cart"><a href="http://localhost/PixRetail/product/perchek-copie/" aria-label="Sélectionner les options pour “Random”" data-quantity="1" data-product_id="248" data-product_sku="" rel="nofollow" class="wp-block-button__link add_to_cart_button">Choix des options</a></div>
			</li><li class="wc-block-grid__product">
				<a href="http://localhost/PixRetail/product/perchek/" class="wc-block-grid__product-link">
					<div class="wc-block-grid__product-image"><img width="324" height="324" src="http://localhost/PixRetail/wp-content/uploads/2020/01/Perchek-324x324.png" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="http://localhost/PixRetail/wp-content/uploads/2020/01/Perchek-324x324.png 324w, http://localhost/PixRetail/wp-content/uploads/2020/01/Perchek-300x300.png 300w, http://localhost/PixRetail/wp-content/uploads/2020/01/Perchek-1024x1024.png 1024w, http://localhost/PixRetail/wp-content/uploads/2020/01/Perchek-150x150.png 150w, http://localhost/PixRetail/wp-content/uploads/2020/01/Perchek-768x768.png 768w, http://localhost/PixRetail/wp-content/uploads/2020/01/Perchek-416x416.png 416w, http://localhost/PixRetail/wp-content/uploads/2020/01/Perchek-100x100.png 100w, http://localhost/PixRetail/wp-content/uploads/2020/01/Perchek.png 1280w" sizes="(max-width: 324px) 100vw, 324px"></div>
					<div class="wc-block-grid__product-title">Perchek</div>
				</a>
				
				<div class="wc-block-grid__product-price price"><span class="woocommerce-Price-amount amount">10,00<span class="woocommerce-Price-currencySymbol">€</span></span> – <span class="woocommerce-Price-amount amount">15,00<span class="woocommerce-Price-currencySymbol">€</span></span></div>
				
				<div class="wp-block-button wc-block-grid__product-add-to-cart"><a href="http://localhost/PixRetail/product/perchek/" aria-label="Sélectionner les options pour “Perchek”" data-quantity="1" data-product_id="241" data-product_sku="" rel="nofollow" class="wp-block-button__link add_to_cart_button">Choix des options</a></div>
			</li></ul></div>

<div class="wc-block-grid wp-block-product-category wc-block-product-category has-3-columns"><ul class="wc-block-grid__products"></ul></div></div></div>
    </div></div></div></div>
</div>
                    

<!-- Old collection -->

    <!--  Title
    <div class="dernieresCollectionTitle">
        <h2>Précédente collection</h2>
    </div>
                -->
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



    <!-- slider mobile -->


<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
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
                    <img class="collectionBackground d-block w-100" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>
        </div>
        <div class="carousel-item">
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
                    <img class="collectionBackground d-block w-100" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>
        </div>
        <div class="carousel-item">
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
                    <img class="collectionBackground d-block w-100" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?> 
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

    <?php get_footer(); ?>
</body>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


</html>