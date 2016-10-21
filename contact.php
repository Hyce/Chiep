<?php
/*
Template Name: Contact
*/
?>
<?php get_header(); ?>
<?php include("navbar.php"); ?>

    <div class="main center-block" alt="Responsive image">
        <img src="<?php echo get_template_directory_uri(); ?>/images/.png" width="100%" height="auto" alt="" />
    </div>
<div class="container">
    <div class="row text-center">
        <div class="col-md-4 col-md-offset-4">
            <div class="contact">
                <h3>CONTACT US</h3>
                <hr class="small">
                <p>
                    Pour toutes questions....
                </p>
            </div>
        </div>
        <div class="col-md-4 col-md-offset-2">
            <input  type="text" placeholder="YOUR NAME*">
            <input type="email" placeholder="YOUR E-MAIL*">
            <input type="text" placeholder="SUBJECT*">

        </div>
        <div class="col-md-4">
            <textarea name="Message" placeholder="YOUR MESSAGE*" id="message" cols="30" rows="10"></textarea>
        </div>
    </div>
    <div class="row text-center">
        <div class="col-md-2 col-md-offset-5">
            <input class="send" type="button" value="SEND MESSAGE">
        </div>
    </div>
</div>
<?php get_footer(); ?>