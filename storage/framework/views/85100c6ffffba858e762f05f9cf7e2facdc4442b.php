<?php $__env->startSection('title', 'Create User'); ?>

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
            
    <?php if(isset($user)): ?>
        <form action="<?php echo e(route('user.update', ['id' => $user->id])); ?>" method="POST">
        <?php echo method_field("PUT"); ?>
    <?php else: ?>
        <form action="<?php echo e(route('user.store')); ?> " method="POST">
    <?php endif; ?>
                            
    <?php echo csrf_field(); ?> <!-- Seguridad del formulario -->
    User Name:<br>
    <input type="text" name="name" value="<?php echo e($user->name ?? ''); ?>"><br>
    Email: <br>
    <input type="email" name="email" value="<?php echo e($user->email ?? ''); ?>"><br>
    Password: <br>
    <input type="password" name="password" value="<?php echo e($user->password ?? ''); ?>"><br><br>
    <input type="submit" value="Submit">
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /app/resources/views/createUser.blade.php ENDPATH**/ ?>