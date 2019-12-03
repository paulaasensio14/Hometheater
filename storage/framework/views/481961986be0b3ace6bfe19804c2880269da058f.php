<?php $__env->startSection('title', 'Form person'); ?>

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
				<li class="selected"><a href="<?php echo e(route('person.create')); ?>"><i class="zmdi zmdi-plus"></i> Add person </a></li>
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
                <div class="content">
					<ul class="covers">
						<?php if(isset($person)): ?>
							<form enctype="multipart/form-data" action="<?php echo e(route('person.update', ['person' => $person->id])); ?>" method="POST">
							<?php echo method_field("PUT"); ?>
						<?php else: ?>
							<form enctype="multipart/form-data" action="<?php echo e(route('person.store')); ?> " method="POST">
						<?php endif; ?>
												
						<?php echo csrf_field(); ?>
						Name:<br>
						<input type="text" name="name" value="<?php echo e($person->name ?? ''); ?>"><br>
						<?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
						Photo: <br>
						<input type="file" name="photo"><br>
						<?php $__errorArgs = ['photo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
						External URL: <br>
						<input type="text" name="external_url" value="<?php echo e($person->external_url ?? ''); ?>"><br>
						<?php $__errorArgs = ['external_url'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
						<br>
						<input type="submit" value="submit">
						</form>
                    </ul>         
				</div>
			</div>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /app/resources/views/person/form.blade.php ENDPATH**/ ?>