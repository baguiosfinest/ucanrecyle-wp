<?php 

    $additional_classes = 'section section-cta bg-image';

    if(get_sub_field('dark_mode') == 'Yes') {
        $additional_classes .= ' section-gray';
    }
?>

<section <?php post_class($additional_classes) ?>>
    <div class="container">
        
        <div class="inner horizontal">
            <div class="cat_text">
                <?php get_template_part( 'sections/partials/section', 'title' ); ?>
                <?php the_sub_field('content') ?>
            </div>
            <div class="cat_image">
                <img src="<?php the_sub_field('coex'); ?>" alt="Containers For Change" />
            </div>
        </div>
        <p class="text-center">
            <a target="_blank" href="<?php the_sub_field('coex_link') ?>" class="btn">Sign Up</a>
        </p>

    </div>
</section>

