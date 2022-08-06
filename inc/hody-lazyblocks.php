<?php
/**
 * Register Bootsrap Block
 */

lazyblocks()->add_block( array(
    'title' => 'Bootstrap Alert',
    'icon' => 'dashicons dashicons-warning',
    'keywords' => array(
        0 => 'bootstrap',
        1 => 'alert',
    ),
    'slug' => 'lazyblock/bootstrap-alert',
    'description' => 'Implementation of Bootstrap Alert using Gutenberg and Lazy Blocks plugin',
    'category' => 'widgets',
    'category_label' => 'widgets',
    'supports' => array(
        'customClassName' => true,
        'anchor' => false,
        'align' => array(
            0 => 'wide',
            1 => 'full',
        ),
        'html' => false,
        'multiple' => true,
        'inserter' => true,
    ),
    'controls' => array(
        'control_d5c81445c4' => array(
            'sort' => '1',
            'child_of' => '',
            'label' => 'Content',
            'name' => 'content',
            'type' => 'textarea',
            'default' => 'Aww yeah, you successfully read this important alert message.',
            'checked' => 'false',
            'placement' => 'inspector',
            'save_in_meta' => 'false',
            'save_in_meta_name' => '',
        ),
        'control_be08f4493c' => array(
            'sort' => '2',
            'child_of' => '',
            'label' => 'Type',
            'name' => 'type',
            'type' => 'select',
            'choices' => array(
                array(
                    'value' => 'primary',
                    'label' => 'Primary',
                ),
                array(
                    'value' => 'secondary',
                    'label' => 'Secondary',
                ),
                array(
                    'value' => 'success',
                    'label' => 'Success',
                ),
                array(
                    'value' => 'danger',
                    'label' => 'Danger',
                ),
                array(
                    'value' => 'warning',
                    'label' => 'Warning',
                ),
                array(
                    'value' => 'info',
                    'label' => 'Info',
                ),
                array(
                    'value' => 'light',
                    'label' => 'Light',
                ),
                array(
                    'value' => 'dark',
                    'label' => 'Dark',
                ),
            ),
            'default' => 'info',
            'checked' => 'false',
            'placement' => 'inspector',
            'save_in_meta' => 'false',
            'save_in_meta_name' => '',
        ),
        'control_24e87b4ce2' => array(
            'sort' => '3',
            'child_of' => '',
            'label' => 'Dismissible',
            'name' => 'dismissible',
            'type' => 'checkbox',
            'default' => '',
            'checked' => 'false',
            'placement' => 'inspector',
            'save_in_meta' => 'false',
            'save_in_meta_name' => '',
        ),
    ),
    'code' => array(
        'editor_html' => '{{{content}}}',
        'editor_css' => '',
        'frontend_html' => '
            <div class="alert alert-{{type}} {{#if dismissible}}alert-dismissible fade show{{/if}}" role="alert">
                {{{content}}}
                {{#if dismissible}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                {{/if}}
            </div>
        ',
        'frontend_css' => '',
    ),
    'condition' => array(
    ),
) );


// create examples block
if ( function_exists( 'lazyblocks' ) ) :

    lazyblocks()->add_block( array(
        'id' => 207,
        'title' => 'Example Block',
        'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><rect opacity="0.25" width="15" height="15" rx="4" transform="matrix(-1 0 0 1 22 7)" fill="currentColor" /><rect width="15" height="15" rx="4" transform="matrix(-1 0 0 1 17 2)" fill="currentColor" /></svg>',
        'keywords' => array(
            0 => 'example',
            1 => 'sample',
            2 => 'template',
        ),
        'slug' => 'lazyblock/example-block',
        'description' => 'Example block that helps you to get started with Lazy Blocks plugin',
        'category' => 'common',
        'category_label' => 'common',
        'supports' => array(
            'customClassName' => true,
            'anchor' => false,
            'align' => array(
                0 => 'wide',
                1 => 'full',
            ),
            'html' => false,
            'multiple' => true,
            'inserter' => true,
        ),
        'ghostkit' => array(
            'supports' => array(
                'spacings' => false,
                'display' => false,
                'scrollReveal' => false,
                'frame' => false,
                'customCSS' => false,
            ),
        ),
        'controls' => array(
            'control_005ad74de2' => array(
                'type' => 'image',
                'name' => 'image',
                'default' => '',
                'label' => 'Image',
                'help' => '',
                'child_of' => '',
                'placement' => 'inspector',
                'width' => '100',
                'hide_if_not_selected' => 'false',
                'save_in_meta' => 'false',
                'save_in_meta_name' => '',
                'required' => 'false',
                'preview_size' => 'medium',
                'placeholder' => '',
                'characters_limit' => '',
            ),
            'control_1729664f06' => array(
                'type' => 'text',
                'name' => 'button-label',
                'default' => '',
                'label' => 'Button Label',
                'help' => '',
                'child_of' => '',
                'placement' => 'inspector',
                'width' => '100',
                'hide_if_not_selected' => 'false',
                'save_in_meta' => 'false',
                'save_in_meta_name' => '',
                'required' => 'false',
                'placeholder' => '',
                'characters_limit' => '',
            ),
            'control_8b591545a2' => array(
                'type' => 'url',
                'name' => 'button-url',
                'default' => '',
                'label' => 'Button URL',
                'help' => '',
                'child_of' => '',
                'placement' => 'inspector',
                'width' => '100',
                'hide_if_not_selected' => 'false',
                'save_in_meta' => 'false',
                'save_in_meta_name' => '',
                'required' => 'false',
                'placeholder' => '',
                'characters_limit' => '',
            ),
        ),
        'code' => array(
            'output_method' => 'php',
            'editor_html' => '',
            'editor_callback' => '',
            'editor_css' => '',
            'frontend_html' => '<?php if ( isset( $attributes[\'image\'][\'url\'] ) ) : ?>
            <p>
                    <img src="<?php echo esc_url( $attributes[\'image\'][\'url\'] ); ?>" alt="<?php echo esc_attr( $attributes[\'image\'][\'alt\'] ); ?>">
            </p>
    
            <?php if ( isset( $attributes[\'button-label\'] ) ) : ?>
                    <p>
                            <a href="<?php echo esc_url( $attributes[\'button-url\'] ); ?>" class="button button-primary">
                                    <?php echo esc_html( $attributes[\'button-label\'] ); ?>
                            </a>
                    </p>
            <?php endif; ?>
    <?php else: ?>
            <p>Image is required to show this block content.</p>
    <?php endif; ?>',
            'frontend_callback' => '',
            'frontend_css' => '',
            'show_preview' => 'always',
            'single_output' => true,
        ),
        'condition' => array(
        ),
    ) );
    
endif;