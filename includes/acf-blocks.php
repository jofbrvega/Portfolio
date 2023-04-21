<?php
add_action('acf/init', 'my_acf_blocks_init');
function my_acf_blocks_init()
{

    // Check function exists.
    if (function_exists('acf_register_block_type')) {

        // Projects - Block
        acf_register_block_type(
            array(
                'name'              => 'Projects',
                'title'             => __('Projects'),
                'description'       => __('Projects block'),
                'render_template'   => 'template-parts/blocks/projects.php',
                'render_callback' => 'block_render',
                'category'          => 'formatting',
                'icon'              => 'admin-comments',
                'mode'                 => 'edit',
                'keywords'          => array('projects'),
            )
        );

        // Projects - Single block.
        acf_register_block_type(
            array(
                'name'              => 'Single Project',
                'title'             => __('Single Project'),
                'description'       => __('Single Project block'),
                'render_template'   => 'template-parts/blocks/single-projects.php',
                'render_callback' => 'block_render',
                'category'          => 'formatting',
                'icon'              => 'admin-comments',
                'mode'                 => 'edit',
                'keywords'          => array('single-projects'),
            )
        );

        // About - block.
        acf_register_block_type(
            array(
                'name'              => 'About',
                'title'             => __('About'),
                'description'       => __('About block'),
                'render_template'   => 'template-parts/blocks/about.php',
                'render_callback' => 'block_render',
                'category'          => 'formatting',
                'icon'              => 'admin-comments',
                'mode'                 => 'edit',
                'keywords'          => array('about'),
            )
        );
    }
};
?> 