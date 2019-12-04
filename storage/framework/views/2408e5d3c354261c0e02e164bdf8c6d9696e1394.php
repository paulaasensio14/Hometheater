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
			<li class="selected"><a href="<?php echo e(route('movie.index')); ?>"><i class="zmdi zmdi-movie"></i> Movies </a></li>
			<li><a href="<?php echo e(route('person.index')); ?>"><i class="zmdi zmdi-accounts-list"></i> People</a></li>
			<br><br>
			<?php if(auth()->guard()->guest()): ?>
				<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
				<li><a href="<?php echo e(route('login')); ?>"><i class="zmdi zmdi-account-circle"></i> Login </a></li>
			<?php endif; ?>

			<?php if(auth()->guard()->check()): ?>
				<br><br><br><br><br><br><br>
				<li><a href="<?php echo e(route('user.index')); ?>"><i class="zmdi zmdi-accounts-alt"></i> Users </a></li>
				<li><a href="<?php echo e(route('movie.create')); ?>"><i class="zmdi zmdi-plus"></i> Add movie </a></li>
				<li><a href="<?php echo e(route('user.create')); ?>"><i class="zmdi zmdi-plus"></i> Add user </a></li>
				<li><a href="<?php echo e(route('person.create')); ?>"><i class="zmdi zmdi-plus"></i> Add person </a></li>
				<li><a href="<?php echo e(route('genre.create')); ?>"><i class="zmdi zmdi-plus"></i> Add genre </a></li>
				<li>
					<form id="logout" action="<?php echo e(url('/logout')); ?>" method="POST" >
						<?php echo csrf_field(); ?>
						<a class="nav-link" href="javascript:{}" onclick="document.getElementById('logout').submit();"><i class="zmdi zmdi-account-circle"> Logout </i></a>
					</form>				
				</li>
			<?php endif; ?>
		</ul>
	</div>
	<div class="main-wrap">
		<div class="main">
			<div class="list">
                <header>
                    <ul class="filter">
                        <li data-gid="," class="selected">All</li>
                        <?php $__currentLoopData = $genreList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $genre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><a href="<?php echo e(route('genre.show', $genre->id)); ?>" style="text-decoration: none; color: #444;"><?php echo e($genre->description); ?></a></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </header>
                <div class="content">
                    <?php echo e($movieList->links()); ?>

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