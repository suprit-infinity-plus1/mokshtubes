<?php $__env->startSection('title', 'Special Fabricated Products – Steel & Stainless Solutions'); ?> <!-- 53 characters -->
<?php $__env->startSection('meta_description', 'Custom fabricated products from Moksh Tubes — steel furniture, stainless grills, railings
    & glass solutions, designed for durability, function & style.'); ?> <!-- 153 characters -->
<?php $__env->startSection('meta_keywords', 'special fabricated, custom steel furniture, stainless steel grills, railings, glass
    solutions, modern fabricated products, durable fabricated items, custom metal works, industrial steel fabrication'); ?>
<?php $__env->startSection('content'); ?>
    <!--Start breadcrumb area-->
    <section class="breadcrumb-area"
        style="background-image: url(/assets/images/product/steel-furniture/custom-steel-furniture.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Premium Special Fabricated Products</h1> <!-- 52 characters -->
                </div>
            </div>
        </div>
    </section>


    <section class="sec-padd-top sec-padd-bottom bg-white">
        <div class="container">
            <div class="section-title center mb-5">
                <h2 class="fw-bold" style="color: #174268;">Special Fabricated Types</h2>
            </div>

            <div class="row g-4">
                <?php
                    $types = [
                        [
                            'name' => 'Custom Steel Furniture',
                            'slug' => 'custom-steel-furniture',
                            'image' => 'assets/images/product/steel-furniture/custom-steel-furniture.webp',
                        ],
                        [
                            'name' => 'Fabricated SS Grills',
                            'slug' => 'fabricated-ss-grills',
                            'image' => 'assets/images/product/SS-grill.webp',
                        ],
                        [
                            'name' => 'SS Railings',
                            'slug' => 'ss-railings',
                            'image' => 'assets/images/product/SS-railings.webp',
                        ],
                        [
                            'name' => 'Glass Railings',
                            'slug' => 'glass-railings',
                            'image' => 'assets/images/product/Glass-railing.webp',
                        ],
                        // [
                        //     'name' => 'Capillaries',
                        //     'slug' => 'capillaries',
                        //     'image' => 'assets/images/product/capillary-tubes.webp',
                        // ],
                        // [
                        //     'name' => 'Hollow Section Pipe',
                        //     'slug' => 'hollow-section-pipe',
                        //     'image' => 'assets/images/product/hollow-section-pipe.webp',
                        // ],
                    ];
                ?>

                <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-12 col-sm-6 col-lg-4">
                        <a href="<?php echo e(url('/products/special-fabricated/' . $type['slug'])); ?>"
                            class="text-decoration-none d-block h-100">
                            <div class="material-card border rounded shadow-sm p-3 text-center h-100 transition"
                                style="border-color: #db7227; transition: 0.3s;">

                                <img src="<?php echo e(asset($type['image'] ?? 'assets/images/default.webp')); ?>"
                                    alt="<?php echo e($type['name']); ?>" class="img-fluid rounded mb-3" style="border-radius: 8px;">

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

<?php echo $__env->make('layouts.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\mokshtube\resources\views/frontend/products/special-fabricated/index.blade.php ENDPATH**/ ?>