<?php get_header(); ?>





<?php $category = get_the_category($attachment->ID); ?>

<?php if(''.$category[0]->slug === 'wave') : ?>
    <h1>Wave Series</h1>

<?php elseif(''.$category[0]->slug === 'heart') : ?>
    <h1>Heart Collection</h1>

<?php elseif(''.$category[0]->slug === 'maine') : ?>
    <h1>Maine Charms</h1>

<?php endif;?>


<div class="container">
<div class="row">
    <div class="col-md-6">

    <p>Living in a coastal town in Maine, Michele drew her inspiration from the rhythm of the ocean to create her wave hoop earrings. Using the forging technique Michele has the opportunity to form the metal in a variety of shapes and thicknesses creating a fluid, tailored classic style. Each pair of earrings is created simultaneously and will be slightly unique in character. </p>
    
    </div>

    <div class="col-md-6">
            <?php $image_size = apply_filters( 'wporg_attachment_size', 'medium' ); 
                    echo wp_get_attachment_image( get_the_ID(), $image_size ); ?>
                    <?php if ( has_excerpt() ) : ?>
            
            <div class="entry-caption">
                    <?php the_excerpt(); ?>
            </div><!-- .entry-caption -->
        <?php endif; ?>

    </div>

</div>

</div>




<?php
$images = get_posts( array('post_type' => 'attachment', 'category__in' => array(10))  );
if ( !empty($images) ) {
    foreach ( $images as $image ) {
        echo wp_get_attachment_image($image->ID).'<br />';
        echo $image->post_title .'<br />';
        //the_attachment_link( $image->ID, true );
    }
}
?>





<?php get_footer(); ?>