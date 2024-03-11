
<?php $__env->startSection('content'); ?>

<div class="flex justify-start flex-col mx-auto px-10 table-border my-[100px]">
    <h1 class="text-blue-500 text-lg font-semibold tracking-wider mb-7">Create New Category</h1>
    <form action="<?php echo e(route('categories.store')); ?>" method="POST" class="w-[500px]">
        <?php echo method_field('POST'); ?>
        <?php echo csrf_field(); ?>

        <div class="flex flex-col gap-3 mb-5">
            <label class="text-gray-500">Category Name</label>
            <input type="text" name="categoryname" class="bg-gray-500 rounded-md focus:outline-0 px-3 py-2">
            <?php $__errorArgs = ['categoryname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="text-red-500 text-sm"> <?php echo e($message); ?> </p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="flex flex-col gap-3 mb-5">
            <label class="text-gray-500">Category Slug</label>
            <input type="text" name="categoryslug" class="bg-gray-500 rounded-md focus:outline-0 px-3 py-2">
            <?php $__errorArgs = ['categoryslug'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="text-red-500 text-sm"> <?php echo e($message); ?> </p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="flex justify-end">
            <button type="submit" class="bg-blue-500 text-md text-gray-100 rounded-md px-3 py-2">Save</button>
        </div>
    </form>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/backend.admindashboardindex', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\team-project\resources\views/categories/create.blade.php ENDPATH**/ ?>