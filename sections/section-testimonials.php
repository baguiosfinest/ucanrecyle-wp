<?php 

    $additional_classes = 'section section-testimonials';

    if(get_sub_field('dark_mode') == 'Yes') {
        $additional_classes .= ' section-gray';
    }

?>

<section id="post-<?php the_ID(); ?>" <?php post_class($additional_classes) ?>>
    <div class="container">
    <?php get_template_part( 'sections/partials/section', 'title' ); ?>

        <div class="section-inner">
            <?php if( have_rows('testimonial') ): ?>
            <div class="owl-carousel owl-testimonials">

                    <?php while( have_rows('testimonial') ): the_row(); 

                    $author = get_sub_field('author');
                    $content = get_sub_field('content');
                    $position = get_sub_field('position');
                    ?>

                    <div class="testimonial">
                        <div class="content">
                            <i class="fa fa-quote-left quote-left"></i>

                                <?php echo $content; ?>
                            
                            <i class="fa fa-quote-right quote-right"></i>
                        </div>
                        <?php if($author) : ?>
                            <div class="author text-center">
                                <h4><?php echo $author; ?></h4>
                                <p><?php echo $position; ?></p>
                            </div>
                        <?php endif; ?>
                    </div>

                    <?php endwhile; ?>

            </div>
            <script type="text/javascript">
                jQuery(document).ready(function(){
                    jQuery(".owl-testimonials").owlCarousel({
                        items: 1,
                        dots: true
                    });
                });
            </script>
            
            </div>

            <?php endif; ?>
    </div>
</section>