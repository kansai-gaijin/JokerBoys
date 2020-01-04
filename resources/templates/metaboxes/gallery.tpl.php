<div class="meta-options jb-field-gallery">
    <label for="<?= $field_data['slug'] ?>"><?= $field_data['name'] ?></label>
    <ul class="jb_gallery_list">
<?php
    $hidden = array();
    if( $images = get_posts( array(
        'post_type' => 'attachment',
        'orderby' => 'post__in',
        'order' => 'ASC',
        'post__in' => explode(',',$value),
        'numberposts' => -1,
        'post_mime_type' => 'image'
    ) ) ):
        foreach( $images as $image ):
            $hidden[] = $image->ID;
            $image_src = wp_get_attachment_image_src( $image->ID, array( 80, 80 ) );
?>
                    <li data-id="<?= $image->ID; ?>'">
                        <span style="background-image:url('<?= $image_src[0]; ?>')"></span>
                        <a href="#" class="misha_gallery_remove">×</a>
                    </li>
        <?php endforeach; ?>
<?php endif; ?>
    </ul>
    <a href="#" class="button jb_upload_gallery_button">+</a>
</div>
<input id="<?= $field_data['slug']; ?>" type="hidden" name="<?= $field_data['slug']; ?>" value="<?= join(',',$hidden); ?>" />