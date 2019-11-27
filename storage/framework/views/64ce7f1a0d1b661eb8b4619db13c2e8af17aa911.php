<?php $__env->startSection('title', 'Menu users'); ?>

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
    <table style="width:60%; border: 2px solid black; text-align: center; transform:translate(-50%, -50%); position: absolute; top:50%; left:50%;  border-radius: 10px;">
        <tr>
            <th>ID</th>
            <th>USER NAME</th>
            <th>EMAIL</th>
            <th>PASSWORD</th>
            <th></th>
            <th>
                <form action="<?php echo e(route('user.create')); ?>">
                    <input style="transform:translateY(25%); width: 105px;" type="submit" value="New user" />
                </form>
            </th>
        </tr>
        <?php $__currentLoopData = $userList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($user->id); ?></td> 
            <td><?php echo e($user->name); ?></td>
            <td><?php echo e($user->email); ?></td>
            <td><?php echo e($user->password); ?></td>
            <td>
                <form action="<?php echo e(route('user.edit', $user->id)); ?>">
                    <input style="transform:translateY(25%)" type="submit" value="Update" />
                </form>
                </td>
            <td>
                <form action = "<?php echo e(route('user.destroy', $user->id)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field("DELETE"); ?>
                    <input style="transform:translateY(25%)" type="submit" value="Delete"><br>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /app/resources/views/user/page.blade.php ENDPATH**/ ?>