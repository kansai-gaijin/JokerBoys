<?php
  $value = get_post_meta(get_the_ID(), $field_data['slug'], true);
?>

<p class="meta-options jb-field-text">
    <label for="<?= $field_data['slug']; ?>"><?= $field_data['name'] ?><?= ($field_data['required']) ? ' <small class="req">必須</small>' : '' ?></label>
    <input id="<?= $field_data['slug']; ?>" type="text" name="<?= 'jbf[' . $field_data['slug'] . ']'; ?>" value="<?= $value; ?>" placeholder="<?= $field_data['placeholder']; ?>" <?= ($field_data['required']) ? 'required' : '' ?>  />
</p>