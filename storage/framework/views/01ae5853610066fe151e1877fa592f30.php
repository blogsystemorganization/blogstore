<?php $__env->startSection('content'); ?>



        <section class="container mx-auto lg:px-6 px-0">
            <div class="w-full flex justify-center">
                <!--Cover-->
               <div class="w-full h-96 rounded-b-lg lg:px-3 px-0">
                    
                    <form action="<?php echo e(route('profile.store')); ?>" method="POST" class="w-full h-full flex justify-center items-center">
                        <?php echo csrf_field(); ?>
                   <!--Cover-->
                    <div class="w-full h-96 rounded-b-lg lg:px-3 px-0">
                            <label for="cover" class="w-full h-full text-lg">
                                <?php if($cover->last()): ?>
                                    <img src="<?php echo e(Storage::url($cover->last()->image)); ?>" alt="Cover Image" class="w-full h-full object-cover" />
                                <?php else: ?>
                                    <img src="<?php echo e(asset('assets/img/ai.jpg')); ?>" class="w-full h-full object-cover rounded-full" alt="profile" />

                                <?php endif; ?>
                            </label>
                      
                        <input type="file" id="cover" name="cover" hidden>
                    </div>


                    </form>

               </div>
            </div>

                <!--Profile-->
                <div class="flex justify-between items-center lg:-mt-10 -mt-4">
                    <div>
                        <form action="" method="" class="w-full h-full flex justify-start items-center md:ml-20 ml-2 space-x-3">
                            <div>
                                <label for="profile" class="text-lg">
                                    <div class="md:w-32 md:h-32 w-16 h-16 rounded-full overflow-hidden">
                                        <?php if($profile->last()): ?>
                                        <img src="<?php echo e(Storage::url($profile->last()->image)); ?>" alt="Cover Image" class="w-full h-full object-cover" />
                                        <?php else: ?>
                                        <img src="<?php echo e(asset('assets/img/ai.jpg')); ?>" class="w-full h-full object-cover rounded-full" alt="profile" />
                                        <?php endif; ?>

                                    </div>
                                </label>
                                <input type="file" id="profile" name="profile" hidden>
                            </div>

                            <div class="mt-5">
                                <h4 class="md:text-lg text-md font-medium"><?php echo e($user->name); ?></h4>
                                <div>
                                    <span class="text-sm text-gray-500">Followers.1000</span>
                                </div>
                            </div>

                        </form>
                    </div>

                    <div class="mt-2 me-2">
                        <div class="flex justify-center items-center space-x-3 ">
                            <a href="<?php echo e(route("blogs.create")); ?>">
                                <button class="bg-indigo-500 text-gray-200 flex justify-end items-center rounded-md md:px-5 px-2 py-2 space-x-2">
                                    <i class="fas fa-plus"></i>
                                    <span class="text-sm md:text-lg">Create post</span>
                                </button>
                            </a>

                            <a href="<?php echo e(route('profile.edit',Auth::user()->id)); ?>">
                                <button class="bg-gray-400 text-gray-200 flex justify-end items-center rounded-md md:px-5 px-2 py-2 space-x-2">
                                    <i class="fas fa-edit"></i>
                                    <span class="text-sm md:text-lg">Edit profile</span>
                                </button>
                            </a>
                        </div>
                    </div>


                </div>
                <hr class="mt-10">
        </section>

            
            <section class="container mx-auto px-6">
                <div class="mb-10">
                    <div class="flex justify-center items-center mt-3 space-x-3">
                        <div class="border-b-2 border-b-indigo-500 text-indigo-700 pb-3"><a href="">Posts</a></div>
                        <div class=" pb-3"><a href="">Favourite</a></div>
                        <div class=" pb-3"><a href="">Save</a></div>
                        <div class=" pb-3"><a href="">Following</a></div>
                        <div class=" pb-3"><a href="">Follower</a></div>
                    </div>
                </div>


                
                <section class="container mx-auto mt-10 md:px-0 px-4">

                    <div class="grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-10">
                        <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    
                        <div class="bg-slate-200 border border-gray-100 shadow-lg p-4 rounded-md">
                            <a href="blogs/<?php echo e($blog->id); ?>">

                            <div class="mb-5">
                                <div class="w-full flex justify-start items-center space-x-3">
                                    <div class="w-10 h-10 border-2 border-red-500 rounded-full overflow-hidden bg-gray-200">
                                        <?php if($profile->last()): ?>
                                            <img src="<?php echo e(Storage::url($profile->last()->image)); ?>" alt="Cover Image" class="w-full h-full object-cover" />
                                        <?php else: ?>
                                            <img src="<?php echo e(asset('assets/img/ai.jpg')); ?>" class="w-full h-full object-cover rounded-full" alt="profile" />
                                        <?php endif; ?>
                                    </div>
                                    <div class="flex flex-col justify-center items-start">
                                        <span class="text-sm font-medium"><?php echo e($blog->user->name); ?></span>
                                        <span class="text-xs text-gray-500"><?php echo e($blog->created_at->format("d-M-y")); ?></span>

                                    </div>

                                </div>
                            </div>



                            <div class="w-full h-[300px] bg-gray-200 flex justify-center items-center">
                                <?php if($blog->image): ?>
                                    <img src="<?php echo e(Storage::url($blog->image['image'])); ?>" alt="blogs">
                                <?php else: ?> 
                                    <img src="https://www.shutterstock.com/image-photo/blogging-blog-word-coder-coding-260nw-520314613.jpg" class="object-cover w-full h-[300px]" alt="logo">
                                <?php endif; ?>
                            </div>

                            <div class="mt-3 h-[200px]">
                                <h1 class="font-bold uppercase text-lg mb-3"><?php echo e($blog->title); ?></h1>
                                <p class="text-gray-700">    
                                    <?php echo e(Str::substr($blog->body,0,50)); ?>

                                </p>


                            </div>


                        </a>

                        </div>
                
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>

                </section>
            </section>
            
        </section>
<?php $__env->stopSection(); ?>







<?php echo $__env->make('layouts/frontend.adminindex', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\team-project\resources\views/profile/index.blade.php ENDPATH**/ ?>