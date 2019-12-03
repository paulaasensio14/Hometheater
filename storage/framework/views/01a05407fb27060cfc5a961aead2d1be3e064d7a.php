<?php $__env->startSection('title', 'Create person'); ?>

<?php $__env->startSection('sidebar'); ?>
    
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
            
    <?php if(isset($person)): ?>
        <form enctype="multipart/form-data" action="<?php echo e(route('person.update', ['person' => $person->id])); ?>" method="POST">
        <?php echo method_field("PUT"); ?>
    <?php else: ?>
        <form enctype="multipart/form-data" action="<?php echo e(route('person.store')); ?> " method="POST">
    <?php endif; ?>
                            
    <?php echo csrf_field(); ?>
    Name:<br>
    <input type="text" name="name" value="<?php echo e($person->name ?? ''); ?>"><br>
    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($menssage); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    Photo: <br>
    <input type="file" name="photo"><br>
    <?php $__errorArgs = ['photo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($menssage); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    External URL: <br>
    <input type="text" name="external_url" value="<?php echo e($person->external_url ?? ''); ?>"><br>
    <?php $__errorArgs = ['external_url'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($menssage); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    <br>
    <input type="submit" value="submit">
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /app/resources/views/person/create.blade.php ENDPATH**/ ?>