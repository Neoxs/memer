<?php $__env->startSection('content'); ?>




            <div class="container col-md-6 offset-3">


                <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                <div class="pr-3">
                                    <img src="<?php echo e($post->user->profile->profileImage()); ?>" class="rounded-circle w-100" style="max-width: 40px;">
                                </div>
                                <div>
                                    <div class="font-weight-bold">
                                        <a href="/profile/<?php echo e($post->user->id); ?>">
                                            <span class="text-dark"><?php echo e($post->user->username); ?></span>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                                <a href="/profile/<?php echo e($post->user_id); ?>">
                                    <img src="/storage/<?php echo e($post->original_image); ?>" class="w-100">
                                </a>
                                <hr>
                                <div>
                                    <p>
                                        <span class="font-weight-bold pr-2">
                                            <a href="/profile/<?php echo e($post->user->id); ?>">
                                                <span class="text-dark"><?php echo e($post->user->username); ?></span>
                                            </a>

                                        </span> <?php echo e($post->caption); ?>

                                    </p>

                                </div>

                    </div>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <br>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <?php echo e($posts->links()); ?>

                    </div>
                </div>
            </div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/neox/memer/resources/views/posts/index.blade.php ENDPATH**/ ?>