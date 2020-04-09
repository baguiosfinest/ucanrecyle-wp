<section class="section section-faq">
    <div class="container">
        <?php get_template_part( 'sections/partials/section', 'title' ); ?>

        <div class="section-inner">
            <?php 
                $index = get_sub_field('unique_id');

                if( have_rows('questions') ):   
            ?>  
            <div id="accordion-<?php echo $index; ?>">
                <?php while( have_rows('questions') ): the_row(); 

                    $question = get_sub_field('question');
                    $answer = get_sub_field('answer');
                    
                ?>
                <div class="card">
                    <div class="card-header" id="heading-<?php echo $index . get_row_index(); ?>">
                    <h5 class="mb-0">
                        <button class="button btn-link collapsed" data-toggle="collapse" data-target="#collapse-<?php echo $index . get_row_index(); ?>" aria-expanded="false" aria-controls="collapse-<?php echo $index . get_row_index(); ?>">
                            <?php echo $question; ?>
                        </button>
                    </h5>
                    </div>

                    <div id="collapse-<?php echo $index . get_row_index(); ?>" class="collapse" aria-labelledby="heading-<?php echo $index . get_row_index(); ?>" data-parent="#accordion-<?php echo $index; ?>">
                    <div class="card-body">
                        <?php echo $answer; ?>
                    </div>
                    </div>
                </div>
                <?php //$index++; ?>
                <?php endwhile; ?>
            </div>
            <?php endif; ?>
        </div>
        
    </div>
</section>