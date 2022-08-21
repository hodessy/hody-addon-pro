<?php

use function Genesis\CustomBlocks\add_block;

function add_hodyaddon_gen_blocks() {
/**
 * Creating Accordion Block
 */
    add_block(
        'accordion', 
        array( 
            'title'    => 'Accordion', 
            'category' => 'text', 
            'icon'     => 'list', 
            'keywords' => array( 'accordion', 'list', 'faq' ), 
            'fields'   => array( 
                'hody-accordion-item' => array(
                    'help'=> '',
                    'min'=> '',
                    'max'=> '',
                    'sub_fields' => array (
                        'hody-accordion-title' => array (
                            'location'=> 'editor',
                            'width'=> '100',
                            'help'=> '',
                            'default'=> '',
                            'placeholder'=> '',
                            'maxlength'=> '',
                            'name'=> 'hody-accordion-title',
                            'label' => 'Title',
                            'control' => 'text',
                            'type' => 'string',
                            'order' => 0,
                            'parent' => 'hody-accordion-item'
                        ),
                        'hody-accordion-content' => array(
                            'location' => 'editor',
                            'width' => '100',
                            'help' => '',
                            'default' => '',
                            'placeholder' => '',
                            'maxlength' => '',
                            'number_rows' => 4,
                            'new_lines' => 'autop',
                            'name' => 'hody-accordion-content',
                            'label' => 'Content',
                            'order' => 1,
                            'control' => 'textarea',
                            'type' => 'string',
                            'parent' => 'hody-accordion-item'
                        )
                    ),
                    'name' => 'hody-accordion-item',
                    'label' => 'Item',
                    'location' => 'editor',
                    'order' => 0,
                    'control' => 'repeater',
                    'type' => 'object'
                ),
                'hody-accordion-size' => array( 
                    'location' => 'inspector',
                    'width' => '100',
                    'help' => '',
                    'min' => 0.1,
                    'max' => 3,
                    'step' => 0.1,
                    'default' => 1,
                    'name' => 'hody-accordion-size',
                    'label' => 'Size',
                    'order' => 1,
                    'control' => 'range',
                    'type' => 'integer'
                ),
                'hody-accordion-title-font-size' => array(
                    'location' => 'inspector',
                    'width' => '50',
                    'help' => '',
                    'default' => '1.25rem',
                    'placeholder' => '1.25rem',
                    'maxlength' => 8,
                    'name' => 'hody-accordion-title-font-size',
                    'label' => 'Title Font Size',
                    'control' => 'text',
                    'type' => 'string',
                    'order' => 2
                ),
                'hody-accordion-content-font-size' => array(
                    'location' => 'inspector',
                    'width' => '50',
                    'help' => '',
                    'default' => '1rem',
                    'placeholder' => '1rem',
                    'maxlength' => 8,
                    'name' => 'hody-accordion-content-font-size',
                    'label' => 'Content Font Size',
                    'control' => 'text',
                    'type' => 'string',
                    'order' => 3
                ),
                'hody-accordion-title-text-color' => array (
                    'location' => 'inspector',
                    'width' => '100',
                    'help' => '',
                    'default' => '#222222',
                    'name' => 'hody-accordion-title-text-color',
                    'label' => 'Title Color',
                    'order' => 4,
                    'control' => 'color',
                    'type' => 'string'
                ),
                'hody-accordion-content-text-color' => array (
                    'location' => 'inspector',
                    'width' => '100',
                    'help' => '',
                    'default' => '',
                    'name' => 'hody-accordion-content-text-color',
                    'label' => 'Text Color',
                    'order' => 5,
                    'control' => 'color',
                    'type' => 'string'
                ),
                'hody-accordion-background' => array(
                    'location' => 'inspector',
                    'width' => '100',
                    'help' => '',
                    'default' => '#f5f4f4',
                    'name' => 'hody-accordion-background',
                    'label' => 'Background',
                    'order' => 6,
                    'control' => 'color',
                    'type' => 'string'
                ),
                'hody-accordion-background-active' => array( 
                    'location' => 'inspector',
                    'width' => '100',
                    'help' => '',
                    'default' => '#cecece',
                    'name' => 'hody-accordion-background-active',
                    'label' => 'Active Background',
                    'order' => 7,
                    'control' => 'color',
                    'type' => 'string'
                ),
                'hody-accordion-content-background-color' => array (
                    'location' => 'inspector',
                    'width' => '100',
                    'help' => '',
                    'default' => '',
                    'name' => 'hody-accordion-content-background-color',
                    'label' => 'Content Background',
                    'order' => 8,
                    'control' => 'color',
                    'type' => 'string'
                ),
            ), 
        ) 
    );

    /**
     * Creating Video Lighbox popup
     */
    add_block(
        'video-lightbox', 
        array( 
            'title'    => 'Video Lightbox', 
            'category' => 'embed', 
            'icon'     => 'play_circle_outline', 
            'keywords' => array( 'video', 'lightbox' ), 
            'fields'   => array( 
                'hody-vlb-video-source' => array(
                    'location' => 'inspector',
                    'width' => '100',
                    'help' => 'Enter Video Url(e.g Youtube URL)',
                    'default' => '',
                    'placeholder' => 'https://www.youtube.com/watch?v=0zWRjgathjA',
                    'name' => 'hody-vlb-video-source',
                    'label' => 'Video Source',
                    'order' => 0,
                    'control' => 'url',
                    'type' => 'string'
                ),
                'hody-vlb-icon-color' => array(
                    'location' => 'inspector',
                    'width' => '50',
                    'help' => '',
                    'default' => '#ffffff',
                    'name' => 'hody-vlb-icon-color',
                    'label' => 'Icon Color',
                    'order' => 1,
                    'control' => 'color',
                    'type' => 'string'
                ),
                'hody-vlb-icon-box-color' => array(
                    'location' => 'inspector',
                    'width' => '50',
                    'help' => '',
                    'default' => 'var(--wp--preset--color--primary)',
                    'name' => 'hody-vlb-icon-box-color',
                    'label' => 'Icon Box Color',
                    'order' => 2,
                    'control' => 'color',
                    'type' => 'string'
                ),
                'hody-vlb-icon-size' => array(
                    'location' => 'inspector',
                    'width' => '50',
                    'help' => 'Add values in px, %, em or rem',
                    'default' => '',
                    'placeholder' => '',
                    'maxlength' => '',
                    'name' => 'hody-vlb-icon-size',
                    'label' => 'Icon Size',
                    'control' => 'text',
                    'type' => 'string',
                    'order' => 3
                ),
                'hody-vlb-box-size' => array(
                    'location' => 'inspector',
                    'width' => '50',
                    'help' => 'Add values in px, %, em or rem',
                    'default' => '2rem',
                    'placeholder' => '',
                    'maxlength' => '',
                    'name' => 'hody-vlb-box-size',
                    'label' => 'Box Size',
                    'control' => 'text',
                    'type' => 'string',
                    'order' => 4
                ),
                'hody-vlb-icon-box-border-width' => array(
                    'location' => 'inspector',
                    'width' => '50',
                    'help' => 'Add value in px',
                    'default' => '',
                    'placeholder' => '',
                    'maxlength' => '',
                    'name' => 'hody-vlb-icon-box-border-width',
                    'label' => 'Box Border Width',
                    'control' => 'text',
                    'type' => 'string',
                    'order' => 5
                ),
                'hody-vlb-box-border-style' => array(
                    'location' => 'inspector',
                    'width' => '50',
                    'help' => '',
                    'options' => array (
                        [
                            'value' => 'none',
                            'label' => 'None'
                        ],
                        [
                            'value' => 'solid',
                            'label' => 'Solid'
                        ],
                        [
                            'value' => 'dotted',
                            'label' => 'Dotted'
                        ],
                       [ 
                            'value' => 'dashed',
                            'label' => 'Dashed'
                        ],
                        [
                            'value' => 'double',
                            'label' => 'Double'
                        ],
                        [
                            'value' => 'ridge',
                            'label' => 'Ridge'
                        ],
                        [
                            'value' => 'inset',
                            'label' => 'Inset'
                        ],
                        [
                            'value' => 'outset',
                            'label' => 'Outset'
                        ],
                        ),
                    'default' => 'none',
                    'name' => 'hody-vlb-box-border-style',
                    'label' => 'Box Border Style',
                    'order' => 6,
                    'control' => 'select',
                    'type' => 'string'
                ),
                'hody-vlb-box-border-size' => array(
                    'location' => 'inspector',
                    'width' => '50',
                    'help' => '',
                    'min' => 0,
                    'max' => 20,
                    'step' => 1,
                    'default' => 0,
                    'name' => 'hody-vlb-box-border-size',
                    'label' => 'Box Border Size',
                    'order' => 7,
                    'control' => 'range',
                    'type' => 'integer'
                ),
                'hody-vlb-icon-box-radius' => array(
                    'location' => 'inspector',
                    'width' => '50',
                    'help' => '',
                    'min' => 0,
                    'max' => 50,
                    'step' => 1,
                    'default' => 50,
                    'name' => 'hody-vlb-icon-box-radius',
                    'label' => 'Box Radius',
                    'order' => 8,
                    'control' => 'range',
                    'type' => 'integer'
                ),
                'hody-vlb-box-border-color' => array(
                    'location' => 'inspector',
                    'width' => '50',
                    'help' => '',
                    'default' => '',
                    'name' => 'hody-vlb-box-border-color',
                    'label' => 'Icon Color',
                    'order' => 9,
                    'control' => 'color',
                    'type' => 'string'
                ),
            ), 
        ) 
    );
    /**
     * Add teammate Block
     * 
     */
    add_block(
        'teammate', 
        array( 
            'title'    => 'Teammate', 
            'category' => 'design', 
            'icon'     => 'account_circle', 
            'keywords' => array( 'teammate', 'person', 'user' ), 
            'fields'   => array(  
                'team-member-name' => array (
                    'location' => 'editor',
                    'width' => '50',
                    'help' => '',
                    'default' => '',
                    'placeholder' => '',
                    'maxlength' => '',
                    'name' => 'team-member-name',
                    'label' => 'Name',
                    'control' => 'text',
                    'type' => 'string',
                    'order' => 0
                ),
                'team-member-specialty' => array (
                    'location' => 'editor',
                    'width' => '50',
                    'help' => '',
                    'default' => '',
                    'placeholder' => '',
                    'maxlength' => '',
                    'name' => 'team-member-specialty',
                    'label' => 'Specialty/Position',
                    'control' => 'text',
                    'type' => 'string',
                    'order' => 1
                ),
                'team-facebook' => array (
                    'location' => 'editor',
                    'width' => '50',
                    'help' => '',
                    'default' => '',
                    'placeholder' => '',
                    'name' => 'team-facebook',
                    'label' => 'Facebook',
                    'order' => 2,
                    'control' => 'url',
                    'type' => 'string'
                ),
                'team-twitter' => array (
                    'location' => 'editor',
                    'width' => '50',
                    'help' => '',
                    'default' => '',
                    'placeholder' => '',
                    'name' => 'team-twitter',
                    'label' => 'Twitter',
                    'order' => 3,
                    'control' => 'url',
                    'type' => 'string'
                ),
                'team-linkedin' => array (
                    'location' => 'editor',
                    'width' => '100',
                    'help' => '',
                    'default' => '',
                    'placeholder' => '',
                    'name' => 'team-linkedin',
                    'label' => 'LinkedIn',
                    'order' => 4,
                    'control' => 'url',
                    'type' => 'string'
                ),
                'team-member-image' => array (
                    'location' => 'editor',
                    'width' => '100',
                    'help' => '',
                    'name' => 'team-member-image',
                    'label' => 'Image',
                    'order' => 5,
                    'control' => 'image',
                    'type' => 'integer'
                ),
                /*'team-additional-info' => array (
                    'help' => '',
                    'name' => 'team-additional-info',
                    'label' => 'Details',
                    'location' => 'editor',
                    'order' => 6,
                    'control' => 'inner_blocks',
                    'type' => 'string'
                ),*/
                'teammate-block-style-m' => array (
                    'location' => 'inspector',
                    'width' => '100',
                    'help' => '',
                    'options' => array (
                        [
                            'value' => 'default',
                            'label' => 'Default'
                        ],
                        [
                            'value' => 'modern',
                            'label' => 'Modern'
                        ]
                    ),
                    'default' => 'default',
                    'name' => 'teammate-block-style-m',
                    'label' => 'Teamate Block Style',
                    'order' => 6,
                    'control' => 'select',
                    'type' => 'string'
                ),
                'team-icon-color' => array (
                    'location' => 'inspector',
                    'width' => '100',
                    'help' => '',
                    'default' => 'inherit',
                    'name' => 'team-icon-color',
                    'label' => 'Icon Color',
                    'order' => 7,
                    'control' => 'color',
                    'type' => 'string'
                ),
                'show-team-icon-label' => array (
                    'location' => 'inspector',
                    'width' => '100',
                    'help' => 'Show/Hide Label',
                    'default' => false,
                    'name' => 'show-team-icon-label',
                    'label' => 'Show Icon Label',
                    'order' => 8,
                    'control' => 'toggle',
                    'type' => 'boolean'
                ),
                'social-icon-orientation' => array (
                    'location' => 'inspector',
                    'width' => '100',
                    'help' => '',
                    'options' => array (
                        [
                            'value' => 'flex',
                            'label' => 'Horizontal'
                        ],
                        [
                            'value' => 'block',
                            'label' => 'Vertical'
                        ]
                    ),
                    'default' => 'flex',
                    'name' => 'social-icon-orientation',
                    'label' => 'Social Icon Orientation',
                    'order' => 9,
                    'control' => 'select',
                    'type' => 'string'
                ),
                'team-hover-bg-color' => array (
                    'location' => 'inspector',
                    'width' => '100',
                    'help' => '',
                    'default' => '#000000',
                    'name' => 'team-hover-bg-color',
                    'label' => 'Hover BG',
                    'order' => 10,
                    'control' => 'color',
                    'type' => 'string'
                ),
                'team-hover-content-color' => array (
                    'location' => 'inspector',
                    'width' => '100',
                    'help' => '',
                    'default' => '#ffffff',
                    'name' => 'team-hover-content-color',
                    'label' => 'Overlay Text Color',
                    'order' => 10,
                    'control' => 'color',
                    'type' => 'string'
                ),
                'team-border-radius' => array (
                    'location' => 'inspector',
                    'width' => '100',
                    'help' => '',
                    'default' => '',
                    'placeholder' => '',
                    'maxlength' => '',
                    'name' => 'team-border-radius',
                    'label' => 'Border Radius',
                    'control' => 'text',
                    'type' => 'string',
                    'order' => 11
                ),
                'team-social-icon-size' => array (
                    'location' => 'inspector',
                    'width' => '100',
                    'help' => '',
                    'default' => '',
                    'placeholder' => '',
                    'maxlength' => '',
                    'name' => 'team-social-icon-size',
                    'label' => 'Icon Size',
                    'control' => 'text',
                    'type' => 'string',
                    'order' => 12
                ),
            ),
            'displayModal' => true, 
        ) 
    );
    /**
     * Next Block
     */
}


add_action( 'genesis_custom_blocks_add_blocks', 'add_hodyaddon_gen_blocks' );