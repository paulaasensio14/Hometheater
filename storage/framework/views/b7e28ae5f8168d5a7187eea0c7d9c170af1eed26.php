<?php $__env->startSection('title', '<?php echo e($movie->title); ?>'); ?>  

<?php $__env->startSection('content'); ?>
<div class="bodyShow">
<div class="card">
    <div class="card_left">
        <img src="<?php echo e(url('covers/'.$movie->cover)); ?>" alt="<?php echo e($movie->title); ?>">
    </div>
        <div class="card_right">
            <h1><?php echo e($movie->title); ?></h1>
            <div class="card_right__details">
                <ul>
                    <li><?php echo e($movie->year); ?></li>
                    <li><?php echo e($movie->duration); ?> min</li><br>
                    <?php $__currentLoopData = $movie->genres; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $genre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($genre->description); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <br>
                    <li>Rating: &nbsp&nbsp<?php echo e($movie->rating); ?></li>
                </ul>
                <div class="card_right__review">
                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                        Vivamus ullamcorper, libero id iaculis ultrices, turpis mauris pretium augue, 
                        vitae scelerisque tortor purus nec tortor. Phasellus aliquet eu erat ac sagittis. 
                        Integer mattis ante urna, id vulputate lacus convallis id. Vivamus eu luctus leo, 
                        nec consequat sem.
                    </p>
                </div>
                <div class="people">
                    <li>Actors</li><br>
                    <?php $__currentLoopData = $movie->actors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $person): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="<?php echo e(route('person.show', $person->id)); ?>"><img src="<?php echo e(url('photos/'.$person->photo)); ?>" alt="<?php echo e($person->name); ?>" title="<?php echo e($person->name); ?>"></a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <br>
                    <li>Directors</li><br>
                    <?php $__currentLoopData = $movie->directors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $person): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="<?php echo e(route('person.show', $person->id)); ?>"><img src="<?php echo e(url('photos/'.$person->photo)); ?>" alt="<?php echo e($person->name); ?>" title="<?php echo e($person->name); ?>"></a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div class="card_right__button">
                    <a href="<?php echo e(url($movie->filepath, $movie->filename)); ?>" target="_blank">WATCH TRAILER</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /app/resources/views/movie/show.blade.php ENDPATH**/ ?>