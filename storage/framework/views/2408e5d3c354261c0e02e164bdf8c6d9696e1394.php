<?php $__env->startSection('title', 'Menu movies'); ?>

<?php $__env->startSection('content'); ?>
    <div class="wrapper">
        <div class="side">
            <div class="bg"></div>
            <div>
                <h3>Cinema App</h3>
            </div>
            <input class="search" type="text" placeholder="Search">
            <ul class="menu">
                <li class="selected" title="">
                    <i class="zmdi zmdi-label-alt"></i>
                    Home
                </li>
                <li title="actors">
                    <i class="zmdi zmdi-male-female"></i>
                    Actors
                </li>
                <li title="directors">
                    <i class="zmdi zmdi-male-female"></i>
                Directors
            </li>
            <li title="users">
                <i class="zmdi zmdi-male-female"></i>
                Users
            </li>
        </ul>
    </div>
</div>
    <div class="main-wrap">
        <div class="main">
            <div class="list">
                <div class="scroll">
                    <button class="scrollTop">
                        <i class="zmdi zmdi-arrow-left"></i>
                    </button>
                    <button class="scrollDown">
                        <i class="zmdi zmdi-arrow-right"></i>
                    </button>
                </div>
                <header>
                    <ul class="filter">
                        <li class="selected" data-gid=",">
                            All
                        </li>
                        <li data-gid="28">
                            Aqui poner Array de generos
                        </li>
                    </ul>
                </header>
                <div class="content">
                    <ul class="covers">
                        <?php $__currentLoopData = $movieList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $movie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li data-index="<?php echo e($movie->id); ?>" style="transform:translateY(0px);">
                                <img style="width:75px" src="<?php echo e(url('covers/'.$movie->cover)); ?>" alt="<?php echo e($movie->title); ?>">
                                <span><?php echo e($movie->title); ?></span>
                                <small><?php echo e($movie->duration); ?></small>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /app/resources/views/movie/index.blade.php ENDPATH**/ ?>