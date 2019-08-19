<div class="border-4 md:border-2 border-primary"></div>

<header class="p-2 bg-gray-100">
    <div class="container mx-auto flex flex-col md:flex-row md:items-center md:justify-between">
        <a class="text-3xl md:text-2xl font-semibold text-center md:text-left hover:text-secondary" href="/">
            <?php echo e($config->name); ?>

        </a>

        <nav class="flex flex-col md:flex-row md:items-center mt-4 md:mt-0">
            <?php $__currentLoopData = $config->nav; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a class="text-lg font-semibold mx-2 text-center hover:text-secondary" href="<?php echo e($item->target); ?>">
                    <?php echo e($item->name); ?>

                </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </nav>

        <nav class="flex flex-row md:items-center justify-center mt-4 md:mt-0">
            <?php $__currentLoopData = $config->social; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a class="mx-2" href="<?php echo e($item->link); ?>">
                    <img src="<?php echo e($item->icon); ?>" alt="<?php echo e($item->name); ?>" width="25px">
                </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </nav>
    </div>
</header><?php /**PATH /Users/duncan/Sites/systatic-site/views/partials/header.blade.php ENDPATH**/ ?>