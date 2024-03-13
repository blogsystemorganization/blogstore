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
<div class="container mx-auto">

    <div class="w-full grid lg:grid-cols-3 grid-cols-1 px-10 my-10">
        <div class="w-full">
            <div>
                <img src="https://www.shutterstock.com/image-photo/blogging-blog-word-coder-coding-260nw-520314613.jpg" class="object-cover w-full h-[300px]" alt="logo" />
            </div>

            <?php if (isset($component)) { $__componentOriginalb587af3f2d49a8723947739772552055 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb587af3f2d49a8723947739772552055 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.comment-box','data' => ['blog' => $blog,'comments' => $comments]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('comment-box'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['blog' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($blog),'comments' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($comments)]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb587af3f2d49a8723947739772552055)): ?>
<?php $attributes = $__attributesOriginalb587af3f2d49a8723947739772552055; ?>
<?php unset($__attributesOriginalb587af3f2d49a8723947739772552055); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb587af3f2d49a8723947739772552055)): ?>
<?php $component = $__componentOriginalb587af3f2d49a8723947739772552055; ?>
<?php unset($__componentOriginalb587af3f2d49a8723947739772552055); ?>
<?php endif; ?>
        </div>

        <div class="md:col-span-2 col-auto h-40 px-5">
            <div class="flex justify-between items-center mb-10">
                <div>

                    <div class="mb-5">
                        <div class="w-full flex justify-start items-center space-x-3">
                            <div class="w-10 h-10 rounded-full bg-gray-200">
                                <img src="" alt="">
                            </div>
                            <div class="flex flex-col justify-center items-start">
                                <span class="text-sm font-medium"><?php echo e($blog->user->name); ?></span>
                                <span class="text-xs text-gray-500"><?php echo e($blog->created_at->format("d-M-y")); ?></span>

                            </div>

                        </div>
                    </div>

                    

                </div>

                <div class="flex items-center">
                    <?php if(Auth::user()->id === $blog->user_id): ?>
                        <form action="<?php echo e(route('blogs.destroy',['blog' => $blog->id])); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="button" class="text-white bg-indigo-600 rounded-sm shadow-md py-2 px-4 me-3 hover:bg-indigo-500 hover:text-slate-900 transition:color duration:200">
                                <a href="<?php echo e(route('blogs.edit',['blog'=>$blog->id])); ?>">Edit</a>
                            </button>

                            <button type="submit" class="text-white bg-rose-600 rounded-sm shadow-md cursor-pointer py-2 px-4 me-3 hover:bg-rose-500 hover:text-slate-900 transition:color duration:200">Delete</button>
                        </form>
                    <?php endif; ?>
                </div>
            </div>

            <div>
                <div class="w-full h-[350px] overflow-y-scroll details-scroll px-2">
                    <h1 class="text-xl font-semibold text-gray-700"><?php echo e($blog->title); ?></h1>
                    <p class="text-md text-gray-600 text-justify indent-10 leading-6 mt-5"><?php echo e($blog->body); ?></p>
                </div>
            </div>

        </div>
    </div>

    <div id="backarrows" class="fixed bottom-5 right-5 lg:block hidden backarrows">
        <div class="w-12 h-12 bg-slate-300 rounded-full">
            <a href="<?php echo e(route("blogs.index")); ?>" class="w-full h-full text-center text-lg text-rose-800 grid items-center"> <i class="fas fa-arrow-left"></i> </a>
        </div>
    </div>

</div>



<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
<style type="text/css">
    html{
        scroll-behavior:smooth;
    }
    ::-webkit-scrollbar{
        width:5px;
    }

    ::-webkit-scrollbar-thumb{
        background-color:gray;
        border-radius:7px;
    }

    ::-webkit-scrollbar-track{
        background-color:rgb(224, 216, 216);
    }

    .backactive{
        display:block;
    }
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script type="text/javascript">
   
//    let getback = document.querySelector('.backarrows');
//    window.onscroll = function(){
//     let scrolltop = document.documentElement.scrollTop;
//         console.log(scrolltop);

//         if(scrolltop >= 100){
//             getback.classList.add('backactive');
//         }else{
//             getback.classList.remove('backactive');
//         }
//    };

  


</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/frontend.adminindex', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\team-project\resources\views/blog/detail.blade.php ENDPATH**/ ?>