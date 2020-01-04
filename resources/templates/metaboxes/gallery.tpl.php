<?php
  $value = get_post_meta(get_the_ID(), $field_data['slug'], true);
?>

<div class="meta-options jb-field-gallery">
    <label class="field-title" for="<?= $field_data['slug'] ?>"><?= $field_data['name'] ?></label>
    <div class="jb-gallery-wrapper">
    <ul class="jb-gallery-list">
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
                    <li data-id="<?= $image->ID; ?>">
                        <span style="background-image:url('<?= $image_src[0]; ?>')"></span>
                        <a href="#" class="jb-gallery-remove">×</a>
                    </li>
        <?php endforeach; ?>
<?php endif; ?>
    </ul>
    <a href="#" class="jb-upload-gallery-button">+</a>
    </div>
</div>
<input id="<?= $field_data['slug']; ?>" type="hidden" name="<?= 'jbf[' . $field_data['slug'] . ']'; ?>" value="<?= join(',',$hidden); ?>" />