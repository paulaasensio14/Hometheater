<?php $__env->startSection('title', 'Create person'); ?>

<?php $__env->startSection('sidebar'); ?>
    
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <!--
    @ if ($errors->any())
        @ foreach ($errors->all() as $error)
            { {$error}} <br>
        @ endforeach"
    @ end if
    -->
            
    <?php if(isset($person)): ?>
        <form action="<?php echo e(route('person.update', ['person' => $person->id])); ?>" method="POST">
        <?php echo method_field("PUT"); ?>
    <?php else: ?>
        <form action="<?php echo e(route('person.store')); ?> " method="POST">
    <?php endif; ?>
                            
    <?php echo csrf_field(); ?>
    Name:<br>
    <input type="text" name="name" value="<?php echo e($person->name ?? ''); ?>"><br>
    Photo: <br>
    <input type="file" name="photo"><br>
    External URL: <br>
    <input type="text" name="external_url" value="<?php echo e($person->external_url ?? ''); ?>"><br>
    <br>
    <input type="submit" value="submit">
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /app/resources/views/person/create.blade.php ENDPATH**/ ?>