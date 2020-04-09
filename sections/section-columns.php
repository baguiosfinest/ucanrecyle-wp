<?php 

    $additional_classes = 'section section-columns';

    $styles = "";
    $bgUrl = get_field('background_image'); 
    if($bgUrl) {
        $styles = "background-image: url(". $bgUrl ."); background-position: bottom center;";
    }
    
    if(get_sub_field('dark_mode') == 'Yes') {
        $additional_classes .= ' section-gray';
    }

    if(get_sub_field('no_padding') == 'Yes') {
        $additional_classes .= ' no-pad';
    }

    if(!empty(get_sub_field('background_color'))) {
        $styles .= 'style="background-color: '. get_sub_field('background_color') .'";';
    }

    $numofcolumns = get_sub_field('number_of_columns');
    $colClass = "";
    switch($numofcolumns) {
        case 1: 
            $colClass .= "col-full";
            break;
        case 2: 
            $colClass .= "col-two";
            break;
        case 3: 
            $colClass .= "col-three";
            break;
        case 4: 
            $colClass .= "col-four";
            break;
        default: 
            $colClass .= "col-full";
            break;
    }

?>
<section <?php post_class($additional_classes) ?>  <?php echo ($styles)? $styles : ''; ?>>

    <?php get_template_part( 'sections/partials/section', 'title' ); ?>

    <div class="container">
        <div class="horizontal flex-wrap">

            <?php if( have_rows('column_content') ): ?>
                <?php while( have_rows('column_content') ): the_row(); 
                    $image = get_sub_field('image');
                    $content = get_sub_field('content');
                    $button_text = get_sub_field('button_text');
                    $button_link = get_sub_field('button_link');
                    ?>

                    <article class="col-image <?php echo $colClass; ?>">
                        <?php if($image) : ?>
                            <div class="col-image-map"><img class="img-responsive" src="<?php echo $image; ?>" alt=""></div>
                        <?php endif; ?>

                        <div class="col-image-text">
                            
                            <?php echo $content; ?>

                            <?php if(get_sub_field('button_text')) : ?>
                                <p class="text-center">
                                    <a href="<?php echo esc_url(get_sub_field('button_link')); ?>" class="btn"><?php echo esc_html(get_sub_field('button_text')); ?></a>
                                </p>
                            <?php endif; ?>

                        </div>
                    </article>

                <?php endwhile; ?>
            <?php endif; ?>

        </div>
    </div>
</section>
