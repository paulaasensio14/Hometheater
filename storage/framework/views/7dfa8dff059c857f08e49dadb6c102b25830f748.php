<?php $__env->startSection('title', $user->name); ?>  

<?php $__env->startSection('content'); ?>
<div class="bodyShow">
<div class="card">
    <div class="card_left">
        <img src="<?php echo e(url('photos/perfileIcon.png')); ?>" alt="<?php echo e($user->name); ?>">
    </div>
        <div class="card_right">
            <h1><?php echo e($user->name); ?></h1>
            <div class="card_right__details">
                <ul>
                    <li>Password: &nbsp; <?php echo e($user->password); ?></li><br><br>
                    <li>Email: &nbsp; <?php echo e($user->email); ?></li><br>
                    <br>
                </ul>
                <div class="card_right__review">
                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                        Vivamus ullamcorper, libero id iaculis ultrices, turpis mauris pretium augue, 
                        vitae scelerisque tortor purus nec tortor. Phasellus aliquet eu erat ac sagittis. 
                        Integer mattis ante urna, id vulputate lacus convallis id. Vivamus eu luctus leo, 
                        nec consequat sem.
                    </p>
                </div>
                <div class="card_right__button">
                    <br><br><br><br><br><br><br>
                    <a class="green" href="<?php echo e(route('movie.index')); ?>">BACK HOME</a>
                    <?php if(auth()->guard()->check()): ?>    
                        <form style="display:contents" action = "<?php echo e(route('user.destroy', $user->id)); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field("DELETE"); ?>
                            <button title="Delete" class="red" type="submit"><i class="zmdi zmdi-delete"></i></button>
                        </form>
                        <form style="display:contents" action = "<?php echo e(route('user.edit', $user->id)); ?>" method="GET">
                            <?php echo csrf_field(); ?>
                            <button title="Edit" class="green" type="submit"><i class="zmdi zmdi-edit"></i></button>
                        </form>
                    <?php endif; ?>
                </div>
                
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /app/resources/views/user/show.blade.php ENDPATH**/ ?>