<?php $__env->startSection('title', 'Menu genre'); ?>

<?php $__env->startSection('content'); ?>
    <table style="width:40%; border: 2px solid black; text-align: center; transform:translate(-50%, -50%); position: absolute; top:50%; left:50%;  border-radius: 10px;">
        <tr>
            <th>ID</th>
            <th>DESCRIPTION</th>
            <th></th>
            <th>
                <form action="<?php echo e(route('genre.create')); ?>">
                    <input style="transform:translateY(25%)" type="submit" value="New genre" />
                </form>
            </th>
        </tr>
        <?php $__currentLoopData = $genreList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $genre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($genre->id); ?></td> 
            <td><?php echo e($genre->description); ?></td>
            <td>
                <form action="<?php echo e(route('genre.edit', $genre->id)); ?>">
                    <input style="transform:translateY(25%)" type="submit" value="Update" />
                </form>
                </td>
            <td>
                <form action = "<?php echo e(route('genre.destroy', $genre->id)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field("DELETE"); ?>
                    <input style="transform:translateY(25%)" type="submit" value="Delete"><br>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /app/resources/views/genre/page.blade.php ENDPATH**/ ?>