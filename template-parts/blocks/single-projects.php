<?php
$single_project_image = get_field('single_project_image');
$single_project_heading = get_field('single_project_heading');
$single_project_tools = get_field('single_project_tools');
$single_project_summary = get_field('single_project_summary');
$single_project_link = get_sub_field('project_link');
if ($single_project_link) :
    $single_project_link_url = $single_project_link['url'];
    $single_project_link_title = $single_project_link['title'];
    $single_project_link_target = $single_project_link['target'] ? $single_project_link['target'] : '_self';
endif;
?>

<section>
    <div class="grid grid-cols-2">
        <?php if ($single_project_image) : ?>
            <div>
                <img src="<?= esc_url($single_project_image['url']); ?>" alt="<?= esc_attr($single_project_image['alt']); ?>">
            </div>
        <?php endif; ?>
        <div class="flex flex-col justify-center pl-4">
            <div class="text-3xl font-semibold"><?= $single_project_heading; ?></div>
            <div class="flex flex-col pt-4">
                <span class="text-xl font-semibold"> Tekniker & Verktyg </span>
                <span><?= $single_project_tools; ?> </span>
            </div>
            <div class="flex flex-col pt-4">
                <span class="text-xl font-semibold"> Ansvarsområden </span>
                <span> <?= $single_project_summary; ?> </span>
            </div>
        </div>
    </div>
</section>