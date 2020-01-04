<?php
  $value = get_post_meta(get_the_ID(), $field_data['slug'], true);
?>

<p class="meta-options jb-field-text">
    <label class="field-title" for="<?= $field_data['slug']; ?>"><?= $field_data['name'] ?><?= ($field_data['required']) ? ' <small class="req">必須</small>' : '' ?></label>
    <select id="<?= $field_data['slug']; ?>" name="<?= 'jbf[' . $field_data['slug'] . ']'; ?>" <?= ($field_data['required']) ? 'required' : '' ?>>
      <?php foreach($field_data['options'] as $key => $option): ?>
        <option value="<?= $option['value']; ?>" <?php if($value == $option['value']) echo 'selected'; ?>>
          <?= $option['name']; ?>
        </option>
      <?php endforeach; ?>
    </select>
</p>