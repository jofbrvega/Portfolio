<?php
$project_heading = get_field('project_heading');
?>
<section id="projects" class="lg:py-10">
    <h2 class="text-3xl font-bold lg:font-normal lg:py-4 lg:text-6xl"> <?= $project_heading; ?> </h2>
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
                <div class="grid py-8 shadow-md lg:grid-cols-2">
                    <div>
                        <?php if ($project_image) : ?>
                            <div>
                                <img src="<?= esc_url($project_image['url']); ?>" alt="<?= esc_attr($project_image['alt']); ?>" class="opacity-90">
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="flex flex-col justify-center p-4 lg:pl-8">
                        <div class="py-4 text-3xl lg:text-6xl"><?= $project_name; ?></div>
                        <div class="flex flex-col pt-4">
                            <span class="font-semibold lg:text-lg"> Tekniker & Verktyg </span>
                            <span><?= $project_frameworks; ?> </span>
                        </div>
                        <div class="flex flex-col pt-4">
                            <span class="font-semibold lg:text-lg"> Ansvarsområden </span>
                            <p> <?= $project_summary; ?> </p>
                            <?php if ($project_link) : ?>
                                <a href="<?php echo esc_url($project_link_url); ?>" target="_blank" <?php echo esc_attr($project_link_target); ?>" class="pt-4 underline lg:text-2xl hover:underline font-fontin-regular hover:opacity-80 underline-offset-4 lg:no-underline">
                                    <?= $project_link_title; ?>
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php else : ?>
                <div class="grid py-5 shadow-md lg:grid-cols-2">
                    <div class="<?= ($project_align == 'right_align') ? 'lg:order-last' : 'lg:order-first'; ?>">
                        <?php if ($project_image) : ?>
                            <div>
                                <img src="<?= esc_url($project_image['url']); ?>" alt="<?= esc_attr($project_image['alt']); ?>" class="opacity-90">
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="flex flex-col justify-center lg:text-right p-4 lg:pr-8 <?= ($project_align == 'right_align') ? 'lg:order-first' : 'lg:order-last'; ?>">
                        <div class="py-4 text-3xl lg:text-6xl"><?= $project_name; ?></div>
                        <div class="flex flex-col pt-4">
                            <span class="font-semibold lg:text-lg"> Tekniker & Verktyg </span>
                            <span><?= $project_frameworks; ?> </span>
                        </div>
                        <div class="flex flex-col pt-4">
                            <span class="font-semibold lg:text-lg"> Ansvarsområden </span>
                            <span> <?= $project_summary; ?> </span>
                            <a href="<?php echo esc_url($project_link_url); ?>" target="_blank" <?php echo esc_attr($project_link_target); ?>" class="pt-4 underline underline-offset-4 lg:text-2xl lg:no-underline hover:underline font-fontin-regular hover:opacity-80">
                                Se projektet här
                            </a>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
    <?php
        endwhile;
    else :
    endif;
    ?>
</section>