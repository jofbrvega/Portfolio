<?php
$about_heading = get_field('about_heading');
$about_text = get_field('about_text');
?>

<section id="om" class="relative py-10 border-t-2 border-gray-400">
    <div>
        <h2 class="py-4 text-6xl"><?= $about_heading; ?></h2>
        <p><?= $about_text; ?></p>
    </div>
</section>