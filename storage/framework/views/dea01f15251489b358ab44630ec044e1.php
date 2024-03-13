<?php if (isset($component)) { $__componentOriginala591787d01fe92c5706972626cdf7231 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala591787d01fe92c5706972626cdf7231 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.navbar','data' => ['profile' => $profile ? $profile->last() : null]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('navbar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['profile' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($profile ? $profile->last() : null)]); ?>
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
  <div class="md:w-4/5 w-full h-full grid items-center mx-auto">
    <div class="h-4/5 grid items-center">
        <form action="<?php echo e(route('profile.update', Auth::user()->id)); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            
            <div class="flex justify-around">
                <div class="w-1/2 h-[300px] bg-slate-100 text-center text-2xl font-bold flex justify-around items-center cursor-pointer rounded-tl-sm rounded-bl-sm">
                    <h1 class="text-3xl text-slate-600 hidden md:block">Cover</h1>
                    <label for="cover" class="w-[200px] h-[200px] overflow-hidden cursor-pointer">
                        <?php if($cover->last()): ?>
                            <img src="<?php echo e(Storage::url($cover->last()->image)); ?>" alt="Cover Image" class="w-full h-full rounded-full object-cover" />
                        <?php else: ?>
                            <img src="<?php echo e(asset('assets/img/ai.jpg')); ?>" class="w-full h-full object-cover rounded-full" alt="profile" />
                        <?php endif; ?>
                    </label>
                    <input type="file" name="cover" id="cover" hidden />
                </div>
        
                <div class="w-1/2 h-[300px] bg-zinc-200 text-center text-2xl font-bold flex justify-around items-center cursor-pointer rounded-tr-sm rounded-br-sm">
                    <h1 class="text-3xl text-slate-600 hidden md:block">Profile</h1>
                    <label for="profile" class="w-[200px] h-[200px] overflow-hidden cursor-pointer">   
                        <?php if($profile->last()): ?>
                            <img src="<?php echo e(Storage::url($profile->last()->image)); ?>" alt="Cover Image" class="w-full h-full rounded-full object-cover" />
                        <?php else: ?>
                            <img src="<?php echo e(asset('assets/img/ai.jpg')); ?>" class="w-full h-full object-cover rounded-full" alt="profile" />
                        <?php endif; ?>
                    </label>
                    <input type="file" name="profile" id="profile" hidden />
                </div>
            </div>
    
           <div class="w-full text-end mt-10">
                <button type="submit" class="bg-indigo-600 text-slate-100 text-md font-medium rounded-md shadow-md hover:bg-indigo-400 hover:text-slate-900 transition:color duration-200 px-5 py-2.5">Submit</button>
           </div>
         </form>
      </div>
  </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
<style type="text/css">

</style>
<?php $__env->stopSection(); ?>























<?php echo $__env->make('layouts/frontend.adminindex', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\team-project\resources\views/profile/edit.blade.php ENDPATH**/ ?>