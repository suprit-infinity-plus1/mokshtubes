<?php $__env->startSection('title', 'Add Blog Tag'); ?>
<?php $__env->startSection('content'); ?>

<div class="bg-dark text-white mb-3 px-4 py-3 rounded-2">
    <ul class="breadcrumb text-white-all mb-0" style="background-color: transparent">
        <li class="breadcrumb-item"><a href="<?php echo e(route('dashboard')); ?>" class="text-white text-decoration-none"><i class="fas fa-home"></i> Home</a></li>
        <li class="breadcrumb-item"><a href="<?php echo e(route('admin.blogs.tags')); ?>" class="text-white text-decoration-none"><i class="fas fa-tags"></i> All Tags</a></li>
        <li class="breadcrumb-item active">Add Tag</li>
    </ul>
</div>

<div class="card">
    <div class="card-header bg-dark text-white-all">
        <h4>Add New Tag</h4>
    </div>
    <div class="card-body">
        <form action="<?php echo e(route('admin.blogs.tags.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="name">Tag Name <span class="text-danger">*</span></label>
                <input type="text" name="name" id="name" class="form-control" value="<?php echo e(old('name')); ?>" required>
                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            

            <button type="submit" class="btn btn-primary"><i class="fa fa-send"></i> Submit</button>
        </form>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin-master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\mokshtube-new\mokshtube\resources\views/backend/blog_tags/create.blade.php ENDPATH**/ ?>