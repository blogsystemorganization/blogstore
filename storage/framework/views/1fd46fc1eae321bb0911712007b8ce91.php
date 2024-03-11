<!--start parent comment box -->
<div class="pb-10">
    <div class="mx-auto rounded-md">

        <!-- start comment box -->

            <div class="h-52 bg-slate-100 shadow-md p-3 pt-8 mt-8  overflow-scroll overflow-x-hidden">
                <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div>
                    <h2 class="text-lg font-semibold mb-4">
                        <?php echo e($comment->user->name); ?>

                        <span class="text-sm text-slate-700 dark:text-slate-500 p-2">(<?php echo e($comment->created_at->diffForHumans()); ?>)</span>
                    </h2>

                </div>

                <div>
                    <p><?php echo e($comment->body); ?></p>
                </div>
                <hr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <div class="mx-auto">
                    <?php echo e($comments->links()); ?>

                </div>
            </div>

        <!-- end comment box -->

        

        <form action="/<?php echo e($blog->id); ?>/comment/store" method="POST">
            <?php echo csrf_field(); ?>
            <div class="mb-4">
                
                <textarea id="comment" name="body" rows="4" class="w-full border resize-none outline-none p-2" placeholder="Your Comment">
                </textarea>
                <?php $__errorArgs = ['body'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="text-red-800 font-bold py-2"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div class="text-end pb-3">
                <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded-sm cursor-pointer">Submit</button>
            </div>
        </form>

    </div>

</div>
<!--end parent comment box --><?php /**PATH D:\team-project\resources\views/components/comment-box.blade.php ENDPATH**/ ?>