<?php $__env->startSection('title', 'Administrative Dashboard'); ?>
<?php $__env->startSection('content'); ?>


    <div class="bg-dark text-white mb-3 px-4 py-3 rounded-2 d-flex justify-content-between align-items-center">
        <ul class="breadcrumb text-white-all mb-0" style="background-color: transparent">
            <li class="breadcrumb-item"><a href="<?php echo e(route('dashboard')); ?>" class="text-white text-decoration-none"><i
                        class="fas fa-home"></i>
                    Home</a></li>
            <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-list"></i> Datasheet Leads</li>

        </ul>
        
    </div>
    <div class="card">
        <div class="card-header bg-dark text-white-all d-flex justify-content-between align-items-center">
            <h4>Manage Datasheet Leads</h4>

            <form action="<?php echo e(route('datasheet.export')); ?>" method="GET" class="d-flex align-items-center text-dark">
                <?php echo csrf_field(); ?>
                <input type="date" name="from" class="form-control form-control-sm m-2 text-dark"
                    value="<?php echo e(request('from')); ?>" placeholder="From">
                <input type="date" name="to" class="form-control form-control-sm m-2 text-dark"
                    value="<?php echo e(request('to')); ?>" placeholder="To">
                <button type="submit" class="btn btn-primary btn-lg" style="min-width: 150px;"><i
                        class="fa fa-send"></i>Export CSV</button>
            </form>
            
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
                            <th>Email</th>
                            <th>PDF</th>
                            <th>Added On</th>
                            
                        </tr>
                    </thead>

                    <tbody>
                        <?php $i = 1; ?>
                        <?php $__empty_1 = true; $__currentLoopData = $datasheetLeads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $datasheetLead): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                                <td><?php echo e($datasheetLead->id); ?></td>
                                <td><?php echo e($datasheetLead->email); ?></td>
                                <td><?php echo e($datasheetLead->pdf); ?></td>
                                <td><?php echo e($datasheetLead->created_at->format('d-M-Y')); ?></td>
                                
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
                            <th>Email</th>
                            <th>PDF</th>
                            <th>Added On</th>
                            
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

<?php echo $__env->make('layouts.admin-master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\mokshtube-new\mokshtube\resources\views/backend/datasheet_leads/index.blade.php ENDPATH**/ ?>