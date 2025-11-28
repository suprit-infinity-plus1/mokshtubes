<?php $__env->startSection('title', 'Special Fabricated Products – Steel & Stainless Solutions'); ?> <!-- 53 characters -->
<?php $__env->startSection('meta_description',
    'Custom fabricated products from Moksh Tubes — steel furniture, stainless grills, railings & glass solutions, designed for durability, function & style.'); ?> <!-- 153 characters -->
<?php $__env->startSection('meta_keywords',
    'special fabricated, custom steel furniture, stainless steel grills, railings, glass solutions, modern fabricated products, durable fabricated items, custom metal works, industrial steel fabrication'); ?>
<?php $__env->startSection('content'); ?>
    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(/assets/images/peoduct/steel-furniture/custom-steel-furniture.webp);">
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
                            'image' => 'assets/images/peoduct/steel-furniture/custom-steel-furniture.webp',
                        ],
                        [
                            'name' => 'Fabricated SS Grills',
                            'slug' => 'fabricated-ss-grills',
                            'image' => 'assets/images/peoduct/SS-grill.jpg',
                        ],
                        [
                            'name' => 'SS Railings',
                            'slug' => 'ss-railings',
                            'image' => 'assets/images/peoduct/SS-railings.jpg',
                        ],
                          [
                            'name' => 'Glass Railings',
                            'slug' => 'glass-railings',
                            'image' => 'assets/images/peoduct/Glass-railing.jpg',
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
                        <a href="<?php echo e(url('/products/special-fabricated/' . $type['slug'])); ?>" class="text-decoration-none">
                            <div class="custom-product-card rounded overflow-hidden shadow h-100 position-relative">
                                
                                <img src="<?php echo e(asset($type['image'] ?? 'assets/images/default.jpg')); ?>"
                                    alt="<?php echo e($type['name']); ?>" class="img-fluid rounded " style="border-radius: 8px;">
                                <div class="overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center"
                                    style="background: rgba(23, 66, 104, 0.65); transition: 0.3s;">
                                    <h5 class="text-white text-center fw-bold text-uppercase"><?php echo e($type['name']); ?></h5>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>




    <!--End breadcrumb area-->


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\mokshtube-new\mokshtube\resources\views/frontend/products/special-fabricated/index.blade.php ENDPATH**/ ?>