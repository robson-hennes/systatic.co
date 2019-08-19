<?php $__env->startSection('body'); ?>
<?php echo $__env->make('partials.hero', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<section class="px-4 md:px-0 container mx-auto">
    <?php $__currentLoopData = $releases; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $release): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <article id="<?php echo e($release->slug); ?>" class="pb-4 mb-2 border-b-2 border-gray-200">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                <h1>
                    <a class="text-4xl mb-2 no-underline text-primary" href="#<?php echo e($release->slug); ?>">
                        <?php echo e($release->title); ?>

                    </a>
                </h1>
                <h4 class="text-lg">
                    <?php echo e($release->meta->date); ?>

                </h4>
            </div>
            <div>
                <?php echo $release->content; ?>

            </div>
        </article>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/duncan/Sites/systatic-site/views/changelog.blade.php ENDPATH**/ ?>