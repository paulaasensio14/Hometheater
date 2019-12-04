<html>
    <head>
        <title>
            <?php echo $__env->yieldContent('title'); ?>
        </title>
        <link rel="shortcut icon" href="<?php echo e(url('https://cdn4.iconfinder.com/data/icons/planner-color/64/popcorn-movie-time-512.png')); ?>">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
        
    </head>
    <body>
        <?php $__env->startSection('sidebar'); ?>
            
        <?php echo $__env->yieldSection(); ?>
        <div class="container">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
    </body>
</html><?php /**PATH /app/resources/views////layouts/masterLogin.blade.php ENDPATH**/ ?>