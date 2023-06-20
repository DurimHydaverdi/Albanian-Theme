<!-- <h2>contact page</h2>
<?php 

?>

<img src=<?php echo get_field('phone_logo') ?> alt=""> <p><?php echo get_field('phone_number') ?></p> -->


<?php 
get_header();

$number = get_field('phone_number');
$location = get_field('location');
$email = get_field('email');
$phone_logo = get_field('phone_logo');
$email_logo = get_field('eamil_logo');
$location_logo = get_field('location_logo');
// var_dump($email);
// var_dump($phone_logo);
// var_dump($email_logo);
// var_dump($location_logo);
?>
        
<div class="Header">
            <ul class="ul">
            <h1 class="h1">Albanian Events</h1>
            <a class="a-home" href=http://localhost/wordpress/wordpress/index.php>Home</a>
            <a class="a-about" href="http://localhost/wordpress/wordpress/about/">About</a>
            <a class="a-contacts" href="http://localhost/wordpress/wordpress/contacts/">Contacts</a>
            </ul>
        

    <div class="contacts">
                <p class="question">GOT A QUESTION?</p>
                <h1>Contact Albanian Events</h1>
                <p class="p">We're here to help and answer any question you might have.
                <br> 
                We look forward to hearing from you
                </p>
                <p class="email"><?php echo $email; ?></p>
                <p class="location"><?php echo $location ?></p>
                <p class="number"><?php echo $number ?></p>
                <!-- <br> -->
                <p class ="email"><img class ="email-img" src=<?php echo $email_logo; ?>></p>
                <p class="phone"><img class ="phone-img" src=<?php echo $phone_logo; ?>></p>
                <p class="location"><img class ="location-img" src=<?php echo $location_logo; ?>></p>
    </div>

 

</div>

<?php 

get_footer();


