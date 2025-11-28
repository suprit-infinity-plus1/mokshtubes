<?php $__env->startSection('title', 'Administrative Dashboard'); ?>
<?php $__env->startSection('content'); ?>
    <section class="section">
        <div class="row ">
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="card bg">
                    <div class="card-body">
                        <span class="info-box-icon bg-transparent pull-right">
                            <i class="fa fa-file fa-fw fa-3x theme-color"></i>
                        </span>
                        <div class="info-box-content">
                            <a href="<?php echo e(route('admin.blogs')); ?>"><h6 class="info-box-text text-dark">All Blogs</h6></a>
                            <p class="text-dark mb-0"><?php echo e(max($blogsCount, 0)); ?></p>
                        </div>
                    </div>
                    <div class="card-footer bg-dark text-white-all">
                        <a href="<?php echo e(route('admin.blogs')); ?>" title="View Details">
                            View Details
                            <i class="fa fa-angle-double-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="card bg">
                    <div class="card-body">
                        <span class="info-box-icon bg-transparent pull-right">
                            <i class="fa fa-file fa-fw fa-3x theme-color"></i>
                        </span>
                        <div class="info-box-content">
                            <a href="<?php echo e(route('admin.blogs.categories')); ?>"><h6 class="info-box-text text-dark">Categories</h6></a>
                            <p class="text-dark mb-0"><?php echo e(max($categoriesCount , 0)); ?></p>
                        </div>
                    </div>
                    <div class="card-footer bg-dark text-white-all">
                        <a href="<?php echo e(route('admin.blogs.categories')); ?>" title="View Details">
                            View Details
                            <i class="fa fa-angle-double-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="card bg">
                    <div class="card-body">
                        <span class="info-box-icon bg-transparent pull-right">
                            <i class="fa fa-file fa-fw fa-3x theme-color"></i>
                        </span>
                        <div class="info-box-content">
                            <a href="<?php echo e(route('admin.blogs.tags')); ?>"><h6 class="info-box-text text-dark">Tag</h6></a>
                            <p class="text-dark mb-0"><?php echo e(max($tagsCount , 0)); ?></p>
                        </div>
                    </div>
                    <div class="card-footer bg-dark text-white-all">
                        <a href="<?php echo e(route('admin.blogs.tags')); ?>" title="View Details">
                            View Details
                            <i class="fa fa-angle-double-right"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin-master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\mokshtube-new\mokshtube\resources\views/backend/dashboard.blade.php ENDPATH**/ ?>