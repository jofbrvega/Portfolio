<?php
$header_heading_name = get_field('header_heading_name', 'options');
$header_heading_title = get_field('header_heading_title', 'options');
$header_link = get_field('header_link', 'options');
$header_summary = get_field('header_summary', 'options');
?>

<section class="relative lg:m-10 border-2 border-black h-[70vh] bg-white">
    <div class="flex justify-between m-4">
        <div class="flex flex-col">
            <a href="/">
                <h1 class="lg:text-7xl"><?= $header_heading_name; ?></h1>
            </a>
            <h2 class="lg:pt-2 lg:text-2xl"><?= $header_heading_title; ?></h2>
        </div>
        <ul class="flex justify-center gap-5 lg:gap-20">
            <?php
            if (have_rows('header_link', 'options')) :
                while (have_rows('header_link', 'options')) : the_row();
                    $header_link_links = get_sub_field('header_link_links', 'options');
                    if ($header_link_links) :
                        $header_link_links_url    = $header_link_links['url'];
                        $header_link_links_title  = $header_link_links['title'];
                        $header_link_links_target = $header_link_links['target'] ? $header_link_links['target'] : '_self';
                    endif;
            ?>
                    <li class="flex flex-col justify-center">
                        <a href="<?php echo esc_url($header_link_links_url); ?>" target="<?php echo esc_attr($header_link_links_target); ?>" class="lg:text-2xl font-fontin-regular hover:opacity-80">
                            <?php echo esc_html($header_link_links_title); ?>
                        </a>
                    </li>
            <?php endwhile;
            endif; ?>
        </ul>
    </div>
    <div class="absolute bottom-0 right-0 m-4 max-w-screen-xs">
        <p class="ml-20 text-sm text-right lg:text-lg lg:mt-0">
            <?= $header_summary; ?>
        </p>
    </div>
</section>