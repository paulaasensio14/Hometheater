<?php $__env->startSection('title', 'Show person'); ?>

<?php $__env->startSection('content'); ?>
<div class="bodyShow">
<div class="card">
    <div class="card_left">
        <img src="<?php echo e(url('photos/'.$person->photo)); ?>" alt="<?php echo e($person->name); ?>">
    </div>
        <div class="card_right">
            <h1><?php echo e($person->name); ?></h1>
            <div class="card_right__details">
                <div class="card_right__review">
                    <p> 
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                        Vivamus ullamcorper, libero id iaculis ultrices, turpis mauris pretium augue, 
                        vitae scelerisque tortor purus nec tortor. Phasellus aliquet eu erat ac sagittis. 
                        Integer mattis ante urna, id vulputate lacus convallis id. Vivamus eu luctus leo, 
                        nec consequat sem.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                        Vivamus ullamcorper, libero id iaculis ultrices, turpis mauris pretium augue, 
                        vitae scelerisque tortor purus nec tortor. Phasellus aliquet eu erat ac sagittis. 
                        Integer mattis ante urna, id vulputate lacus convallis id. Vivamus eu luctus leo, 
                        nec consequat sem...
                    </p>
                </div>
                <ul>
                    <li><a href="<?php echo e($person->external_url); ?>">Read more...</a></li>
                    <br><br>
                </ul>
                <div class="movies">
                    <li>Movies</li><br>
                    <?php $__currentLoopData = $person->act; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $movie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="<?php echo e(route('movie.show', $movie->id)); ?>"><img src="<?php echo e(url('covers/'.$movie->cover)); ?>" alt="<?php echo e($movie->title); ?>" title="<?php echo e($movie->title); ?>"></a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <br>
                </div>
                <div class="card_right__button">
                    <a class="green" href="<?php echo e(route('movie.index')); ?>">BACK HOME</a>
                    <?php if(auth()->guard()->check()): ?>    
                        <form style="display:contents" action = "<?php echo e(route('person.destroy', $person->id)); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field("DELETE"); ?>
                            <button title="Delete" class="red" type="submit"><i class="zmdi zmdi-delete"></i></button>
                        </form>
                        <form style="display:contents" action = "<?php echo e(route('person.edit', $person->id)); ?>" method="GET">
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
<?php echo $__env->make('layouts/master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /app/resources/views/person/show.blade.php ENDPATH**/ ?>