<?php $__env->startSection('title', 'Blog Tags'); ?>
<?php $__env->startSection('content'); ?>

    <div class="bg-dark text-white mb-3 px-4 py-3 rounded-2 d-flex justify-content-between align-items-center">
        <ul class="breadcrumb text-white-all mb-0" style="background-color: transparent">
            <li class="breadcrumb-item"><a href="<?php echo e(route('dashboard')); ?>" class="text-white text-decoration-none"><i
                        class="fas fa-home"></i> Home</a></li>
            <li class="breadcrumb-item active"><i class="fas fa-tags"></i> Blog Tags</li>
        </ul>
        <a href="<?php echo e(route('admin.blogs.tags.add')); ?>" class="text-decoration-none text-white"><i class="fas fa-plus"></i> Add
            Tag</a>
    </div>

    <div class="card">
        <div class="card-header bg-dark text-white-all">
            <h4>Manage Blog Tags</h4>
        </div>
        <div class="card-body">
            <?php if(session('success')): ?>
                <div class="alert alert-success"><?php echo e(session('success')); ?></div>
            <?php endif; ?>

            <div class="table-responsive">
                <table class="table table-striped table-hover" style="width:100%;">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Slug</th>
                            <th>Added On</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__empty_1 = true; $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                                <td><?php echo e($i + 1); ?></td>
                                <td><?php echo e($tag->name); ?></td>
                                <td><?php echo e($tag->slug); ?></td>
                                <td><?php echo e($tag->created_at->format('d-M-Y')); ?></td>
                                <td>

                                    <button class="btn btn-outline-primary dropdown-toggle" type="button"
                                        id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        Action
                                    </button>

                                    <div class="dropdown-menu">
                                        <a href="<?php echo e(route('admin.blogs.tags.edit', $tag->id)); ?>"
                                            class="dropdown-item has-icon action-edit-btn1" title="Edit Tag">
                                            <i class="fa fa-edit"></i> Edit
                                        </a>

                                        <a href="javascript:void(0);" class="dropdown-item has-icon text-danger"
                                            onclick="if(confirm('Delete this tag?')) { document.getElementById('delete-tag-form-<?php echo e($tag->id); ?>').submit(); }"
                                            title="Delete Tag">
                                            <i class="fa fa-trash"></i> Delete
                                        </a>

                                        <form id="delete-tag-form-<?php echo e($tag->id); ?>"
                                            action="<?php echo e(route('admin.blogs.tags.delete', $tag->id)); ?>" method="POST"
                                            style="display:none;">
                                            <?php echo csrf_field(); ?>
                                        </form>
                                    </div>

                                    
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <tr>
                                <td colspan="5" class="text-center">No tags found.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Slug</th>
                            <th>Added On</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin-master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\mokshtube-new\mokshtube\resources\views/backend/blog_tags/index.blade.php ENDPATH**/ ?>