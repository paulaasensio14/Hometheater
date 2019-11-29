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
                <ul>
                    <li><?php echo e($person->external_url); ?></li>
                    <br>
                </ul>
                <div class="card_right__review">
                    <p> 
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                        Vivamus ullamcorper, libero id iaculis ultrices, turpis mauris pretium augue, 
                        vitae scelerisque tortor purus nec tortor. Phasellus aliquet eu erat ac sagittis. 
                        Integer mattis ante urna, id vulputate lacus convallis id. Vivamus eu luctus leo, 
                        nec consequat sem.
                    </p>
                </div>
                <div class="movies">
                    <li>Movies</li><br>
                    <?php $__currentLoopData = $person->act; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $movie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="<?php echo e(route('movie.show', $movie->id)); ?>"><img src="<?php echo e(url('covers/'.$movie->cover)); ?>" alt="<?php echo e($movie->title); ?>" title="<?php echo e($movie->title); ?>"></a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <br>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /app/resources/views/person/show.blade.php ENDPATH**/ ?>