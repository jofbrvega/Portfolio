<?php get_header(); ?>

<div class="min-h-screen md:flex">
	<div class="flex items-center justify-center w-full md:w-1/2">
		<div class="max-w-sm m-8">
			<div class="text-5xl text-gray-800 border-b border-black md:text-15xl">404</div>
			<div class="w-16 h-1 my-3 bg-purple-light md:my-6"></div>
			<p class="mb-8 text-2xl font-light text-gray-800 md:text-3xl"><?php _e('Ajdå! Denna sidan finns inte.'); ?></p>
			<a href="<?php echo get_bloginfo('url'); ?>" class="px-4 py-2 text-white rounded bg-primary">
				Ta mig tillbaka till hemsidan
			</a>
		</div>
	</div>
</div>