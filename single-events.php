<?php 
get_header();

    $title = get_field('page_title');
    $date = get_field('date_time');
    $location = get_field('location');
    $price = get_field('price');
    $image = get_field('event_image');
?>

<div class="Header">
            <ul class="ul">
            <h1 class="h1">Albanian Events</h1>
            <a class="a-home" href=http://localhost/wordpress/wordpress/index.php>Home</a>
            <a class="a-about" href="http://localhost/wordpress/wordpress/about/">About</a>
            <a class="a-contacts" href="http://localhost/wordpress/wordpress/contacts/">Contacts</a>
            </ul>

    <div class="lm">
            <img class="lm-img" src=<?php echo $image ?> alt=""/>
            <h2 class="lm-h2"><?php echo $title ?></h2>
            <p class="lm-p1"><?php echo $date ?></p>
            <p class="lm-p2"><?php echo $location ?></p>
            <p class="lm-p3">Price: <?php echo $price ?>$</p>
            <p class="description">
            <?php echo get_the_content();  ?>
            </p>
    </div>
</div>

<?php

get_footer();