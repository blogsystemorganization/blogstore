<?php $__env->startSection('content'); ?>

<div class="w-full mx-auto px-10 table-border my-[100px]">
    <div class="w-full flex justify-between items-center mb-[50px]">
        <div>
            <form action="<?php echo e(route('categories.index')); ?>" method="GET">
                <?php echo csrf_field(); ?>
                <div class="flex items-center">
                    <input type="text" name="search-category" id="search" class="bg-gray-500 rounded-0 rounded-l-md focus:outline-0 px-2 py-1" placeholder="Search Category"/>
                    <button type="submit" class="text-white bg-gray-500 p-2 rounded-r-md"><i class="fa-solid fa-magnifying-glass"></i></button>
                </div>
            </form>
        </div>
        <div class="w-full flex justify-end">
            <a href="<?php echo e(route('categories.create')); ?>" class="bg-blue-500 text-md text-gray-100 rounded-md px-3 py-1.5">Create New Category</a>
        </div>
    </div>
    <table class="w-full text-sm">
        <thead>
            <tr class="text-gray-500 font-semibold tracking-wide border-b border-b-white">
                <td class="py-4 px-2">No.</td>
                <td class="py-4 px-2">Category Name</td>
                <td class="py-4 px-2">Created At</td>
                <td class="py-4 px-2">Actions</td>
            </tr>
        </thead>
        <tbody class="text-white">
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr class="border-b border-b-whtie my-5">
                    <td class="px-2 py-3"><?php echo e(++$key); ?></td>
                    <td class="px-2 py-3"><?php echo e($category->name); ?></td>
                    <td class="px-2 py-3"><?php echo e($category->created_at->format('d M Y')); ?></td>
                    <td class="px-2 py-3">
                        <form action="<?php echo e(route('categories.destroy',['category'=>$category->id])); ?>" method="POST">
                        <?php echo method_field("DELETE"); ?>
                        <?php echo csrf_field(); ?>
                        <a href="<?php echo e(route('categories.edit',['category'=>$category->id])); ?>" class="bg-violet-500 px-3 py-1 rounded-md me-5">Edit</a>

                        <button type="submit" class="bg-red-500 px-3 py-1 rounded-md">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <div class="mt-10">
        <?php echo e($categories->links()); ?>

    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/backend.admindashboardindex', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\team-project\resources\views/categories/index.blade.php ENDPATH**/ ?>