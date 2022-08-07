<?php
/**
 * Accordion Block
 *
 * @var  array  $attributes Block attributes.
 * @var  array  $block Block data.
 * @var  string $context Preview context [editor,frontend].
 */
/*
$repeater = get_lzb_meta( 'accordion-item' );
$accordion_name = get_lzb_meta( 'accordion-title' );
$accordion_content = get_lzb_meta( 'accordion-content' );

foreach ( $repeater as $inner_control ) {
    ?>
        <p><?php echo $inner_control; ?></p>
    <?php
}
*/
?>

<?php foreach( $attributes['accordion-item'] as $inner ): ?>
    <h3><?php echo $inner['accordion-title']; ?></h3>
    <p><?php echo $inner['accordion-content']; ?></p>
<?php endforeach; ?>