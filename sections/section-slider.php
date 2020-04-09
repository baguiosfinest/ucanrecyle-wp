<section class="section section-slider slider-full">
    <?php if( have_rows('slider') ): ?>
    <div class="flexslider">
        <ul class="slides">
            <?php while( have_rows('slider') ): the_row(); ?>
            <li class="slide-item">
                <?php if(get_sub_field('image')) : ?>
                    <div class="bg-image slide-image" style="background-image: url('<?php the_sub_field('image') ?>');"></div>
                <?php endif; ?>
                <div class="flex-caption">
                    <h2 class="title"><?php the_sub_field('heading'); ?></h2>
                    <?php if(get_sub_field('description')): ?>
                    <div class="desc">
                        <?php the_sub_field('description'); ?>
                    </div>
                    <?php endif; ?>
                    <?php if(get_sub_field('button_text')): ?>
                    <p class="text-center">
                        <a target="_blank" href="<?php the_sub_field('button_link'); ?>" class="btn"><?php the_sub_field('button_text'); ?></a>
                    </p>  
                    <?php endif; ?>
                </div>
            </li>
            <?php endwhile; ?>
        </ul>
    </div>
    <?php endif; ?>
</section>
<script type="text/javascript">
    jQuery(document).ready(function($){
        $(window).load(function() {
            $('.flexslider').flexslider({
                animation: "slide",
                controlNav: false
            });
        });
    });
</script>