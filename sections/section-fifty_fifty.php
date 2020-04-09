<section class="section section-50-50">
        <div class="container">
            <?php get_template_part( 'sections/partials/section', 'title' ); ?>
        </div>  
    
    <?php if( have_rows('row_content') ): ?>

        <?php while( have_rows('row_content') ): the_row(); 
                    $image = get_sub_field('image');
                    $heading = get_sub_field('heading');
                    $content = get_sub_field('content');
                    $button_text = get_sub_field('button_text');
                    $button_link = get_sub_field('button_link');
                    $reverse = get_sub_field('reverse');
                    ?>

            <div class="columns horizontal <?php echo ($reverse === 'Yes')? 'flex-row-reverse' : ''; ?>">
                <div class="col bg-image" style="background-image: url(<?php echo $image; ?>)">
                </div>
                <div class="col">
                    <article>
                        <?php if($heading) : ?>
                            <h3><?php echo $heading; ?></h3>
                        <?php endif; ?>
                        
                        <?php echo $content; ?>
                        
                        <?php if(get_sub_field('button_text')) : ?>
                            <p class="text-center">
                                <a href="<?php echo esc_url(get_sub_field('button_link')); ?>" class="btn"><?php echo esc_html(get_sub_field('button_text')); ?></a>
                            </p>
                        <?php endif; ?>
                    </article>
                </div>
            </div> 
            
        <?php endwhile; ?>
    <?php endif; ?>

</section>