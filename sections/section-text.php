<?php 

    $additional_classes = 'section section-text bg-image';
    $section_styles = '';

    if(get_sub_field('dark_mode') == 'Yes') {
        $additional_classes .= ' section-gray';
    }
    $bgUrl = get_sub_field('bg_image');

    if(!empty(get_sub_field('bg_image'))) {
        $section_styles .= 'style="background-image: url('. $bgUrl .');"';
    }

    if(!empty(get_sub_field('background_color'))) {
        $section_styles .= 'style="background-color: '. get_sub_field('background_color') .'";';
    }

?>

<section <?php post_class($additional_classes) ?> <?php echo ($section_styles)? $section_styles : ''; ?>>
    <div class="container">
        <?php get_template_part( 'sections/partials/section', 'title' ); ?>
        <article>
            <?php the_sub_field('content') ?>

            <?php if(get_sub_field('button_text')) : ?>
                <p class="text-center">
                    <a href="<?php echo esc_url(get_sub_field('button_link')); ?>" class="btn"><?php echo esc_html(get_sub_field('button_text')); ?></a>
                </p>
            <?php endif; ?>
        </article>
    </div>
</section>

