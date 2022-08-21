<?php
/**
 * File to list all hody addon custom clocks powered by LAZY Blocks plugin
 */

/**
 * Accordion Block
 *
 * @var  array  block_field Block attributes.
 * @var  array  $block Block data.
 * @var  string $context Preview context (editor,frontend).
 */
//Variables
$accordionStyle =  block_value ('hody-accordion-style') ;
$accordionSize = block_value('hody-accordion-size');
$accordionBackground = block_value('hody-accordion-background');
$accordionTitleFontSize = block_value('hody-accordion-title-font-size');
$accordionContentFontSize = block_value('hody-accordion-content-font-size');
$accordionBackgroundActive = block_value('hody-accordion-background-active');
$accordionTitleTextColor = block_value('hody-accordion-title-text-color');
$accordionContentBackground = block_value('hody-accordion-content-background-color');
$accordionContentTextColor = block_value('hody-accordion-content-text-color');
?>
<style>

.accordion-label {
 font-size: <?php echo $accordionTitleFontSize ?>; /* Custom Label Size */
 color: <?php echo $accordionTitleTextColor ?>;
 padding: <?php block_field('hody-accordion-size') ?>rem; /* Label Padding */
 background: <?php echo $accordionBackground ?>;
}

.accordion-content {
 color: <?php echo $accordionContentTextColor ?>;
 background: <?php echo $accordionContentBackground ?>;
}

input:checked + .accordion-label {
 background: <?php echo $accordionBackgroundActive ?>;
}


.accordion-close {

 background: #b61818;

}
    </style>
<?php 
if ( block_rows( 'hody-accordion-item' ) ):
    echo '<div class="accordia ' . $accordionStyle . '">';
    while ( block_rows( 'hody-accordion-item' ) ) :
        block_row( 'hody-accordion-item' );
        echo '<div class="accordion">';
        $str = block_sub_value('hody-accordion-title');  
        $srt = str_ireplace ('', '', $str);
        echo '<input type="radio" id="item-'. $str .'" name="radio">';
        echo '<label class="accordion-label" for="item-' .$str. '">'. block_sub_value('hody-accordion-title') . '</label>';
        echo '<div class="accordion-content">';
        echo '<p>' . block_sub_value('hody-accordion-content') . '</p>';
        echo '</div>';
        echo '</div>';
    endwhile;

    echo '</div>';
endif;

reset_block_rows( 'hody-accordion-item' );
/*
<?php if ( block_rows('hody-accordion-item') ): ?>
<div class="accordia <?php echo $accordionStyle ?>">

<?php 
    while ( block_rows('hody-accordion-item') ): 
        block_rows('hody-accordion-item');
    ?>
    <div class="accordion">
    <?php 
    $str = block_rows('hody-accordion-title');  
    $srt = str_ireplace ('', '', $str);
    ?>
       <input type="radio" id="item-<?php echo $str ?>" name="radio">
       <label class="accordion-label" for="item-<?php echo $str ?>"><?php echo block_sub_field('hody-accordion-title'); ?></label>
       
       <div class="accordion-content">
       <p><?php echo block_sub_field('hody-accordion-content'); ?></p>
       </div>
    </div>
       <?php endwhile; ?>
</div>
<?php endif; 
reset_block_rows( 'hody-accordion-item' );
?>
*/
