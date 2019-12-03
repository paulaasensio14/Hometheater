<?php $__env->startSection('title', 'Form genre'); ?>

<?php $__env->startSection('content'); ?>
<div class="wrapper"> 
	<div class="side">
		<div class="bg"></div>
		<div>
			<h3>Hometheater</h3>
		</div>
		<input type="text" class="search" placeholder="Search" />
		<ul class="menu">
			<li><a href="<?php echo e(route('movie.index')); ?>"><i class="zmdi zmdi-movie"></i> Movies </a></li>
			<li><a href="<?php echo e(route('person.index')); ?>"><i class="zmdi zmdi-accounts-list"></i> People</a></li>
			<br><br>
			<?php if(auth()->guard()->guest()): ?>
				<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
				<li><a href="<?php echo e(route('home')); ?>"><i class="zmdi zmdi-account-circle"></i> Login </a></li>
			<?php endif; ?>

			<?php if(auth()->guard()->check()): ?>
				<br><br><br><br><br><br><br>
				<li><a href="<?php echo e(route('user.index')); ?>"><i class="zmdi zmdi-accounts-alt"></i> Users </a></li>
				<li><a href="<?php echo e(route('movie.create')); ?>"><i class="zmdi zmdi-plus"></i> Add movie </a></li>
				<li><a href="<?php echo e(route('user.create')); ?>"><i class="zmdi zmdi-plus"></i> Add user </a></li>
				<li><a href="<?php echo e(route('person.create')); ?>"><i class="zmdi zmdi-plus"></i> Add person </a></li>
				<li class="selected"><a href="<?php echo e(route('genre.create')); ?>"><i class="zmdi zmdi-plus"></i> Add genre </a></li>
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
                <div class="content">
					<ul class="covers">
						<?php if(isset($genre)): ?>
							<form action="<?php echo e(route('genre.update', ['genre' => $genre->id])); ?>" method="POST">
							<?php echo method_field("PUT"); ?>
						<?php else: ?>
							<form action="<?php echo e(route('genre.store')); ?> " method="POST">
						<?php endif; ?>
												
						<?php echo csrf_field(); ?> <!-- Seguridad del formulario -->
						Genre:<br>
						<input type="text" name="description" value="<?php echo e($genre->description ?? ''); ?>"><br><br>
						<input type="submit" value="submit">
						</form>
                    </ul>         
				</div>
			</div>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /app/resources/views/genre/form.blade.php ENDPATH**/ ?>