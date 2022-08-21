<?php   
/**
 * Video Lightbo/Popup Block Template
 * @var  array  block_value Block attributes.
 * @var  array  $block Block data.
 * @var  string $context Preview context (editor,frontend).
 * 
 */
$vlbVideoSource = block_value('hody-vlb-video-source') ;
$vlbIconColor = block_value('hody-vlb-icon-color');
$vlbIconBoxColor = block_value('hody-vlb-icon-box-color');
$vlbIconSize = block_value('hody-vlb-icon-size');
$vlbIconBoxSize = block_value('hody-vlb-box-size');
$vlbIconBoxRadius = block_value('hody-vlb-icon-box-radius');
$vlbIconBoxBorder_style= block_value('hody-vlb-box-border-style');
$vlbIconBoxBorder_size= block_value('hody-vlb-box-border-size');

?>
<style>
.hody-lsb-video-box span:not(.screen-reader-text){
    display: none;
}
.hody-vlb svg{
    margin-block-end: -7px;
    height: <?php echo $vlbIconSize?>;
    width: <?php echo $vlbIconSize?>;
}
.hody-lsb-video-box {
    padding:<?php echo $vlbIconBoxSize?>;   
    background: <?php echo  $vlbIconBoxColor?>; 
    border-radius: <?php echo $vlbIconBoxRadius?>%; 
    border-style: <?php echo $vlbIconBoxBorder_style?>; 
    border-width: <?php echo $vlbIconBoxBorder_size?>px; 
    border-color: <?php block_field('hody-vlb-box-border-color')?> ;
}
.wp-block-lazyblock-video-lightbox.<?php block_value('blockUniqueClass')?> {
    justify-content: <?php block_value('hody-vlb-content-align'); ?>;
}

</style>

<div class="hody-lsb-video-box">
<a style="color: <?php echo  $vlbIconColor?>;" href="<?php echo $vlbVideoSource ?>" data-fancybox data-type="iframe" data-preload="false" data-width="auto" data-height="auto" 
    class="hody-vlb">
<svg style="fill: currentColor;" width="24" height="24" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><title>play-video</title><path d="M133,440a35.37,35.37,0,0,1-17.5-4.67c-12-6.8-19.46-20-19.46-34.33V111c0-14.37,7.46-27.53,19.46-34.33a35.13,35.13,0,0,1,35.77.45L399.12,225.48a36,36,0,0,1,0,61L151.23,434.88A35.5,35.5,0,0,1,133,440Z"/></svg>
    <span class="vlb-social-link-label wp-block-social-link-label">Play</span>
</a>
</div>

