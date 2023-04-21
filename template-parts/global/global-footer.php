<?php
$footer_title = get_field('footer_title', 'options');
$footer_link = get_field('footer_link', 'options');
?>
<section class="m-10">
    <div class="flex gap-32 m-4">
        <h2 class="text-7xl"> <?= $footer_title; ?></h2>
        <div class="w-full border-t-2">
            <ul class="flex gap-20">
                <?php
                if (have_rows('footer_link', 'options')) :
                    while (have_rows('footer_link', 'options')) : the_row();
                        $footer_link_links = get_sub_field('footer_link_links', 'options');
                        if ($footer_link_links) :
                            $footer_link_links_url    = $footer_link_links['url'];
                            $footer_link_links_title  = $footer_link_links['title'];
                            $footer_link_links_target = $footer_link_links['target'] ? $footer_link_links['target'] : '_self';
                        endif;
                ?>
                        <li>
                                <a href="<?php echo esc_url($footer_link_links_url); ?>" target="_blank" <?php echo esc_attr($footer_link_links_target); ?>" class="pt-4 text-2xl font-fontin-regular hover:opacity-80">
                                    <?php echo esc_html($footer_link_links_title); ?>
                                </a>
                        </li>
                <?php endwhile;
                endif; ?>
            </ul>
        </div>
    </div>
</section>