<?php $__env->startSection('content'); ?>
<div class="container">
    <br>
    <form class="form-group" action="/p" enctype="multipart/form-data" method="POST">
        <?php echo csrf_field(); ?>
        <div class="row">
            <div class="col-8 offset-2">

                <div class="row">
                    <h1>Add new meme</h1><br><br><br>
                </div>

                <div class="form-group row">
                    <label for="caption" class="col-md-4 col-form-label">Meme Caption</label>


                    <textarea id="caption" name="caption" type="text" class="form-control<?php echo e($errors->has('caption') ? ' is-invalid' : ''); ?>" caption="caption" value="<?php echo e(old('caption')); ?>" autocomplete="caption" autofocus rows="3"></textarea>
                    <?php if($errors->has('caption')): ?>
                        <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($errors->first('caption')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>

                <div class="form-group row">
                    <div class="custom-file">
                        <label class="custom-file-label" for="image">Choose file</label>
                        <input type="file" class="custom-file-input" id="image" name="image">
                        <?php if($errors->has('image')): ?>

                                <strong><?php echo e($errors->first('image')); ?></strong>

                        <?php endif; ?>
                    </div>
                </div><br>

                <div class="row">
                    <button class="btn btn-primary" type="submit">Add new post</button>
                </div>

            </div>
        </div>


    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/neox/memer/resources/views/posts/create.blade.php ENDPATH**/ ?>