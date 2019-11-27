<?php $__env->startSection('title', 'Create movie'); ?>

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
            
    <?php if(isset($movie)): ?>
        <form enctype="multipart/form-data" action="<?php echo e(route('movie.update', ['movie' => $movie->id])); ?>" method="POST">
        <?php echo method_field("PUT"); ?>
    <?php else: ?>
        <form enctype="multipart/form-data" action="<?php echo e(route('movie.store')); ?> " method="POST">
    <?php endif; ?>
                            
    <?php echo csrf_field(); ?> <!-- Seguridad del formulario -->
    Movie title:<br>
    <input type="text" name="title" value="<?php echo e($movie->title ?? ''); ?>"><br>
    Year: <br>
    <input type="number" name="year" value="<?php echo e($movie->year ?? ''); ?>"><br>
    Duration: <br>
    <input type="number" name="duration" value="<?php echo e($movie->duration ?? ''); ?>"><br>
    Rating: <br>
    <input type="number" name="rating" value="<?php echo e($movie->rating ?? ''); ?>"><br>
    Cover: <br>
    <input type="file" name="cover"><br>
    Filepath: <br>
    <input type="text" name="filepath" value="<?php echo e($movie->filepath ?? ''); ?>"><br>
    Filename: <br>
    <input type="text" name="filename" value="<?php echo e($movie->filename ?? ''); ?>"><br>
    External URL: <br>
    <input type="text" name="external_url" value="<?php echo e($movie->external_url ?? ''); ?>"><br>
    Genres: <br>
    <?php $__currentLoopData = $genreList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $genre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <input type="checkbox" name="genres[]" value="<?php echo e($genre->id ?? ''); ?>"
        <?php if(isset($movie) && in_array($genre->id, $movie->indexesList('genres'))): ?>
            checked
        <?php endif; ?>
        > <?php echo e($genre->description); ?> <br>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <br>
    Actors: <br>
    <?php $__currentLoopData = $personList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $people): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <input type="checkbox" name="actors[]" value="<?php echo e($people->id ?? ''); ?>"
        <?php if(isset($movie) && in_array($people->id, $movie->indexesList('actors'))): ?>
            checked
        <?php endif; ?>
        > <?php echo e($people->name); ?> <br>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <br>
    Directors: <br>
    <?php $__currentLoopData = $personList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $people): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <input type="checkbox" name="directors[]" value="<?php echo e($people->id ?? ''); ?>"
        <?php if(isset($movie) && in_array($people->id, $movie->indexesList('directors'))): ?>
            checked
        <?php endif; ?>
        > <?php echo e($people->name); ?> <br>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <br>
    <input type="submit" value="submit">
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /app/resources/views/movie/create.blade.php ENDPATH**/ ?>