<?php $__env->startSection('title', 'Create User'); ?>

<?php $__env->startSection('sidebar'); ?>
    
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
            
    <?php if(isset($user)): ?>
        <form action="<?php echo e(route('user.update', ['user' => $user->id])); ?>" method="POST">
        <?php echo method_field("PUT"); ?>
    <?php else: ?>
        <form action="<?php echo e(route('user.store')); ?> " method="POST">
    <?php endif; ?>
                            
    <?php echo csrf_field(); ?> <!-- Seguridad del formulario -->
    User Name:<br>
    <input type="text" name="name" value="<?php echo e($user->name ?? ''); ?>"><br>
    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($menssage); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    Email: <br>
    <input type="email" name="email" value="<?php echo e($user->email ?? ''); ?>"><br>
    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($menssage); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    Password: <br>
    <input type="password" name="password" value="<?php echo e($user->password ?? ''); ?>"><br><br>
    <input type="submit" value="Submit">
    </form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /app/resources/views/user/create.blade.php ENDPATH**/ ?>