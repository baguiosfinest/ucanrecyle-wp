<?php 
    $bgUrl = (get_field('header_image'))? get_field('header_image') : get_stylesheet_directory_uri() . '/images/bottles.jpg';
?>

<header class="page-header bg-image" style="background-image: url(<?php echo $bgUrl; ?>)">
    <div class="inner text-center">
        <h2><?php the_title(); ?></h2>
        <ul class="menu">
            <li><a href="<?php echo site_url('/'); ?>">Home</a></li>
            <li class="active"><?php the_title(); ?></li>
        </ul>
    </div>
</header>
