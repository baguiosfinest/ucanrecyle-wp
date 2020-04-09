<?php if(get_sub_field('title')) : ?>
    <header class="section-title">
        <i class="fa fa-recycle"></i>
        <h2><?php the_sub_field('title'); ?></h2>
        <p><?php the_sub_field('sub_title'); ?></p>
    </header>
<?php endif; ?>