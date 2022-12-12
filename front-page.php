<!-- Landing Page -->
<!-- Header -->
<?php
    get_header();
?>        
<!-- Dynamic main content WP loop-->
<?php
    if(have_posts()){
        while(have_posts()){
            the_post();
            the_content();
        }
    }
?>

<!-- Footer-->
<?php
    get_footer();
?>          
 
    
</body>
</html>
