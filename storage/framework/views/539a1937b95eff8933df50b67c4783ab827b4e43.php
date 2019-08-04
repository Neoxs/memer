<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-3 col-sm-12 p-5">
            <img src="https://scontent-mrs2-1.cdninstagram.com/vp/bb6f107060efa36745d58351020e3552/5DD6AE6F/t51.2885-19/s150x150/29417458_138638406973479_5974828983714316288_n.jpg?_nc_ht=scontent-mrs2-1.cdninstagram.com" class="rounded-circle">
        </div>

        <div class="col-9 pt-5 justify-content-center">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1 class="mr-3"><?php echo e($user->username); ?></h1>
                <a href="#">Add new Post</a>
            </div>
            <div class="d-flex">
                <div class="pr-3"><strong>36 </strong>memes</div>
                <div class="pr-3"><strong>800 </strong>followers</div>
                <div class="pr-3"><strong>1425 </strong>following</div>
            </div>
            <div class="pt-3 font-weight-bold"><?php echo e($user->profile->title); ?></div>
            <div><?php echo e($user->profile->description); ?></div>
            <div><a href="#"><?php echo e($user->profile->url); ?></a></div>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-4">
            <img alt="No photo description available." decoding="auto" class="w-100" srcset="https://scontent-mrs2-1.cdninstagram.com/vp/f94aa3e1911bda3f117112195cc9b6ce/5DE58237/t51.2885-15/e35/s150x150/47693156_1016320851911567_1513800043255775034_n.jpg?_nc_ht=scontent-mrs2-1.cdninstagram.com 150w,https://scontent-mrs2-1.cdninstagram.com/vp/b88e79db6c9972ae87bfbe5d51634628/5DE41131/t51.2885-15/e35/s240x240/47693156_1016320851911567_1513800043255775034_n.jpg?_nc_ht=scontent-mrs2-1.cdninstagram.com 240w,https://scontent-mrs2-1.cdninstagram.com/vp/f498c17a1269b3d01538805a98d9b816/5DEDE04F/t51.2885-15/e35/s320x320/47693156_1016320851911567_1513800043255775034_n.jpg?_nc_ht=scontent-mrs2-1.cdninstagram.com 320w,https://scontent-mrs2-1.cdninstagram.com/vp/e266928fa8b8ce1aeba70e63815be97b/5DED3708/t51.2885-15/e35/s480x480/47693156_1016320851911567_1513800043255775034_n.jpg?_nc_ht=scontent-mrs2-1.cdninstagram.com 480w,https://scontent-mrs2-1.cdninstagram.com/vp/178e3d90fc5354aa08ac711c5deee841/5DE970B2/t51.2885-15/sh0.08/e35/s640x640/47693156_1016320851911567_1513800043255775034_n.jpg?_nc_ht=scontent-mrs2-1.cdninstagram.com 640w" src="https://scontent-mrs2-1.cdninstagram.com/vp/178e3d90fc5354aa08ac711c5deee841/5DE970B2/t51.2885-15/sh0.08/e35/s640x640/47693156_1016320851911567_1513800043255775034_n.jpg?_nc_ht=scontent-mrs2-1.cdninstagram.com" style="object-fit: cover;">
        </div>
        <div class="col-4">
            <img alt="No photo description available." class="w-100" decoding="auto" srcset="https://scontent-mrs2-1.cdninstagram.com/vp/f94aa3e1911bda3f117112195cc9b6ce/5DE58237/t51.2885-15/e35/s150x150/47693156_1016320851911567_1513800043255775034_n.jpg?_nc_ht=scontent-mrs2-1.cdninstagram.com 150w,https://scontent-mrs2-1.cdninstagram.com/vp/b88e79db6c9972ae87bfbe5d51634628/5DE41131/t51.2885-15/e35/s240x240/47693156_1016320851911567_1513800043255775034_n.jpg?_nc_ht=scontent-mrs2-1.cdninstagram.com 240w,https://scontent-mrs2-1.cdninstagram.com/vp/f498c17a1269b3d01538805a98d9b816/5DEDE04F/t51.2885-15/e35/s320x320/47693156_1016320851911567_1513800043255775034_n.jpg?_nc_ht=scontent-mrs2-1.cdninstagram.com 320w,https://scontent-mrs2-1.cdninstagram.com/vp/e266928fa8b8ce1aeba70e63815be97b/5DED3708/t51.2885-15/e35/s480x480/47693156_1016320851911567_1513800043255775034_n.jpg?_nc_ht=scontent-mrs2-1.cdninstagram.com 480w,https://scontent-mrs2-1.cdninstagram.com/vp/178e3d90fc5354aa08ac711c5deee841/5DE970B2/t51.2885-15/sh0.08/e35/s640x640/47693156_1016320851911567_1513800043255775034_n.jpg?_nc_ht=scontent-mrs2-1.cdninstagram.com 640w" src="https://scontent-mrs2-1.cdninstagram.com/vp/178e3d90fc5354aa08ac711c5deee841/5DE970B2/t51.2885-15/sh0.08/e35/s640x640/47693156_1016320851911567_1513800043255775034_n.jpg?_nc_ht=scontent-mrs2-1.cdninstagram.com" style="object-fit: cover;">
        </div>
        <div class="col-4">
            <img alt="No photo description available." class="w-100" decoding="auto" srcset="https://scontent-mrs2-1.cdninstagram.com/vp/f94aa3e1911bda3f117112195cc9b6ce/5DE58237/t51.2885-15/e35/s150x150/47693156_1016320851911567_1513800043255775034_n.jpg?_nc_ht=scontent-mrs2-1.cdninstagram.com 150w,https://scontent-mrs2-1.cdninstagram.com/vp/b88e79db6c9972ae87bfbe5d51634628/5DE41131/t51.2885-15/e35/s240x240/47693156_1016320851911567_1513800043255775034_n.jpg?_nc_ht=scontent-mrs2-1.cdninstagram.com 240w,https://scontent-mrs2-1.cdninstagram.com/vp/f498c17a1269b3d01538805a98d9b816/5DEDE04F/t51.2885-15/e35/s320x320/47693156_1016320851911567_1513800043255775034_n.jpg?_nc_ht=scontent-mrs2-1.cdninstagram.com 320w,https://scontent-mrs2-1.cdninstagram.com/vp/e266928fa8b8ce1aeba70e63815be97b/5DED3708/t51.2885-15/e35/s480x480/47693156_1016320851911567_1513800043255775034_n.jpg?_nc_ht=scontent-mrs2-1.cdninstagram.com 480w,https://scontent-mrs2-1.cdninstagram.com/vp/178e3d90fc5354aa08ac711c5deee841/5DE970B2/t51.2885-15/sh0.08/e35/s640x640/47693156_1016320851911567_1513800043255775034_n.jpg?_nc_ht=scontent-mrs2-1.cdninstagram.com 640w" src="https://scontent-mrs2-1.cdninstagram.com/vp/178e3d90fc5354aa08ac711c5deee841/5DE970B2/t51.2885-15/sh0.08/e35/s640x640/47693156_1016320851911567_1513800043255775034_n.jpg?_nc_ht=scontent-mrs2-1.cdninstagram.com" style="object-fit: cover;">
        </div>

    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/neox/memer/resources/views/index.blade.php ENDPATH**/ ?>
