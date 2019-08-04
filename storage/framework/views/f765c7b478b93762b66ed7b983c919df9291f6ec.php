<?php $__env->startSection('content'); ?>




            <div class="container">
                <div class="card">
                    <div class="card-header">Explore memes</div>
                    <div class="card-body">
                        <div class="row">
                            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-4 pb-4">
                                    <a href="/p/<?php echo e($post->id); ?>">
                                        <img class="w-100 posts"  src="/storage/<?php echo e($post->image); ?>" >
                                    </a>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <?php echo e($posts->links()); ?>

                    </div>
                </div>
            </div>

            <br><br>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/neox/memer/resources/views/posts/explore.blade.php ENDPATH**/ ?>