<?php
get_header();
if (have_posts()) : while (have_posts()) : the_post();
?>
        <section class="freevent_wrapper container mx-auto">
            <?php
            the_post_thumbnail();
            the_title();

            the_content();
            ?>
        </section>

        <?php
        echo '<div id="freevent_comments_wrapper">';
        comments_template();
        echo '</div>';
        ?>
<?php get_footer();
    endwhile;
endif;
?>