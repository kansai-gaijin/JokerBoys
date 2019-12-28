<?php get_header(); ?>
<?php
    /**
     * Functions hooked into `theme/index/header` action.
     *
     * @hooked JokerB\Theme\Index\render_header - 10
     */
    do_action('theme/index/header');
?>
<section class="section">
    <div class="wrapper">
        <div class="content"><?php echo get_field('testtest', 'option'); ?>
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post() ?>
                    <?php
                        /**
                         * Functions hooked into `theme/single/content` action.
                         *
                         * @hooked JokerB\Theme\App\Structure\render_post_content - 10
                         */
                        do_action('theme/single/content');
                    ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>

        <?php if (apply_filters('theme/single/sidebar/visibility', true)) : ?>
            <?php
                /**
                 * Functions hooked into `theme/single/sidebar` action.
                 *
                 * @hooked JokerB\Theme\App\Structure\render_sidebar - 10
                 */
                do_action('theme/single/sidebar');
            ?>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>
