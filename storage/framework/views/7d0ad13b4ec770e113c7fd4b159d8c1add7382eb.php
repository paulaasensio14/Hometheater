<html>
    <head>
        <title>
            <?php echo $__env->yieldContent('title'); ?>
        </title>
        <link rel="stylesheet" type="text/css" href="<?php echo e(url('css/styleShow.css')); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo e(url('css/styleIndex.css')); ?>">
        <script type="script/stylesheet" src="<?php echo e(url('js/scriptIndex.js')); ?>"></script>
        <link rel="shortcut icon" href="<?php echo e(url('https://cdn4.iconfinder.com/data/icons/planner-color/64/popcorn-movie-time-512.png')); ?>">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    </head>
    <body>
        <?php $__env->startSection('sidebar'); ?>
            
        <?php echo $__env->yieldSection(); ?>
        <div class="container">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
    </body>
</html><?php /**PATH /app/resources/views/layouts/master.blade.php ENDPATH**/ ?>