    <?php
    /**
     * Add an option page for ACF options in the WP-admin
     */
    if (function_exists('acf_add_options_page')) {

        acf_add_options_page(
            array(
                'page_title' => 'Temainställningar',
                'menu_slug'  => 'theme-settings',
                'redirect'   => false,
            )
        );
    }
    ?>