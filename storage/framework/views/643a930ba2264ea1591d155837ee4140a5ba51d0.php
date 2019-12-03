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
			<li><a href="<?php echo e(route('movie.index')); ?>"><i class="zmdi zmdi-movie"></i> Movies </a></li>
			<li><a href="<?php echo e(route('person.index')); ?>"><i class="zmdi zmdi-accounts-list"></i> People</a></li>
			<br><br>
			<?php if(auth()->guard()->guest()): ?>
				<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
				<li><a href="<?php echo e(route('home')); ?>"><i class="zmdi zmdi-account-circle"></i> Login </a></li>
			<?php endif; ?>

			<?php if(auth()->guard()->check()): ?>
				<br><br><br><br><br><br><br>
				<li class="selected"><a href="<?php echo e(route('user.index')); ?>"><i class="zmdi zmdi-accounts-alt"></i> Users </a></li>
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
                <div class="content">
                    <?php echo e($userList->links()); ?>

					<ul class="covers">
					<?php $__currentLoopData = $userList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li>
							<span style="font-weight: bold"><a href="<?php echo e(route('user.show', $user->id)); ?>"><?php echo e($user->name); ?></a></span>
                            <span><?php echo e($user->password); ?></span>
                            <span><?php echo e($user->email); ?> </span>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>         
				</div>
			</div>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /app/resources/views/user/index.blade.php ENDPATH**/ ?>