<?php 

    $additional_classes = 'section section-columns section-process';
    $section_styles = '';

    if(get_sub_field('dark_mode') == 'Yes') {
        $additional_classes .= ' section-gray';
    }

    if(!empty(get_sub_field('background_color'))) {
        $section_styles .= 'style="background-color: '. get_sub_field('background_color') .'";';
    }

?>

<section <?php post_class($additional_classes) ?> <?php echo ($section_styles)? $section_styles : ''; ?>>
    <div class="container">

        <?php get_template_part( 'sections/partials/section', 'title' ); ?>

            <div class="columns horizontal">

            <?php if( have_rows('column_content') ): ?>
                <?php while( have_rows('column_content') ): the_row(); 
                    $image = get_sub_field('image');
                    $content = get_sub_field('content');
                    $number = get_sub_field('number');
                    $subtitlefield = get_sub_field('subtitle');
                    ?>

                    <div class="col">
                        <article class="lined">

                            <?php if($number) : ?>
                            <span class="num"><?php echo $number; ?></span>
                            <?php endif; ?>
                            
                            <?php if($image) : ?>
                                <div class="image"><img class="img-responsive" src="<?php echo $image ?>" alt="<?php echo $subtitlefield ?>" /></div>
                            <?php endif; ?>

                            <div class="content">
                                <?php if($subtitlefield) : ?>
                                    <h3 class="title"><?php echo $subtitlefield ?></h3>
                                <?php endif; ?>
                                <?php echo $content; ?>
                            </div>

                            <?php if(get_sub_field('button_text')) : ?>
                                <p class="text-center">
                                    <a href="<?php echo esc_url(get_sub_field('button_link')); ?>" class="btn"><?php echo esc_html(get_sub_field('button_text')); ?></a>
                                </p>
                            <?php endif; ?>
                        </article>
                    </div>

                <?php endwhile; ?>
            <?php endif; ?>

            </div>

    </div>
</section>