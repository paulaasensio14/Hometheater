<html>
    <head>
        <title>
            <?php if(isset($movie->title)): ?>
                <?php echo e($movie->title); ?>

                <?php else: ?>
                <?php echo $__env->yieldContent('title'); ?>
                <?php endif; ?>
            </title>
        <link rel="stylesheet" type="text/css" href="<?php echo e(url('css/styleShow.css')); ?>">
        
        <script src="<?php echo e(url('js/scriptIndex.js')); ?>"></script> 
        <link rel="shortcut icon" href="<?php echo e(url('https://cdn4.iconfinder.com/data/icons/planner-color/64/popcorn-movie-time-512.png')); ?>">
    </head>
    <body>
        <?php $__env->startSection('sidebar'); ?>
            
        <?php echo $__env->yieldSection(); ?>
        <div class="container">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
    </body>
</html><?php /**PATH /app/resources/views/layouts/master.blade.php ENDPATH**/ ?>