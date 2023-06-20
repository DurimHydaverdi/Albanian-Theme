<?php get_header(); ?>
    <div class="first-div">
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
    'pagename' => 'about'
        );
    $the_query = new WP_Query( $args ); 

        ?>
    <?php if ( $the_query->have_posts() ) : ?>

    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
    <?php

    

    // $about = get_field('about');
    // $text = get_field('text');
    // $url = get_permalink();
    ?>

<h1><a href="<?php the_permalink(); ?>"></a></h1>
        

<div class="Firstone-About">

    <?php echo the_content(); ?>
    
</div>
    

<?php endwhile; ?>

    <?php wp_reset_postdata(); ?>

<?php endif; ?>
    

</div>
<?php get_footer(); ?>




