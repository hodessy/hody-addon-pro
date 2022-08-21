<?php   
/**
 * Team Block Template
 * @var  array  $attributes Block attributes.
 * @var  array  $block Block data.
 * @var  string $context Preview context [editor,frontend].
 * 
 */
$teamName =  $attributes['team-member-name'] ;
$teamSpecialty = $attributes['team-member-specialty'];
$teamInnerBlock= $attributes['team-additional-info'];
//$teamProfileImage = $attributes['team-member-image']['url'];
$teamProfileFacebook = $attributes['team-facebook']; 
$teamProfileTwitter = $attributes['team-twitter'];
$teamProfileLinkedIn = $attributes['team-linkedin'];
$teamProfileIconColor = $attributes['team-icon-color'];
$teamShowHideIconLabel = $attributes['show-team-icon-label'];
$teamSocialIconSize = $attributes['team-social-icon-size'];
$teamBorderRadius = $attributes['team-border-radius'];
?>
<style>
    .hody-addon-social-link {
        color:<?php echo $teamProfileIconColor ?>;
    }
    <?php if ($teamShowHideIconLabel) : else:  ?>
        .<?php echo $attributes['blockUniqueClass']?> .hody-team-social-icons .hody-addon-social-link span:not(.screen-reader-text) {
        display: none;
    }
     <?php endif;?>

.<?php echo $attributes['blockUniqueClass']?> .hody-team-profile-image-card:before {
    background-color: <?php echo $attributes['team-hover-bg-color']?>8a;
}

</style>
<div style="border-radius: <?php echo $teamBorderRadius;?>;" class="hoddy-addon-team-block <?php echo $attributes['blockUniqueClass']?>">
<div class="hody-team-content hody-team-profile-image-card">
    <?php if(isset($attributes['team-member-image']['url'])): ?>
<img class="hody-addon-team-image" src="<?php echo esc_url($attributes['team-member-image']['url']);?>" title="" alt="<?php echo esc_attr($attributes['team-member-image']['alt'])?>">
<?php endif;?>
<div style="color: <?php echo $attributes['team-hover-content-color']; ?>" class="hody-team-content-hover-body animate">
<h3 style="margin-block-start:0;margin-block-end: 0;" class="hody-addon-team-profileName"><?php echo $teamName ?></h3>
<p style="margin-block-start:0;margin-block-end: 0;;" class="hody-addon-team-profilePosition"><?php echo $teamSpecialty ?></p>
<ul class="hody-team-social-icons" style="font-size:<?php echo $teamSocialIconSize ?>;">
<?php if ( !empty ( $teamProfileFacebook )) {  ?> 
<li style=" color:<?php echo $teamProfileIconColor ?>;" class="hody-addon-social-link wp-block-social-link">
    <a href="<?php echo $teamProfileFacebook ; ?>" class="hody-icon hody-addon-svg" target="_blank">
    <svg style="fill: currentColor;" width="24" height="24" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false"><path d="M12 2C6.5 2 2 6.5 2 12c0 5 3.7 9.1 8.4 9.9v-7H7.9V12h2.5V9.8c0-2.5 1.5-3.9 3.8-3.9 1.1 0 2.2.2 2.2.2v2.5h-1.3c-1.2 0-1.6.8-1.6 1.6V12h2.8l-.4 2.9h-2.3v7C18.3 21.1 22 17 22 12c0-5.5-4.5-10-10-10z"></path></svg>
    <span class="team-social-link-label wp-block-social-link-label">Facebook</span></a></li>
<?php } ?>
 <?php if ( !empty ( $teamProfileTwitter )) {  ?>
<li style=" color:<?php echo $teamProfileIconColor ?>;" class="hody-addon-social-link wp-block-social-link">
     <a  href="<?php echo $teamProfileTwitter ; ?>" class="hody-icon hody-addon-svg" target="_blank">
     <svg style="fill: currentColor;" width="24" height="24" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false"><path d="M22.23,5.924c-0.736,0.326-1.527,0.547-2.357,0.646c0.847-0.508,1.498-1.312,1.804-2.27 c-0.793,0.47-1.671,0.812-2.606,0.996C18.324,4.498,17.257,4,16.077,4c-2.266,0-4.103,1.837-4.103,4.103 c0,0.322,0.036,0.635,0.106,0.935C8.67,8.867,5.647,7.234,3.623,4.751C3.27,5.357,3.067,6.062,3.067,6.814 c0,1.424,0.724,2.679,1.825,3.415c-0.673-0.021-1.305-0.206-1.859-0.513c0,0.017,0,0.034,0,0.052c0,1.988,1.414,3.647,3.292,4.023 c-0.344,0.094-0.707,0.144-1.081,0.144c-0.264,0-0.521-0.026-0.772-0.074c0.522,1.63,2.038,2.816,3.833,2.85 c-1.404,1.1-3.174,1.756-5.096,1.756c-0.331,0-0.658-0.019-0.979-0.057c1.816,1.164,3.973,1.843,6.29,1.843 c7.547,0,11.675-6.252,11.675-11.675c0-0.178-0.004-0.355-0.012-0.531C20.985,7.47,21.68,6.747,22.23,5.924z"></path></svg>
     <span class="team-social-link-label wp-block-social-link-label">Twitter</span></a></li> 
 <?php } ?>
 <?php if ( !empty ( $teamProfileLinkedIn )) {  ?>
<li style=" color:<?php echo $teamProfileIconColor ?>;" class="hody-addon-social-link wp-block-social-link">
     <a  href="<?php echo $teamProfileLinkedIn ; ?>" class="hody-icon hody-addon-svg" target="_blank">
     <svg style="fill: currentColor;" width="24" height="24" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false"><path d="M19.7,3H4.3C3.582,3,3,3.582,3,4.3v15.4C3,20.418,3.582,21,4.3,21h15.4c0.718,0,1.3-0.582,1.3-1.3V4.3 C21,3.582,20.418,3,19.7,3z M8.339,18.338H5.667v-8.59h2.672V18.338z M7.004,8.574c-0.857,0-1.549-0.694-1.549-1.548 c0-0.855,0.691-1.548,1.549-1.548c0.854,0,1.547,0.694,1.547,1.548C8.551,7.881,7.858,8.574,7.004,8.574z M18.339,18.338h-2.669 v-4.177c0-0.996-0.017-2.278-1.387-2.278c-1.389,0-1.601,1.086-1.601,2.206v4.249h-2.667v-8.59h2.559v1.174h0.037 c0.356-0.675,1.227-1.387,2.526-1.387c2.703,0,3.203,1.779,3.203,4.092V18.338z"></path></svg>
     <span class="team-social-link-label wp-block-social-link-label">LinkedIn</span></a></li> 
<?php } ?>
 </ul> 
 </div>
</div>

<div class="hody-team-inner-content">
    <div class="hody-team-inner-content-inner">
<?php echo $teamInnerBlock ?></div>
</div>
 </div>


 <?php
/*

<div class="hody-team-profile">
<div class="profile-image-card elementor-animation- ekit-team-img ekit-team-style-overlay text-center">

<img src="https://eightheme.com/mins/wp-content/uploads/sites/16/elementor/thumbs/handsome-ophthalmologist-holding-eyeglasses-for-a-try-out--pn6izegx9pnxnveanxlw3p01fdloxx4tbvd9rw5uf4.jpg" title="Handsome ophthalmologist holding eyeglasses for a try out." alt="Handsome ophthalmologist holding eyeglasses for a try out.">
<div class="hover-area">
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
 </div>	


*/