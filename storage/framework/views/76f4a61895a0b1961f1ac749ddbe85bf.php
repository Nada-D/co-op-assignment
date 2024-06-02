<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

<section class="px-6 py-8 bg-gray-100">
        <main class="max-w-6xl mx-auto mt-10 lg:mt-20 space-y-6">
            <article class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-lg">
                <div class="text-center mb-6">
                    <a href="/" class="inline-flex items-center text-lg text-gray-700 hover:text-blue-500">
                        <svg width="22" height="22" viewBox="0 0 22 22" class="mr-2">
                            <g fill="none" fill-rule="evenodd">
                                <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z"></path>
                                <path class="fill-current"
                                      d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z"></path>
                            </g>
                        </svg>
                        Back to Posts
                    </a>
                </div>

                <h1 class="font-bold text-3xl lg:text-4xl mb-4 text-center text-gray-900"><?php echo e($note->title); ?></h1>

                <p class="block text-gray-500 text-xs mb-6 text-center">Published <time><?php echo e($note->created_at->diffForHumans()); ?></time></p>

                <div class="px-4 lg:px-12 space-y-4 text-lg leading-loose text-gray-700"><?php echo $note->body; ?></div>
            
            
                <div class="flex justify-center mt-6">
                    <form method="POST" action="/notes/<?php echo e($note->id); ?>">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>

                        <button type="submit" class="text-sm text-white bg-gray-700 py-2 px-4 rounded-lg hover:bg-gray-800 transition duration-300">Delete</button>
                    </form>
                </div>
                
            
            </article>
        </main>
    </section><?php /**PATH C:\laragon\www\Notes\resources\views/notes/show.blade.php ENDPATH**/ ?>