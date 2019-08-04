<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
    <div class="col-3 p-5">
        <img src="<?php echo e($user->profile->profileImage()); ?>" class="rounded-circle w-100">
    </div>
    <div class="col-md-9 col-sm-12 pt-5">
        <div class="d-flex justify-content-between align-items-baseline">
            <div class="d-flex align-items-center pb-3 align-items-baseline">
                <div class="h2"><?php echo e($user->username); ?></div>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('update', $user->profile)): ?>
                <a href="/profile/<?php echo e($user->id); ?>/edit" class="ml-4 btn btn-outline-dark">Edit Profile</a>
                <?php endif; ?>
            </div>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('update', $user->profile)): ?>
                <a href="/p/create" >Add New Meme</a>
            <?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->denies('update', $user->profile)): ?>
                <follow-button user-id="<?php echo e($user->id); ?>" follows="<?php echo e($follows); ?>"></follow-button>
            <?php endif; ?>

        </div>

        <div class="d-flex">
            <div class="pr-5"><strong><?php echo e($postCount); ?></strong> memes</div>
            <div class="pr-5"><strong><?php echo e($followersCount); ?></strong> followers</div>
            <div class="pr-5"><strong><?php echo e($followingCount); ?></strong> following</div>
        </div>

        <div class="pt-4 font-weight-bold"><?php echo e($user->profile->title); ?></div>

        <div><?php echo e($user->profile->description); ?></div>

        <div><a href="<?php echo e($user->profile->url); ?>"><?php echo e($user->profile->url); ?></a></div>
    </div>
</div>
    <hr>
    <div class="row">
        <?php $__currentLoopData = $user->posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-4 pb-4">
                <a href="/p/<?php echo e($post->id); ?>">
                    <img class="w-100 posts"  src="/storage/<?php echo e($post->image); ?>" >
                </a>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/neox/memer/resources/views/profiles/index.blade.php ENDPATH**/ ?>