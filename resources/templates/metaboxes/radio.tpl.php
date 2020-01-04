<?php
  $value = get_post_meta(get_the_ID(), $field_data['slug'], true);
?>

<p class="meta-options jb-field-text">
    <label class="field-title" for="<?= $field_data['slug']; ?>"><?= $field_data['name'] ?><?= ($field_data['required']) ? ' <small class="req">必須</small>' : '' ?></label>
    <?php foreach($field_data['options'] as $key => $option): ?>
      <label class="radio">
        <input 
          id="<?= $field_data['slug'] . '-' . $key; ?>" 
          type="radio" 
          name="<?= 'jbf[' . $field_data['slug'] . ']'; ?>" 
          value="<?= $option['value']; ?>" <?php if($value == $option['value']) echo 'checked'; ?>/>
          <?= $option['name']; ?>
      </label>
    <?php endforeach; ?>
</p>