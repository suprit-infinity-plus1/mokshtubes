<?php $__env->startSection('title', 'Administrative Dashboard'); ?>
<?php $__env->startSection('content'); ?>


    <div class="bg-dark text-white mb-3 px-4 py-3 rounded-2 d-flex justify-content-between align-items-center">
        <ul class="breadcrumb text-white-all mb-0" style="background-color: transparent">
            <li class="breadcrumb-item"><a href="<?php echo e(route('dashboard')); ?>" class="text-white text-decoration-none"><i
                        class="fas fa-home"></i>
                    Home</a></li>
            <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-list"></i> Blogs</li>
            
        </ul>
        <ul class="breadcrumb text-white-all mb-0" style="background-color: transparent">
            <li class="breadcrumb-item"><a href="<?php echo e(route('admin.blogs.add')); ?>" class="text-decoration-none"><i
                        class="fas fa-plus"></i> Add
                    Blogs</a></li>
        </ul>
    </div>
    <div class="card">
        <div class="card-header bg-dark text-white-all">
            <h4>Manage Blogs</h4>

            
        </div>


        <div class="card-body">
            <?php if(Session::has('success')): ?>
                <div class="alert alert-success">
                    <span class="close" onclick="this.parentElement.style.display='none';"
                        style="cursor: pointer;">&times;</span>
                    <ul class="p-0 m-0">
                        <li><span class="text-white"><?php echo e(Session::get('success')); ?></span></li>
                    </ul>
                </div>
            <?php endif; ?>

            <?php if(Session::has('errors')): ?>
                <div class="alert alert-danger">
                    <span class="close" onclick="this.parentElement.style.display='none';"
                        style="cursor: pointer;">&times;</span>
                    <ul class="p-0 m-0">
                        <li><span class="text-white"><?php echo e(Session::get('errors')->first()); ?></span></li>
                        <!-- Display the first error -->
                    </ul>
                </div>
            <?php endif; ?>
            <div class="table-responsive">
                <table class="table table-striped table-hover datatable" style="width:100%;">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Image</th>
                            <th>Title</th>
                            
                            <th>Category</th>
                            <th>Tags</th>
                            <th>Added On</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $i = 1; ?>
                        <?php $__empty_1 = true; $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                                <td><?php echo e($i++); ?></td>
                                <td>
                                    <?php if($blog->cover_image): ?>
                                        <img src="<?php echo e(asset('storage/' . $blog->cover_image)); ?>" alt="cover image"
                                            width="80">
                                    <?php else: ?>
                                        ---
                                    <?php endif; ?>
                                </td>
                                <td><?php echo e(\Illuminate\Support\Str::limit($blog->title, 35)); ?></td>
                                
                                <td>
                                    <?php echo e($blog->category?->name ?? '---'); ?>

                                </td>
                                <td>
                                    <?php if($blog->tags->count()): ?>
                                        <?php echo e($blog->tags->pluck('name')->join(', ')); ?>

                                    <?php else: ?>
                                        ---
                                    <?php endif; ?>
                                </td>
                                <td><?php echo e($blog->created_at->format('d-M-Y')); ?></td>
                                <td>
                                    <?php if($blog->status == 1): ?>
                                        <span class="badge badge-success">Published</span>
                                    <?php else: ?>
                                        <span class="badge badge-warning">Draft</span>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <div class="dropdown d-inline">
                                        <button class="btn btn-outline-primary dropdown-toggle" type="button"
                                            id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            Action
                                        </button>
                                        <div class="dropdown-menu">
                                            <a href="<?php echo e(url('blogs/' . $blog->slug)); ?>" class="dropdown-item has-icon text-info" target="_blank" title="View Blog">
                                                <i class="fa fa-eye"></i> View
                                            </a>
                                            <a href="<?php echo e(route('admin.blogs.edit', $blog->id)); ?>"
                                                class="dropdown-item has-icon action-edit-btn1" title="Edit Blog">
                                                <i class="fa fa-edit"></i> Edit
                                            </a>
                                            <a href="javascript:void(0);" class="dropdown-item has-icon text-danger"
                                                onclick="confirmDeleteBlog(<?php echo e($blog->id); ?>)" title="Delete Blog">
                                                <i class="fa fa-trash"></i> Delete
                                            </a>
                                            <form id="delete-blog-form-<?php echo e($blog->id); ?>"
                                                action="<?php echo e(route('admin.blogs.delete', $blog->id)); ?>" method="POST"
                                                style="display:none;">
                                                <?php echo csrf_field(); ?>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <tr class="text-center">
                                <td class="text-danger" colspan="8">
                                    <h5>No Record Found.</h5>
                                </td>
                            </tr>
                        <?php endif; ?>
                    </tbody>

                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Image</th>
                            <th>Title</th>
                            
                            <th>Category</th>
                            <th>Tags</th>
                            <th>Added On</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>

        </div>
    </div>

    <script>
        function confirmDeleteBlog(id) {
            if (confirm('Delete this blog?')) {
                document.getElementById('delete-blog-form-' + id).submit();
            }
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin-master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\mokshtube-new\mokshtube\resources\views/backend/blogs/index.blade.php ENDPATH**/ ?>