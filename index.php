<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <meta charset="<?php bloginfo('charset'); ?>">

    <!-- wordpress header stuff, css etc. -->
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >

<nav>
    <ul>
        <li>Nav</li>
    </ul>
</nav>

<section id="content">
    <h1>This is the Blanko Theme</h1>
    
    <!-- content will be loaded here -->
    <div id="rest"></div>
</section>

<footer>
    Made via HTML, CSS and JavaScript. 
</footer>

<script
      src="https://code.jquery.com/jquery-3.3.1.min.js"
      integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
      crossorigin="anonymous"></script>


<script>
/**
 * jQuery ready test
 **/
$( document ).ready(function() {
    console.log( "Cheers: jQuery is ready!" );
    $('#rest').append('<p>jQuery is up and running. Yahoo!</p>');
});
</script>

<!-- wordpress footer stuff, admin menu on top bar, etc. -->  
<?php wp_footer(); ?> 
</body>
</html>