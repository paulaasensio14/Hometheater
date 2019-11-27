<?php $__env->startSection('title', 'Create genre'); ?>

<?php $__env->startSection('sidebar'); ?>
    
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <!--
    @ if ($errors->any())
        @ foreach ($errors->all() as $error)
            { {$error}} <br>
        @ endforeach"
    @ endif
    -->
            
    <?php if(isset($genre)): ?>
        <form action="<?php echo e(route('genre.update', ['genre' => $genre->id])); ?>" method="POST">
        <?php echo method_field("PUT"); ?>
    <?php else: ?>
        <form action="<?php echo e(route('genre.store')); ?> " method="POST">
    <?php endif; ?>
                            
    <?php echo csrf_field(); ?> <!-- Seguridad del formulario -->
    Genre:<br>
    <input type="text" name="description" value="<?php echo e($genre->description ?? ''); ?>"><br><br>
    <input type="submit" value="submit">
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /app/resources/views/genre/create.blade.php ENDPATH**/ ?>