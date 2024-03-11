
<?php echo $__env->make('userlayouts/userheader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        

        <?php echo $__env->make('userlayouts/usernavbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php echo $__env->yieldContent('usercontent'); ?>

<?php echo $__env->make('userlayouts/userfooter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\team-project\resources\views/userlayouts/userindex.blade.php ENDPATH**/ ?>