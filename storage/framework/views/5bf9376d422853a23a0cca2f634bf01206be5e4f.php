<?php $__env->startSection('title', 'Menu people'); ?>

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
            <th>NAME</th>
            <th>PHOTO</th>
            <th>EXTERNAL URL</th>
            <th></th>
            <th>
                <form action="<?php echo e(route('person.create')); ?>">
                    <input style="transform:translateY(25%)" type="submit" value="New person" />
                </form>
            </th>
        </tr>

        <?php $__currentLoopData = $peopleList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $person): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($person->id); ?></td> 
            <td><?php echo e($person->name); ?></td>
            <td><img style="width:75px" src="<?php echo e(url('photos/'.$person->photo)); ?>" alt="<?php echo e($person->name); ?>"></td>
            <td><?php echo e($person->external_url); ?></td>
            <!--<td>
                @ foreach($person->genres as $genre)
                    { {$genre->description}}
                @ endforeach
            </td>-->
            <td>
                <form action="<?php echo e(route('person.edit', $person->id)); ?>">
                    <input style="transform:translateY(25%)" type="submit" value="Update" />
                </form>
                </td>
            <td>
                <form action = "<?php echo e(route('person.destroy', $person->id)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field("DELETE"); ?>
                    <input style="transform:translateY(25%)" type="submit" value="Delete"><br>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /app/resources/views/person/page.blade.php ENDPATH**/ ?>