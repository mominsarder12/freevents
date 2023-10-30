<?php
get_header();
if(have_posts()):while(have_posts()): the_post();
?>
<section class="freevent_wrapper container mx-auto">
    <?php the_content(); ?>
</section>
<?php get_footer();
endwhile;
endif;
?>
    