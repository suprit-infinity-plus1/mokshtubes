<?php $__env->startSection('title', 'Premium Sheets, Plates & Coils – Mokshtubes Metal Products'); ?> <!-- 52 characters -->
<?php $__env->startSection('meta_description',
    'Discover high-quality sheets, plates, and coils from MokshTubes—engineered for durability, precision, and superior performance in industrial applications.'); ?> <!-- 153 characters -->
<?php $__env->startSection('content'); ?>
    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(/assets/images/peoduct/Sheets-Plates-and-Coils/Sheets-and-Plates.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>High Quality Sheets, Plates & Coils for Industry</h1> <!-- 52 characters -->
                </div>
            </div>
        </div>
    </section>



    <section class="sec-padd-top sec-padd-bottom bg-white">
        <div class="container">
            <div class="section-title center mb-5">
                <h2 class="fw-bold" style="color: #174268;">Sheets, Plates & Coils Types</h2>
            </div>

            <div class="row g-4">
                <?php
                    $types = [
                        [
                            'name' => 'Chequered Sheets',
                            'slug' => 'chequered-sheets',
                            'image' => 'assets/images/peoduct/Sheets-Plates-and-Coils/chequered-sheets.jpeg',
                        ],

                         [
                            'name' => 'Strips',
                            'slug' => 'strips',
                            'image' => 'assets/images/peoduct/Sheets-Plates-and-Coils/Metal-Strips.jpg',
                        ],
                         [
                            'name' => 'Shim sheets',
                            'slug' => 'shim-sheets',
                            'image' => 'assets/images/peoduct/Sheets-Plates-and-Coils/Shim-Sheets.jpeg',
                        ],
                         [
                            'name' => 'Sheets and plates',
                            'slug' => 'sheets-and-plates',
                            'image' => 'assets/images/peoduct/Sheets-Plates-and-Coils/Sheets-and-Plates.jpg',
                        ],
                         [
                            'name' => 'Perforated sheets',
                            'slug' => 'perforated-sheets',
                            'image' => 'assets/images/peoduct/Sheets-Plates-and-Coils/sheets-Perforated.jpeg',
                        ],
                         [
                            'name' => 'Coils',
                            'slug' => 'coils',
                            'image' => 'assets/images/peoduct/Sheets-Plates-and-Coils/Metal-Coils.jpeg',
                        ],
                         [
                            'name' => 'Cladded plates',
                            'slug' => 'cladded-plates',
                            'image' => 'assets/images/peoduct/Sheets-Plates-and-Coils/Cladded-Plates.jpg',
                        ],
                        // [
                        //     'name' => 'Capillaries',
                        //     'slug' => 'capillaries',
                        //     'image' => 'assets/images/peoduct/capillary-tubes.webp',
                        // ],
                        // [
                        //     'name' => 'Hollow Section Pipe',
                        //     'slug' => 'hollow-section-pipe',
                        //     'image' => 'assets/images/peoduct/hollow-section-pipe.webp',
                        // ],
                    ];
                ?>

                <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-12 col-sm-6 col-lg-4">
    <a href="<?php echo e(url('/products/sheets-plates-coils/' . $type['slug'])); ?>" class="text-decoration-none d-block h-100">
        <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
             style="border-color: #db7227; transition: 0.3s;">
            
            <img src="<?php echo e(asset($type['image'] ?? 'assets/images/default.jpg')); ?>"
                 alt="<?php echo e($type['name']); ?>"
                 class="img-fluid rounded mb-3"
                 style="border-radius: 8px;">
            
            <h6 class="text-uppercase fw-bold mb-0 py-2 px-2 rounded"
                style="background-color: #174268; color: #fff; display: inline-block;">
                <?php echo e($type['name']); ?>

            </h6>
        </div>
    </a>
</div>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>




    <!--End breadcrumb area-->


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\mokshtube\resources\views/frontend/products/sheets-plates-coils/index.blade.php ENDPATH**/ ?>