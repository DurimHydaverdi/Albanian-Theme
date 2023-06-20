<?php get_header(); ?>
    <div>
        <div class="Header">
            <ul class="ul">
            <h1 class="h1">Albanian Events</h1>
            <a class="a-home" href="http://localhost/wordpress/wordpress/index.php">Home</a>
            <a class="a-about" href="http://localhost/wordpress/wordpress/about/">About</a>
            <a class="a-contacts" href="http://localhost/wordpress/wordpress/contacts/">Contacts</a>
            </ul>
        </div>
        <?php
        $args = array(
    'post_type' => 'events',
    'order' => 'ASC',
        );
    $the_query = new WP_Query( $args ); 
    // var_dump(get_permalink());
        ?>
    <?php if ( $the_query->have_posts() ) : ?>

    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
    <?php 
    $title = get_field('page_title');
    $date = get_field('date_time');
    $location = get_field('location');
    $price = get_field('price');
    $image = get_field('event_image');
    $url = get_permalink();
    // var_dump(get_permalink());
    // var_dump($image);
    ?>

    <div class="Firstone">
        <img src=<?php echo $image; ?> alt=""/>
        <h2><?php echo $title; ?></h2>
        <p><?php echo $date ?></p>
        <p><?php echo $location ?></p>
        <p>Price: <?= $price ?>$</p>
        <a href=<?php echo $url; ?>><button class="Learn-More">Learn More</button></a>
    </div>

    <?php endwhile; ?>

    <?php wp_reset_postdata(); ?>

    <?php endif; ?>
        

    </div>
<?php get_footer(); ?>