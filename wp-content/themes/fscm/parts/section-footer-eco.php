<?php
/*
 Template Name: ECO Footer
 Template Post Type: part
*/
?> 

<?php if($part_id = is_part_visible('eco-footer')): ?>
    <?php $footer = get_field('footer', $part_id) ?>
    <?php get_template_part('parts/templates/template', 'footer', ['footer' => $footer]) ?>
<?php endif; ?>