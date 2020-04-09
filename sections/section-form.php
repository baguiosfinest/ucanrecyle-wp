<?php 
    $bg = get_sub_field('background_image');
?>
<section class="section section-form bg-image bg-dark" style="background-image: url(<?php echo $bg['url']; ?>)">
    <div class="container">
        <?php get_template_part( 'sections/partials/section', 'title' ); ?>

        <div class="section-inner form-box">
            <div class="horizontal flex-wrap">
                
                <?php the_sub_field('form'); ?>
                
            </div>
        </div>

    </div>
</section>