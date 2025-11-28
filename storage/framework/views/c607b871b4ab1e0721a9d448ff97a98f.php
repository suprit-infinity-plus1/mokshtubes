<?php $__env->startSection('title', 'Industrial Pipes & Tubes: Premium Products | MokshTubes'); ?>
<?php $__env->startSection('meta_description',
    'Industrial pipes & tubes from Moksh Tubes, including 904L, SMO 254 & Alloy 926 — engineered for corrosion resistance, strength & durability.'); ?>
    
    
<?php $__env->startSection('content'); ?>
    <!--Start breadcrumb area-->


    <!--End mainmenu area-->

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(assets/images/peoduct/pipes-tubes-banner.jpg);">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>Industrial Pipes & Tubes</h1>
                </div>
            </div>
        </div>
    </section>

    <!--End breadcrumb area-->
    <section class="sec-padd-top sec-padd-bottom bg-light">
        <div class="container">
            <div class="section-title center mb-5">
                <h2 class="fw-bold" style="color: #174268;">Our Product Categories</h2>
                <p class="text-muted fs-5 pb-2">Explore a wide range of precision-engineered products for your industry.</p>
            </div>

            <div class="row g-4">

            <?php
                $types = [
                    [
                        'name' => 'Pipes & Tubes',
                        'slug' => 'pipes-tubes',
                        'image' => 'assets/images/peoduct/main-product/pipes&tubes.webp',
                    ],
                    [
                        'name' => 'Sheets, Plates & Coils',
                        'slug' => 'sheets-plates-coils',
                        'image' => 'assets/images/peoduct/main-product/SheetsPlates.webp',
                    ],
                    [
                        'name' => 'Bars & Rods',
                        'slug' => 'bars-rods',
                        'image' => 'assets/images/peoduct/main-product/rods.webp',
                    ],
                    [
                        'name' => 'Pipe Fittings, Flanges & Fasteners',
                        'slug' => 'pipe-fittings-flanges-fasteners',
                        'image' => 'assets/images/peoduct/main-product/fittings.webp',
                    ],
                    [
                        'name' => 'Special Fabricated',
                        'slug' => 'special-fabricated',
                        'image' => 'assets/images/peoduct/main-product/Special.webp',
                    ],
                ];
            ?>


                <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-12 col-sm-6 col-lg-4">
                        
                        <a href="<?php echo e(url('/products/' . $type['slug'])); ?>" class="text-decoration-none">
                            <div class="custom-product-card rounded overflow-hidden shadow h-100 position-relative">
                                
                                <img src="<?php echo e(asset($type['image'] ?? 'assets/images/default.jpg')); ?>"
                                    alt="<?php echo e($type['name']); ?>" class="img-fluid rounded" style="border-radius: 8px;">
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

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\mokshtube-new\mokshtube\resources\views/frontend/products/index.blade.php ENDPATH**/ ?>