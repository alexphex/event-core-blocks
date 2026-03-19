<?php
/**
 * PHP file to use when rendering the block type on the server to show on the front end.
 *
 * The following variables are exposed to the file:
 *     $attributes (array): The block attributes.
 *     $content (string): The block default content.
 *     $block (WP_Block): The block instance.
 *
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */
?>

<?php
// get attributes from block.json
$posts_to_show = isset( $attributes['postsToShow'] ) ? $attributes['postsToShow'] : 3;

$args = array(
    'post_type'      => 'post',
    'posts_per_page' => $posts_to_show, 
    'orderby'        => 'date',
    'order'          => 'DESC',
);

$query = new WP_Query( $args );

if ( $query->have_posts() ) : ?>

    <div <?php echo get_block_wrapper_attributes(); ?>>
        <?php if ( $query->have_posts() ) : ?>
            <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                <div class="event-post-item">
                    <a href="<?php the_permalink(); ?>" class="event-post-title">
                        <?php the_title(); ?>
                    </a>
                    <div class="event-post-excerpt">
                        <?php the_excerpt(); ?>
                    </div>
                </div>
            <?php endwhile; wp_reset_postdata(); ?>
        <?php endif; ?>
    </div>

    <?php wp_reset_postdata(); ?>
<?php endif; ?>