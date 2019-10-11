<?php
/**
 * The home template file
 *
 * Default Homepage for the  site Or If the user has selected a static page for their homepage, this is what will appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Envy Blog
 */

get_header();

?>

    <div class="row">
        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">
                <?php
                if ( have_posts() ) :

                    // Blog Posts
                    $blog_classes = array( 'blog-layout' );
                    $blog_classes[] = $blog_layout;

                    $blog_classes[] = 'has-left-align-image';

                    echo '<div class="'.esc_attr( implode( ' ', $blog_classes ) ).'">';
                    get_template_part( 'layouts/blog/blog-layout-2', get_post_format() );
                    echo '</div><!-- .'.esc_attr( $blog_layout ).'-->';

                    // Pagination
                    get_template_part( 'layouts/pagination/pagination', get_post_format() );

                else :

                    get_template_part( 'template-parts/content', 'none' );

                endif; ?>

            </main><!-- #main -->
        </div><!-- #primary -->

    </div><!-- .row -->

<?php get_footer();
