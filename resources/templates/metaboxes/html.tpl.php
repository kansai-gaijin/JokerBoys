<?php
  $value = get_post_meta(get_the_ID(), $field_data['slug'], true);
?>

<p class="meta-options jb-field-text">
    <label class="field-title" for="<?= $field_data['slug']; ?>"><?= $field_data['name'] ?><?= ($field_data['required']) ? ' <small class="req">必須</small>' : '' ?></label>
    <?php
      wp_editor(
        $value ,
        $field_data['slug'],
        array( "media_buttons" => true )
      );
    ?>
</p>