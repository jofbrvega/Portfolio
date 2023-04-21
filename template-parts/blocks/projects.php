<?php
$project_heading = get_field('project_heading');
?>
<section id="projects" class="py-10">
    <h2 class="py-4 text-6xl"> <?= $project_heading; ?> </h2>
    <?php
    if (have_rows('project_projects')) :
        while (have_rows('project_projects')) : the_row();
            $project_image = get_sub_field('project_image');
            $project_name = get_sub_field('project_name');
            $project_frameworks = get_sub_field('project_frameworks');
            $project_summary = get_sub_field('project_summary');
            $project_align = get_sub_field('project_align');
            $project_link = get_sub_field('project_link');
            if ($project_link) :
                $project_link_url = $project_link['url'];
                $project_link_title = $project_link['title'];
                $project_link_target = $project_link['target'] ? $project_link['target'] : '_self';
            endif;
    ?>
    
            <?php if ($project_align == 'left_align') : ?> <!-- Connected to a button group in acf  -->
                        <div class="grid grid-cols-2 py-5">
                            <div>
                                <?php if ($project_image) : ?>
                                    <div>
                                        <img src="<?= esc_url($project_image['url']); ?>" alt="<?= esc_attr($project_image['alt']); ?>" class="opacity-90">
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="flex flex-col justify-center pl-8">
                                <div class="py-4 text-6xl"><?= $project_name; ?></div>
                                <div class="flex flex-col pt-4">
                                    <span class="text-lg font-semibold"> Tekniker & Verktyg </span>
                                    <span><?= $project_frameworks; ?> </span>
                                </div>
                                <div class="flex flex-col pt-4">
                                    <span class="text-lg font-semibold"> Ansvarsområden </span>
                                    <p> <?= $project_summary; ?> </p>
                                    <?php if ($project_link) : ?>
                                        <a href="<?php echo esc_url($project_link_url); ?>" target="_blank" <?php echo esc_attr($project_link_target); ?>" class="pt-4 text-2xl hover:underline font-fontin-regular hover:opacity-80">
                                            <?= $project_link_title; ?>
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
            <?php else : ?>
                    <div class="grid grid-cols-2 py-5">
                        <div class="flex flex-col justify-center pr-8 text-right">
                            <div class="py-4 text-6xl"><?= $project_name; ?></div>
                            <div class="flex flex-col pt-4">
                                <span class="text-lg font-semibold"> Tekniker & Verktyg </span>
                                <span><?= $project_frameworks; ?> </span>
                            </div>
                            <div class="flex flex-col pt-4">
                                <span class="text-lg font-semibold"> Ansvarsområden </span>
                                <span> <?= $project_summary; ?> </span>
                                <a href="<?php echo esc_url($project_link_url); ?>" target="_blank" <?php echo esc_attr($project_link_target); ?>" class="pt-4 text-2xl hover:underline font-fontin-regular hover:opacity-80">
                                    Se projektet här
                                </a>
                            </div>
                        </div>
                        <div>
                            <?php if ($project_image) : ?>
                                <div>
                                    <img src="<?= esc_url($project_image['url']); ?>" alt="<?= esc_attr($project_image['alt']); ?>" class="opacity-90">
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endif; ?>
        <?php
        endwhile;
    else :
    endif;
        ?>
</section>