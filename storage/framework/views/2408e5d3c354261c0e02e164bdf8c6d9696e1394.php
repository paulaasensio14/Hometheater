<?php $__env->startSection('title', 'Menu movies'); ?>

<?php $__env->startSection('content'); ?>
<div class="wrapper"> 
	<div class="side">
		<div class="bg"></div>
		<div>
			<h3>Hometheater</h3>
		</div>
		<input type="text" class="search" placeholder="Search" />
		<ul class="menu">
			<li title="" class="selected"><i class="zmdi zmdi-movie"></i> Movies</li>
			<li title="Ladies Night"><i class="zmdi zmdi-female"></i> People</li>
            <li title="Family Friday">
                <i class="zmdi zmdi-accounts-alt"></i> Users</li>
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			<li class="divider">
				<i class="zmdi zmdi-account-circle"></i> Login
			</li>
		</ul>
	</div>
	<div class="main-wrap">
		<div class="main">
			<div class="list">
				<div class="scroll">
					<button class="scrollTop"><i class="zmdi zmdi-arrow-left"></i></button>
					<button class="scrollDown"><i class="zmdi zmdi-arrow-right"></i></button>
				</div>
				<header>
					<ul class="filter">
                        <li data-gid="," class="selected">All</li>
                        <?php $__currentLoopData = $movieList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $movie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php $__currentLoopData = $movie->genres; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $genre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($genre->description); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</ul>
				</header>
				<div class="content">
					<ul class="covers">
                        <?php $__currentLoopData = $movieList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $movie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li>
                            <a href="<?php echo e(route('movie.show', $movie->id)); ?>"><img src="<?php echo e(url('covers/'.$movie->cover)); ?>" alt="<?php echo e($movie->title); ?>"></a>
                            <span><?php echo e($movie->title); ?></span>
                            <small><?php echo e($movie->duration); ?> min</small>
                        </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /app/resources/views/movie/index.blade.php ENDPATH**/ ?>