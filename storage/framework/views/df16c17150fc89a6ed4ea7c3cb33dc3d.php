<?php if (isset($component)) { $__componentOriginala591787d01fe92c5706972626cdf7231 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala591787d01fe92c5706972626cdf7231 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.navbar','data' => ['profile' => $profile ? $profile : null]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('navbar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['profile' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($profile ? $profile : null)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala591787d01fe92c5706972626cdf7231)): ?>
<?php $attributes = $__attributesOriginala591787d01fe92c5706972626cdf7231; ?>
<?php unset($__attributesOriginala591787d01fe92c5706972626cdf7231); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala591787d01fe92c5706972626cdf7231)): ?>
<?php $component = $__componentOriginala591787d01fe92c5706972626cdf7231; ?>
<?php unset($__componentOriginala591787d01fe92c5706972626cdf7231); ?>
<?php endif; ?>
<?php $__env->startSection('content'); ?>

<div class="container mx-auto flex flex-col justify-center items-center pt-10 pb-4">
    <h1 class="text-4xl font-bold uppercase mb-1">Blogs</h1>
    <div>
        <span class="text-lg">Knowledge is power.</span>
    </div>
</div>

<?php if (isset($component)) { $__componentOriginalcd0e6212a057a97f4ccb13fddffbc1e2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalcd0e6212a057a97f4ccb13fddffbc1e2 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.banner-section','data' => ['categories' => $categories]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('banner-section'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['categories' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($categories)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalcd0e6212a057a97f4ccb13fddffbc1e2)): ?>
<?php $attributes = $__attributesOriginalcd0e6212a057a97f4ccb13fddffbc1e2; ?>
<?php unset($__attributesOriginalcd0e6212a057a97f4ccb13fddffbc1e2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalcd0e6212a057a97f4ccb13fddffbc1e2)): ?>
<?php $component = $__componentOriginalcd0e6212a057a97f4ccb13fddffbc1e2; ?>
<?php unset($__componentOriginalcd0e6212a057a97f4ccb13fddffbc1e2); ?>
<?php endif; ?>
<section class="container mx-auto mt-10 md:px-0 px-4">

    <div class="grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-10">
        <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <div class="bg-slate-300 border border-gray-100 p-4 rounded-md hover:bg-slate-100 hover:border hover:border-2 hover:border-slate-600 transition-all duration-300">
            

                <div class="mb-5">
                    <div class="w-full flex justify-start items-center space-x-3">
                        <div class="w-10 h-10 rounded-full overflow-hidden bg-gray-200 hover:border hover:border-2 hover:border-red-500 transition-all duration-300 ">
                            <?php if($blog->user->profile): ?>
                                <a href="<?php echo e(route('profile.show',['profile' => $blog->user->id])); ?>"><img src="<?php echo e(Storage::url($blog->user->profile['image'])); ?>" alt="Cover Image" class="w-full h-full object-cover" /></a>
                            <?php else: ?>
                                <a href="<?php echo e(route('profile.show',['profile' => $blog->user->id])); ?>"><img src="<?php echo e(asset('assets/img/ai.jpg')); ?>" class="w-full h-full object-cover rounded-full" alt="profile" /></a>
                            <?php endif; ?>
                        </div>
                        <div class="flex flex-col justify-center items-start">
                            <span class="text-sm font-medium"><?php echo e($blog->user->name); ?></span>
                            <span class="text-xs text-gray-500"><?php echo e($blog->created_at->format("d-M-y")); ?></span>
                        </div>

                    </div>
                </div>
                <a href="<?php echo e(route('blogs.show',['blog'=>$blog->id])); ?>">
                    <div class="w-full h-[300px] bg-gray-200 flex justify-center items-center">
                        <?php if($blog->image): ?>
                            <img src="<?php echo e(Storage::url($blog->image['image'])); ?>" alt="blogs">
                        <?php else: ?> 
                            <img src="https://www.shutterstock.com/image-photo/blogging-blog-word-coder-coding-260nw-520314613.jpg" class="object-cover w-full h-[300px]" alt="logo">
                        <?php endif; ?>
                    </div>

                    <div class="mt-3 h-[200px]">
                        <h1 class="font-bold uppercase text-lg mb-3"><?php echo e($blog->title); ?></h1>
                        <p class="text-gray-500">                 
                        
                            <?php echo e(Str::substr($blog->body,0,50)); ?>

                        </p>
                    </div>
                </a>
        </div>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>


    <div class="mt-10">
        <?php echo e($blogs->links()); ?>

    </div>




</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/frontend.adminindex', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\team-project\resources\views/blog/index.blade.php ENDPATH**/ ?>