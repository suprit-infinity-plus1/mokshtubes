<?php $__env->startSection('title', 'Bars & Rods – Round, Square, Hex & Flat'); ?> <!-- 52 characters -->
<?php $__env->startSection('meta_description',
    'Moksh Tubes offers premium Bars & Rods – Round, Square, Hex, Flat & Threaded in SS, Alloy & Duplex grades with worldwide delivery.'); ?> <!-- 153 characters -->
<?php $__env->startSection('meta_keywords', 'Bars & Rods, Round Bars, Square Bars, Hex Bars, Flat Bars, Threaded Rods, Stainless Steel Rods, Alloy Bars, Duplex Bars'); ?>
<?php $__env->startSection('content'); ?>
    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(images/background/3.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Premium Round, Square, Hex & Flat Bars</h1> <!-- 52 characters -->
                </div>
            </div>
        </div>
    </section>



    <section class="sec-padd-top sec-padd-bottom bg-white">
        <div class="container">
            <div class="section-title center mb-5">
                <h2 class="fw-bold" style="color: #174268;">Bars & Rods Types</h2>
            </div>

            <div class="row g-4">
                <?php
                    $types = [
                        [
                            'name' => 'Square Bars',
                            'slug' => 'square-bars',
                            'image' => 'assets/images/peoduct/Bars & Rods/square-bars.webp',
                        ],
                        [
                            'name' => 'Threaded Rods',
                            'slug' => 'threaded-rods',
                            'image' => 'assets/images/peoduct/Bars & Rods/threaded-rods.webp',
                        ],
                        [
                            'name' => 'Round Bars',
                            'slug' => 'round-bars',
                            'image' => 'assets/images/peoduct/Bars & Rods/round-bars.webp',
                        ],
                        [
                            'name' => 'Hollow Bars',
                            'slug' => 'hollow-bars',
                            'image' => 'assets/images/peoduct/hollow-section-pipe.webp',
                        ],
                        [
                            'name' => 'Hexagon Bars',
                            'slug' => 'hexagon-bars',
                            'image' => 'assets/images/peoduct/u-bent-tubes.webp',
                        ],
                        [
                            'name' => 'Flat Bars',
                            'slug' => 'flat-bars',
                            'image' => 'assets/images/peoduct/boiler-heat-exchanger-tubes.webp',
                        ],
                       ];
                ?>

                <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-12 col-sm-6 col-lg-4">
                        <a href="<?php echo e(url('/products/bars-rods/' . $type['slug'])); ?>" class="text-decoration-none">
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

<?php echo $__env->make('layouts.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\mokshtube-new\mokshtube\resources\views/frontend/products/bars-rods/index.blade.php ENDPATH**/ ?>