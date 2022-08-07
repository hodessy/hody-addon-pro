<?php
/**
 * Accordion Block
 *
 * @var  array  $attributes Block attributes.
 * @var  array  $block Block data.
 * @var  string $context Preview context [editor,frontend].
 */
//Variables
$accordionStyle =  $attributes['accordion-style'] ;
$accordionSize = $attributes['accordion-size'];
$accordionBackground = $attributes['accordion-background'];
$accordionTitleFontSize = $attributes['accordion-title-font-size'];
$accordionContentFontSize = $attributes['accordion-content-font-size'];
$accordionBackgroundActive = $attributes['accordion-background-active'];
$accordionTitleTextColor = $attributes['accordion-title-text-color'];
$accordionContentBackground = $attributes['accordion-content-background-color'];
//$accordionContentTextColor = $attributes['aaccordion-content-text-color'];
?>
<style>

.accordion-label {
 font-size: <?php echo $accordionTitleFontSize ?>; /* Custom Label Size */

 color: <?php echo $accordionTitleTextColor ?>;

 padding: <?php echo $accordionSize ?>rem; /* Label Padding */
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


<div class="accordia <?php echo $accordionStyle ?>">

<?php foreach( $attributes['accordion-item'] as $inner ): ?>
    <div class="accordion">
    <?php 
    $str = $inner['accordion-title'];  
    $srt = str_ireplace ('', '', $str);
    ?>
       <input type="radio" id="item-<?php echo $str ?>" name="radio">
       <label class="accordion-label" for="item-<?php echo $str ?>"><?php echo $inner['accordion-title']; ?></label>
       
       <div class="accordion-content">
       <p><?php echo $inner['accordion-content']; ?></p>
       </div>
    </div>

<?php endforeach; ?>
</div>
