
<section class="section section-gallery">
    <div class="container">
        <?php get_template_part( 'sections/partials/section', 'title' ); ?>
    </div>

    <?php if( have_rows('images') ): ?>
    <div class="owl-carousel owl-gallery">

        <?php while( have_rows('images') ): the_row(); 
        
            $attachment_id = get_sub_field('image');
            $size = 'gallery-thumbnail'; // (thumbnail, medium, large, full or custom size)
            $image = wp_get_attachment_image_src( $attachment_id, $size );
            ?>
            <a class="img-link" href="<?php echo wp_get_attachment_image_src( get_sub_field('image'), 'large' )[0]; ?>" data-fancybox="gallery"><img class="owl-lazy" data-src="<?php echo wp_get_attachment_image_src( get_sub_field('image'), 'gallery-thumbnail' )[0]; ?>" alt="<?php echo esc_attr($image['alt']); ?>" /></a>
        <?php endwhile; ?>
    </div>
    <script type="text/javascript">
        jQuery(document).ready(function(){

            jQuery(".owl-gallery").owlCarousel({
                items: 5,
                dots: false,
                lazyLoad : true,
                responsive:{
                    0:{
                        items:2
                    },
                    600:{
                        items:3
                    },
                    1000: {
                        items:5
                    }
                }
            });

            jQuery().fancybox({
                selector : '.owl-item:not(.cloned) a',
                backFocus : false,
                hash : false
            });
        });
    </script>
    <?php endif; ?>
</section>