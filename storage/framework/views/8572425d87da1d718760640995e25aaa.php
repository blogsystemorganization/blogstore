<?php echo $__env->make('layouts/backend.dashboardheader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('layouts/backend.adminleftsidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

 <!--Start Main Section-->
 <main class="mains">

	<!--start topbar section -->
	<?php echo $__env->make('layouts/backend.dashboardnav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	<!-- end topbar section -->

	<?php echo $__env->yieldContent('content'); ?>	
 </main>
 <!--end main page-->



<?php echo $__env->make('layouts/backend.dashboardfooter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\team-project\resources\views/layouts/backend/admindashboardindex.blade.php ENDPATH**/ ?>