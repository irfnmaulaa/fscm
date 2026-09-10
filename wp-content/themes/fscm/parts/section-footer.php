<?php
/*
 Template Name: FSCM Footer
 Template Post Type: part
*/
?> 
<?php if($part_id = is_part_visible('fscm-footer')): ?>
    <?php $footer = get_field('footer', $part_id) ?>
    <?php get_template_part('parts/templates/template', 'footer', ['footer' => $footer]) ?>
<?php endif; ?> 