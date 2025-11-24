<?php $__env->startSection('title', 'Pipes & Tubes – Welded, Seamless, U-Bend, Boiler | Moksh Tubes'); ?> <!-- 53 characters -->
<?php $__env->startSection('meta_description',
    'Explore welded, seamless, U-bend, boiler tubes & capillaries in stainless steel and nickel alloys. High-quality industrial pipes & tubes supplied globally by Moksh Tubes LLP.'); ?> <!-- 153 characters -->
<?php $__env->startSection('meta_keywords',
    'Pipes, Tubes, Welded Pipes, Seamless Pipes, Capillaries, Hollow Section Pipes, U-Bent Tubes,
    Boiler Tubes, Stainless Steel Pipes, Nickel Tubes, Titanium Tubes'); ?>
<?php $__env->startSection('content'); ?>
    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(/assets/images/peoduct/hollow-section-pipe.webp);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <h1>High Quality Industrial Pipes & Tubes</h1> <!-- 52 characters -->
                </div>
            </div>
        </div>
    </section>



    <section class="sec-padd-top sec-padd-bottom bg-white">
        <div class="container">
            <div class="section-title center mb-5">
                <h2 class="fw-bold" style="color: #174268;">Pipe & Tube Types</h2>
            </div>

            <div class="row g-4">
                <?php
                    $types = [
                        [
                            'name' => 'Welded Pipes & Tubes (ERW & EFW)',
                            'slug' => 'welded-pipes-and-tubes',
                            'image' => 'assets/images/peoduct/welded-pipes-tubes.webp',
                        ],
                        [
                            'name' => 'Seamless Pipes',
                            'slug' => 'seamless-pipes',
                            'image' => 'assets/images/peoduct/seamless-pipes-2.webp',
                        ],
                        [
                            'name' => 'Capillaries',
                            'slug' => 'capillaries',
                            'image' => 'assets/images/peoduct/capillary-tubes.webp',
                        ],
                        [
                            'name' => 'Hollow Section Pipe',
                            'slug' => 'hollow-section-pipe',
                            'image' => 'assets/images/peoduct/hollow-section-pipe.webp',
                        ],
                        [
                            'name' => 'U-Bent Tubes',
                            'slug' => 'u-bent-tubes',
                            'image' => 'assets/images/peoduct/u-bent-tubes.webp',
                        ],
                        [
                            'name' => 'Boiler & Heat Exchanger Tubes',
                            'slug' => 'boiler-heat-exchanger-tubes',
                            'image' => 'assets/images/peoduct/boiler-heat-exchanger-tubes.webp',
                        ],
                    ];
                ?>

                <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-12 col-sm-6 col-lg-4">
    <a href="<?php echo e(url('/products/pipes-tubes/' . $type['slug'])); ?>" class="text-decoration-none d-block h-100">
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

<?php echo $__env->make('layouts.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\mokshtube\resources\views/frontend/products/pipes-tubes/index.blade.php ENDPATH**/ ?>