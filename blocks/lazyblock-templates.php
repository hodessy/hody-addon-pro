<?php
/**
 * File to list all hody addon custom clocks powered by LAZY Blocks plugin
 */

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
<?php
/**
 * Team Block Template
 * @var  array  $attributes Block attributes.
 * @var  array  $block Block data.
 * @var  string $context Preview context [editor,frontend].
 * 
 */
/*
 
<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-350f2f3 animated zoomIn" data-id="350f2f3" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;zoomIn&quot;}">
<div class="elementor-widget-wrap elementor-element-populated">
div class="elementor-element elementor-element-b8ef43b elementor-widget elementor-widget-elementskit-team" data-id="b8ef43b" data-element_type="widget" data-widget_type="elementskit-team.default">
<div class="elementor-widget-container">
<div class="ekit-wid-con">
<div class="profile-image-card elementor-animation- ekit-team-img ekit-team-style-overlay text-center">

<img src="https://eightheme.com/mins/wp-content/uploads/sites/16/elementor/thumbs/handsome-ophthalmologist-holding-eyeglasses-for-a-try-out--pn6izegx9pnxnveanxlw3p01fdloxx4tbvd9rw5uf4.jpg" title="Handsome ophthalmologist holding eyeglasses for a try out." alt="Handsome ophthalmologist holding eyeglasses for a try out.">												<div class="hover-area">
<div class="profile-body">
<h2 class="profile-title">Jane Doe</h2>
<p class="profile-designation">Eye Specialist</p>
</div>
<div class="profile-footer">
<ul class="ekit-team-social-list">
<li class="elementor-repeater-item-647c77f">
<a href="https://facebook.com">
<i aria-hidden="true" class="icon icon-facebook"></i>			</a>
</li>
<li class="elementor-repeater-item-8889c6a">
<a href="https://facebook.com">
<i aria-hidden="true" class="icon icon-twitter"></i>			</a>
</li>
<li class="elementor-repeater-item-27b4839">
<a href="https://facebook.com">
<i aria-hidden="true" class="icon icon-pinterest"></i>			</a>
</li>
</ul>
</div>
</div>
</div>
					
				
</div>		</div>
</div>
<div class="elementor-element elementor-element-2f32e0f ekit-equal-height-disable elementor-widget elementor-widget-elementskit-icon-box" data-id="2f32e0f" data-element_type="widget" data-widget_type="elementskit-icon-box.default">
<div class="elementor-widget-container">
<div class="ekit-wid-con">        <!-- link opening -->
<!-- end link opening -->

<div class="elementskit-infobox text-center text-center icon-top-align elementor-animation-   ">
<div class="elementskit-box-header elementor-animation-">
<div class="elementskit-info-box-icon  ">
 <i aria-hidden="true" class="elementkit-infobox-icon icon icon-calendar2"></i>
</div>
</div>
<div class="box-body">
<h3 class="elementskit-info-box-title">Doctor Schedule</h3>
<p>Sunday - Monday 08 : 00 AM - 10 : 00 PM</p>
<div class="box-footer disable_hover_button">
<div class="btn-wraper">
<a href="#" target="_self" rel="" class="elementskit-btn whitespace--normal elementor-animation-">Consultation</a>
</div>
</div>
</div>
       
</div>
 </div>		</div>
</div>
</div>
</div>
        */