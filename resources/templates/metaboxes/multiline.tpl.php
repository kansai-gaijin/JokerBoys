<?php
  $value = get_post_meta(get_the_ID(), $field_data['slug'], true);
?>

<p class="meta-options jb-field-text">
    <label class="field-title" for="<?= $field_data['slug']; ?>"><?= $field_data['name'] ?><?= ($field_data['required']) ? ' <small class="req">必須</small>' : '' ?></label>
    <textarea id="<?= $field_data['slug']; ?>" name="<?= 'jbf[' . $field_data['slug'] . ']'; ?>" placeholder="<?= $field_data['placeholder']; ?>" <?= ($field_data['required']) ? 'required' : '' ?>><?= $value; ?></textarea>
</p>