<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

<div class="bg-white py-12 sm:py-16">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="flex items-center justify-between max-w-2xl lg:max-w-none">
                <div>
                    <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">All Notes</h2>
                    <p class="mt-2 text-lg leading-8 text-gray-600">Nada's personal reminders</p>
                </div>
                <div class="flex flex-col-reverse sm:flex-row items-center justify-center sm:justify-between sm:pl-4">
                    <a href="/notes/create"
                        class="py-2 px-4 bg-pink-300 text-white rounded-md shadow-md hover:bg-pink-600 transition duration-300 mt-1 pr-5 mr-5">Create</a>

                    <form method="GET" action="#"
                        class="mb-4 sm:mb-0 flex items-center justify-center sm:justify-start">
                        <input type="text" name="search" placeholder="Find a Note"
                            class="bg-gray-100 rounded-lg placeholder-black font-semibold text-sm text-center w-full underline p-2"
                            style="outline: none;" value="<?php echo e(request('search')); ?>">
                    </form>
                </div>
            </div>
            <?php if($notes->isEmpty()): ?>
            <div class="text-center py-16 bg-white rounded-lg shadow-lg flex flex-col items-center justify-center">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">No Notes Available</h2>
                <p class="text-xl text-gray-600 mb-6">Check back later</p>
                <a href="/" class="inline-block px-8 py-4 text-white bg-gray-400 rounded-full hover:bg-gray-600 transition duration-300">Go Back</a>
            </div>
            <?php else: ?>
            <div class="mx-auto mt-6 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-8 border-t border-gray-200 pt-6 sm:mt-8 sm:pt-8 lg:mx-0 lg:max-w-none lg:grid-cols-3">
                <?php $__currentLoopData = $notes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $note): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <article class="flex flex-col items-start justify-between bg-white rounded-lg shadow-md p-6">
                    <div class="flex items-center gap-x-4 text-xs">
                        <time datetime="<?php echo e($note->date); ?>" class="text-gray-500"><?php echo e($note->date); ?></time>
                        <a href="#"
                            class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100"><?php echo e($note->category); ?></a>
                    </div>
                    <div class="group relative">
                        <h3 class="text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600 mt-1">
                            <a href="#" class="mt-0">
                                <span class="absolute inset-0"></span>
                                <?php echo e($note->title); ?>

                            </a>
                        </h3>
                        <p class="mt-2 line-clamp-3 text-sm leading-6 text-gray-600"><?php echo e($note->excerpt); ?></p>
                    </div>
                    <div class="relative mt-4 flex items-center gap-x-4">
                        <a href="note/<?php echo e($note->slug); ?>/edit">
                            <button
                                class="py-2 px-4 bg-gradient-to-r from-pink-100 to-pink-200 text-gray-800 rounded-full shadow-md hover:from-pink-200 hover:to-pink-300">Edit</button>
                        </a>

                        <a href="/note/<?php echo e($note->slug); ?>">
                            <button
                                class="py-2 px-4 bg-gradient-to-r from-gray-600 to-gray-700 text-white rounded-full shadow-md hover:from-gray-700 hover:to-gray-800">Open
                                Note</button>
                        </a>
                    </div>
                </article>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
<?php /**PATH C:\laragon\www\Notes\resources\views/notes/index.blade.php ENDPATH**/ ?>