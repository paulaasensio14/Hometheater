<?php $__env->startSection('title', 'Menu movies'); ?>

<?php $__env->startSection('sidebar'); ?>
    <form action="<?php echo e(route('user.index')); ?>">
        <input style="transform:translateY(25%); width: 120px;" type="submit" value="Users" />
    </form>
    <form action="<?php echo e(route('movie.index')); ?>">
        <input style="transform:translateY(25%); width: 120px;" type="submit" value="Movies" />
    </form>
    <form action="<?php echo e(route('person.index')); ?>">
        <input style="transform:translateY(25%); width: 120px;" type="submit" value="People" />
    </form>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <table style="width:80%; border: 2px solid black; text-align: center; transform:translateX(-50%); position: absolute; left:50%;  border-radius: 10px;">
        <tr>
            <th>ID</th>
            <th>MOVIE TITLE</th>
            <th>COVER</th>
            <th>YEAR</th>
            <th>DURATION</th>
            <th>RATING</th>
            <th>EXTERNAL URL</th>   
            <th>GENRES</th>
            <th>ACTORS</th>
            <th>DIRECTORS</th>
            <th></th>
            <th>
                <form action="<?php echo e(route('movie.create')); ?>">
                    <input style="transform:translateY(25%)" type="submit" value="New movie" />
                </form>
            </th>
        </tr>

        <?php $__currentLoopData = $movieList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $movie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($movie->id); ?></td> 
            <td><a href="<?php echo e(route('movie.show', $movie->id)); ?>" ><?php echo e($movie->title); ?></a></td>
            <td><img style="width:75px" src="<?php echo e(url('covers/'.$movie->cover)); ?>" alt="<?php echo e($movie->title); ?>"></td>
            <td><?php echo e($movie->year); ?></td>
            <td><?php echo e($movie->duration); ?></td>
            <td><?php echo e($movie->rating); ?></td>
            <td><?php echo e($movie->external_url); ?></td>
            <td>
                <?php $__currentLoopData = $movie->genres; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $genre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo e($genre->description); ?>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </td>
            <td>
                <?php $__currentLoopData = $movie->actors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $people): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo e($people->name); ?>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </td>
            <td>
                <?php $__currentLoopData = $movie->directors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $people): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo e($people->name); ?>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </td>
            <td>
                <form action="<?php echo e(route('movie.edit', $movie->id)); ?>">
                    <input style="transform:translateY(25%)" type="submit" value="Update" />
                </form>
                </td>
            <td>
                <form action = "<?php echo e(route('movie.destroy', $movie->id)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field("DELETE"); ?>
                    <input style="transform:translateY(25%)" type="submit" value="Delete"><br>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /app/resources/views/movie/page.blade.php ENDPATH**/ ?>