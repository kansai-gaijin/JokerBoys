<div class="hcf_box">
    <style scoped>
        .hcf_box{
            display: grid;
            grid-template-columns: max-content 1fr;
            grid-row-gap: 10px;
            grid-column-gap: 20px;
        }
        .hcf_field{
            display: contents;
        }
    </style>
    <?php
        /**
         * Functions hooked into `theme/custommeta/fields` action.
         *
         * @hooked JokerB\Theme\App\Structure\render_box_meta - 10
         */
        do_action('theme/custommeta/fields', $fields['args']);
    ?>
</div>