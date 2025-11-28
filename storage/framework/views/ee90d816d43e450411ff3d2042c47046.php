<?php $__env->startSection('title', 'Blog Categories'); ?>
<?php $__env->startSection('content'); ?>

    <div class="bg-dark text-white mb-3 px-4 py-3 rounded-2 d-flex justify-content-between align-items-center">
        <ul class="breadcrumb text-white-all mb-0" style="background-color: transparent">
            <li class="breadcrumb-item"><a href="<?php echo e(route('dashboard')); ?>" class="text-white text-decoration-none"><i
                        class="fas fa-home"></i> Home</a></li>
            <li class="breadcrumb-item active"><i class="fas fa-list"></i> Blog Categories</li>
        </ul>
        <a href="<?php echo e(route('admin.blogs.categories.add')); ?>" class="text-decoration-none text-white"><i
                class="fas fa-plus"></i> Add Category</a>
    </div>

    <div class="card">
        <div class="card-header bg-dark text-white-all">
            <h4>Manage Categories</h4>
        </div>
        <div class="card-body">
            
            <?php if(session('success')): ?>
                <div class="alert alert-success">
                    <span class="close" onclick="this.parentElement.style.display='none';"
                        style="cursor: pointer;">&times;</span>
                    <ul class="m-0 p-0">
                        <li><span class="text-white"><?php echo e(session('success')); ?></span></li>
                    </ul>
                </div>
            <?php endif; ?>

            <?php if($errors->any()): ?> <!-- Check if there are any errors -->
                <div class="alert alert-danger">
                    <span class="close" onclick="this.parentElement.style.display='none';"
                        style="cursor: pointer;">&times;</span>
                    <ul class="m-0 p-0">
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><span class="text-white"><?php echo e($error); ?></span></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            <?php endif; ?>
            <div class="table-responsive">
                <table class="table table-striped table-hover" style="width:100%;">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Slug</th>
                            <th>Status</th>
                            <th>Added On</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__empty_1 = true; $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                                <td><?php echo e($i + 1); ?></td>
                                <td><?php echo e($category->name); ?></td>
                                <td><?php echo e($category->slug); ?></td>
                                
                                <td>
                                    <?php if($category->status == 1): ?>
                                        <span class="badge badge-success">Active</span>
                                    <?php else: ?>
                                        <span class="badge badge-danger">Inactive</span>
                                    <?php endif; ?>
                                </td>
                                <td><?php echo e($category->created_at->format('d-M-Y')); ?></td>
                                <td>
                                    <button class="btn btn-outline-primary dropdown-toggle" type="button"
                                        id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        Action
                                    </button>

                                    <div class="dropdown-menu">
                                        <a href="<?php echo e(route('admin.blogs.categories.edit', $category->id)); ?>"
                                            class="dropdown-item has-icon action-edit-btn1" title="Edit Category">
                                            <i class="fa fa-edit"></i> Edit
                                        </a>

                                        <a href="javascript:void(0);" class="dropdown-item has-icon text-danger"
                                            onclick="if(confirm('Delete this category?')) { document.getElementById('delete-blog-form-<?php echo e($category->id); ?>').submit(); }"
                                            title="Delete Category">
                                            <i class="fa fa-trash"></i> Delete
                                        </a>

                                        <form id="delete-blog-form-<?php echo e($category->id); ?>"
                                            action="<?php echo e(route('admin.blogs.categories.delete', $category->id)); ?>"
                                            method="POST" style="display:none;">
                                            <?php echo csrf_field(); ?>
                                        </form>
                                    </div>


                                    
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <tr>
                                <td colspan="6" class="text-center">No categories found.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Slug</th>
                            <th>Status</th>
                            <th>Added On</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin-master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\mokshtube-new\mokshtube\resources\views/backend/blog_categories/index.blade.php ENDPATH**/ ?>