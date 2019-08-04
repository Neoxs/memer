<?php $__env->startSection('content'); ?>
    <div class="container">

        <div class="card mb-3">
            <div class="row no-gutters">
                <div class="col-md-8">
                    <img src="/storage/<?php echo e($post->original_image); ?>" class="card-img w-100" alt="...">
                </div>
                <div class="col-md-4">
                    <div class="card-body">
                        <div>
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

                            <hr>

                            <p>
                                <span class="font-weight-bold">
                                    <a href="/profile/<?php echo e($post->user->id); ?>">
                                        <span class="text-dark"><?php echo e($post->user->username); ?></span>
                                    </a>
                                </span> <?php echo e($post->caption); ?>

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/neox/memer/resources/views/posts/show.blade.php ENDPATH**/ ?>